<?php

// namespace App\Helpers;

use App\Settings\ContactSettings;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\ImageDriver;
use Spatie\Image\Image;

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
    function saveConvertUploadedImage(
        TemporaryUploadedFile $file,
        string $dir = '',
        bool $preserveFilename = false,
        ?int $desiredWidth = null,
        ?int $desiredHeight = null,
        string $disk = 'do',
        string $format = 'webp',
        bool $overWriteFile = false
    ) {
        // get the filename
        $filename = pathinfo($preserveFilename ? $file->getClientOriginalName() : $file->getFilename(), PATHINFO_FILENAME);
        // get the extension
        $extension = $file->getClientOriginalExtension();

        // create a unique filename, if file already exists with the same name/path
        $uniqueFilename = $filename;

        if (! $overWriteFile) {
            while (Storage::disk($disk)->exists("{$dir}/{$uniqueFilename}.{$format}")) {
                // create a unique filename with a random string
                $uniqueFilename = $filename.'_'.Str::random(4);
            }
        }

        // if image
        if (! in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
            // return $file->store($dir, $disk);
            return false;
        }

        // $imagePath = $dir.'/'.pathinfo($file->getFilename())['filename'].'.'.$format;
        $imagePath = "{$dir}/{$uniqueFilename}.{$format}";

        // convert the image to webp, get the base64 encoded image. Because Image is not able to save the image to the cloud disk for some reason
        $image = Image::useImageDriver(ImageDriver::Gd)
            ->loadFile($file->getRealPath())
            ->optimize();

        if ($desiredWidth && $desiredHeight) {
            $image = $image->fit(Fit::Max, $desiredWidth, $desiredHeight);
        }

        // get the base64 encoded image, set $prefixWithFormat to false to not prefix the image with the format
        $image = $image->base64($format, false);

        // store the image in $disk ('do') storage disk
        Storage::disk($disk)->put($imagePath, base64_decode($image));

        return $imagePath;
    }
}
