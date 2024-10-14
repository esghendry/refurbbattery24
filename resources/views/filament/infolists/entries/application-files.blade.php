<div>
    @foreach ($getRecord()->getMedia('application_pdf') as $file)

        <a href="{{ $file->getTemporaryUrl(now()->addMinutes(5)) }}" target="_blank">
            {{ $file->name }}
        </a>
        
    @endforeach
</div>