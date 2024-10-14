<x-app-layout>
    <x-page-header>
        @section("title", "Werken bij Refurb Battery")
        @section("subtitle", "Sluit je bij ons aan en werk mee aan groene groei")
    </x-page-header>

    <div class="bg-[#E5E7EB]">
        <div class="container mx-auto px-5 pb-6 md:px-0">
            <div class="relative -mt-8 flex w-full flex-wrap justify-center">
                @foreach ($vacancies as $vacancy)
                    <div class="w-full p-3 sm:w-1/2 xl:w-1/3">
                        <div
                            class="h-full cursor-pointer rounded-md bg-gray-50 shadow-md transition-all hover:scale-110 hover:bg-gray-100"
                        >
                            <a
                                href="{{ route("vacancy.show", $vacancy->slug) }}"
                                class="mb-2 block h-full font-mulish text-base font-bold uppercase no-underline hover:underline sm:text-lg md:text-xl"
                            >
                                <span
                                    class="block h-44 w-full bg-cover"
                                    style="
                                        background-image: url('{{ $vacancy->image ? Storage::disk("do")->url($vacancy->image) : "" }}');
                                    "
                                ></span>

                                <span class="block p-2">
                                    {{ $vacancy->title }}
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr class="my-6 h-px border-0 bg-gray-300" />

            <div class="mb-12 bg-white p-6 italic sm:p-8 md:p-12">
                <div style="text-align: center">
                    <span
                        style="
                            background-color: rgb(
                                255 255 255 / var(--tw-bg-opacity)
                            );
                        "
                    >
                        "Werken bij Refurb Battery betekent elke dag pionieren.
                        We worden gedreven door samenwerking, innovatie en
                        duurzaamheid. Ben jij die innovator met technische
                        affiniteit en wil je je steentje bijdragen aan groene
                        groei? Dan is onze energie een match."
                    </span>
                </div>
            </div>

            <div
                class="text-dark-blue mx-auto grid w-full grid-cols-3 place-items-center gap-4 md:place-items-start"
            >
                @if ($user)
                    <x-contact-person :user="$user">
                        @section("contact_title", "Interesse of vragen over een vacature of (werken bij) Refurb Battery?")
                    </x-contact-person>
                @endif

                <div class="col-span-3 py-6 md:col-span-2 w-full">
                    <h1
                        class="mb-2 block font-mulish text-base font-bold sm:text-lg md:text-xl"
                    >
                        Nu solliciteren, snel en eenvoudig
                    </h1>
                    <livewire:application-form :source="'werken-bij'" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
