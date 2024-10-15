<?php

namespace App\Models\Traits;

use App\Models\StorageObject;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Str;

trait StorageObjectTrait
{
    public function storageObjects(): MorphMany
    {
        return $this->morphMany(StorageObject::class, 'model');
    }

    public function saveTemporaryFile(
        TemporaryUploadedFile $file,
        ?string $dir = null,
        bool $preserveFilename = false,
        string $disk = 'do',
        bool $overwriteFile = false
    ) {
        if (! $dir) {
            $id = $this->getKey() ?? '';
            $dir = "{$this->getTable()}/{$id}";
        }

        $filename = pathinfo(
            $preserveFilename
            ? $file->getClientOriginalName()
            : $file->getFilename(),
            PATHINFO_FILENAME);

        $extension = pathinfo($file->getFilename(), PATHINFO_EXTENSION);

        switch ($extension) {
            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'webp':
                $type = 'image';
                break;
            case 'pdf':
                $type = 'pdf';
                break;
            default:
                $type = 'file';
                break;
        }

        $uniqueFilename = $filename;

        if (! $overwriteFile) {
            while (Storage::disk($disk)->exists("{$dir}/{$uniqueFilename}.{$extension}")) {
                // create a unique filename with a random string
                $uniqueFilename = $filename.'_'.Str::random(4);
            }
        }

        $fileName = "{$uniqueFilename}.{$extension}";

        $hash = md5($file->getContent());

        // save file to disk
        $file = $file->storeAs($dir, $fileName, $disk);

        // add file to storage objects
        $this->storageObjects()->create([
            'path' => $file,
            'filename' => $fileName,
            'disk' => $disk,
            'size' => Storage::disk($disk)->size($file),
            'type' => $type,
            'hash' => $hash,
        ]);

        return $file;

    }
}
