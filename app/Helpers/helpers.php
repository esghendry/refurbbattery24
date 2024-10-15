<?php

// namespace App\Helpers;

use App\Settings\ContactSettings;
use App\Settings\GeneralSettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\ImageDriver;
use Spatie\Image\Image;
use Symfony\Component\HttpFoundation\File\File;

if (! function_exists('generalSettings')) {
    function generalSettings()
    {
        return app(GeneralSettings::class);
    }
}

if (! function_exists('contactSettings')) {
    function contactSettings()
    {
        return app(ContactSettings::class);
    }
}

if (! function_exists('saveConvertUploadedImage')) {
    /**
     * Saves and converts an uploaded image to the desired format.
     *
     * @param  TemporaryUploadedFile  $file  The uploaded file.
     * @param  string  $dir  The directory where the image will be saved.
     * @param  Model|null  $record  The model that the image will be linked to.
     * @param  bool  $preserveFilename  If true, the original filename will be preserved.
     * @param  int|null  $desiredWidth  The desired width of the image. If null, the original width will be used.
     * @param  int|null  $desiredHeight  The desired height of the image. If null, the original height will be used.
     * @param  string  $disk  The disk where the image will be saved.
     * @param  string  $format  The desired format of the image.
     * @param  bool  $overwriteFile  If true, the file will be overwritten if it already exists.
     * @return string The path to the saved image.
     */
    function saveConvertUploadedImage(
        TemporaryUploadedFile $file,
        string $dir,
        ?Model $record = null,
        bool $preserveFilename = false,
        ?int $desiredWidth = null,
        ?int $desiredHeight = null,
        string $disk = 'do',
        string $format = 'webp',
        bool $overwriteFile = false,
    ) {
        // convert the image to webp
        if (! $imageContent = convertImage(
            file: $file,
            desiredWidth: $desiredWidth,
            desiredHeight: $desiredHeight,
            format: $format
        )) {
            return false;
        }

        // save the image
        $imagePath = saveImage(
            file: $file,
            imageContent: $imageContent,
            record: $record,
            dir: $dir,
            preserveFilename: $preserveFilename,
            disk: $disk,
            format: $format,
            overwriteFile: $overwriteFile
        );

        // add image to storageObjects

        return $imagePath;
    }

    if (! function_exists('convertImage')) {
        function convertImage(
            File|TemporaryUploadedFile $file,
            ?int $desiredWidth = null,
            ?int $desiredHeight = null,
            string $format = 'webp',
        ): string {

            // get the extension
            $extension = $file instanceof TemporaryUploadedFile
            ? $file->getClientOriginalExtension()
            : pathinfo($file->getFilename(), PATHINFO_EXTENSION);

            // if not an image, return false
            if (! in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                // return $file->store($dir, $disk);
                return false;
            }

            // convert the image to webp, get the base64 encoded image. Because Image is not able to save the image to the cloud disk for some reason
            $image = Image::useImageDriver(ImageDriver::Gd)
                ->loadFile($file->getRealPath())
                ->optimize();

            // resize the image if needed
            if ($desiredWidth && $desiredHeight) {
                $image = $image->fit(Fit::Max, $desiredWidth, $desiredHeight);
            }

            // get the base64 encoded image, set $prefixWithFormat to false to not prefix the image with the format
            return base64_decode($image->base64($format, false));
        }
    }

    if (! function_exists('saveImage')) {
        function saveImage(
            File|TemporaryUploadedFile $file,
            string $imageContent,
            string $dir,
            ?Model $record = null,
            bool $preserveFilename = false,
            string $disk = 'do',
            string $format = 'webp',
            bool $overwriteFile = false
        ) {
            // get the filename
            $filename = pathinfo(
                $preserveFilename && $file instanceof TemporaryUploadedFile
                ? $file->getClientOriginalName()
                : $file->getFilename(), PATHINFO_FILENAME
            );

            $uniqueFilename = $filename;

            if (! $overwriteFile) {
                while (Storage::disk($disk)->exists("{$dir}/{$uniqueFilename}.{$format}")) {
                    // create a unique filename with a random string
                    $uniqueFilename = $filename.'_'.Str::random(4);
                }
            }

            $imagePath = "{$dir}/{$uniqueFilename}.{$format}";

            // store the image in $disk ('do') storage disk
            Storage::disk($disk)->put($imagePath, $imageContent);

            // add image to storageObjects
            if ($record) {
                $record->images()->create([
                    'path' => $imagePath,
                    'filename' => $uniqueFilename,
                    'disk' => $disk,
                    'size' => Storage::disk($disk)->size($imagePath),
                    'type' => 'image',
                    'hash' => md5($imageContent),
                ]);
            }

            return $imagePath;
        }
    }
}
