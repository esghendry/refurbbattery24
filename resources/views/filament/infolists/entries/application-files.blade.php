<x-filament::section>
    <x-slot name="heading">Uploaded files</x-slot>

    <div class="grid gap-2 py-6">
        @foreach ($getRecord()->storageObjects as $file)
            @if ($file->type != "image")
                <a
                    href="{{ Storage::disk($file->disk)->temporaryUrl($file->path, now()->addMinutes(5)) }}"
                    target="_blank"
                    class="block underline hover:text-blue-500"
                >
                    {{ $file->filename }}
                </a>
            @endif
        @endforeach
    </div>

    <div class="grid gap-2 py-6" style="grid-template-columns: repeat(2, 1fr)">
        @foreach ($getRecord()->storageObjects as $file)
            @if ($file->type == "image")
                <a
                    href="{{ Storage::disk($file->disk)->temporaryUrl($file->path, now()->addMinutes(5)) }}"
                    target="_blank"
                >
                    <img
                        src="{{ Storage::disk($file->disk)->temporaryUrl($file->path, now()->addMinutes(5)) }}"
                        alt="{{ $file->filename }}"
                        style="
                            max-width: 500px;
                            max-height: 500px;
                            object-fit: contain;
                        "
                    />
                </a>
            @endif
        @endforeach
    </div>
</x-filament::section>
