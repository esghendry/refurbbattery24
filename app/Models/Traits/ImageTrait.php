<?php

namespace App\Models\Traits;

use App\Models\StorageObject;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

trait ImageTrait
{
    public function images(): MorphMany
    {
        return $this->morphMany(StorageObject::class, 'model')->where('type', 'image');
    }

    /**
     * Saves and converts an uploaded image to the desired format.
     *
     * @param  TemporaryUploadedFile  $file  The uploaded file.
     * @param  string  $dir  The directory where the image will be saved. If null, a default dir will be created ('{table}/{id}').
     * @param  bool  $preserveFilename  If true, the original filename will be preserved.
     * @param  int|null  $desiredWidth  The desired width of the image. If null, the original width will be used.
     * @param  int|null  $desiredHeight  The desired height of the image. If null, the original height will be used.
     * @param  string  $disk  The disk where the image will be saved.
     * @param  string  $format  The desired format of the image. Defaults to 'webp'.
     * @param  bool  $overwriteFile  If true, the file will be overwritten if it already exists.
     * @return string The path to the saved image.
     */
    public function saveConvertUploadedImage(
        TemporaryUploadedFile $file,
        ?string $dir = null,
        bool $preserveFilename = false,
        ?int $desiredWidth = null,
        ?int $desiredHeight = null,
        string $disk = 'do',
        string $format = 'webp',
        bool $overwriteFile = false
    ) {
        // set a default directory if none is given
        if (! $dir) {
            $id = $this->getKey() ?? '';
            $dir = "{$this->getTable()}/{$id}";
        }

        // convert and save the image
        return saveConvertUploadedImage(
            file: $file,
            dir: $dir,
            record: $this,
            preserveFilename: $preserveFilename,
            desiredWidth: $desiredWidth,
            desiredHeight: $desiredHeight,
            disk: $disk,
            format: $format,
            overwriteFile: $overwriteFile
        );
    }
}
