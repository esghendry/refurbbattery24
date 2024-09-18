<div
    class="h-full cursor-pointer rounded-md bg-gray-50 shadow-md transition-all hover:scale-105 hover:bg-gray-100"
>
    <a
        href="{{ $article->url }}"
        class="mb-2 block h-full font-mulish text-base font-bold uppercase no-underline hover:underline sm:text-lg md:text-xl"
    >
        <span
            class="block h-44 w-full bg-cover"
            style="background-image: url('{{ asset($article->img) }}')"
        ></span>
        <span class="block p-2">
            {{ $article->title }}
        </span>
    </a>
</div>
