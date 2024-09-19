<a
    href="{{ $url }}"
    class="{{ $classes }} group relative block size-full bg-cover p-6 text-rb-dark-blue"
    style="background-image: url('{{ $img }}')"
>
    <div
        class="absolute inset-0 z-10 hidden size-full bg-rb-dark-blue/30 group-hover:block"
    ></div>

    @if ($darkBackground)
        <div class="absolute inset-0 z-10 size-full bg-black/30"></div>
    @endif

    <div class="relative z-20 w-8/12">
        <h4 class="text-2xl font-bold">{{ $title }}</h4>
        <p class="mt-2 text-lg font-medium leading-6">{{ $description }}</p>
        <p class="mt-6 font-bold underline group-hover:no-underline">
            {{ $urlText }}
        </p>
    </div>
</a>
