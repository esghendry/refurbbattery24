<x-app-layout>
    <x-page-header>
        @section("title", "Nieuws")
        @section("subtitle", "De laatste ontwikkelingen")
        <br>
    </x-page-header>

    <div class="container mx-auto px-5 md:px-0 mb-24">
        <div class="-mt-6 relative grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <x-news-item :article="$article" />
            @endforeach
        </div>
    </div>
</x-app-layout>
