<x-app-layout>
    <x-page-header>
        @section("title", $vacancy->title)
        @section("subtitle", $vacancy->subtitle)
    </x-page-header>

    <div class="bg-[#E5E7EB]">
        <div class="container mx-auto px-5 py-6 md:px-0">
            <div class="grid grid-cols-12">
                <div
                    class="text-dark-blue col-span-12 pt-6 md:col-span-10 md:col-start-2 md:px-0 xl:col-span-8 xl:col-start-3"
                >
                    {{--  --}}
                    <div
                        class="linkEffects z-10 grid w-full grid-cols-12 gap-2 px-2 sm:gap-3 md:px-0 lg:gap-5"
                    >
                        <div
                            class="md:col-start-0 col-span-12 border-b-2 border-gray-300 pb-6 lg:col-start-1"
                        >
                            <div
                                class="text-dark-blue grid w-full grid-cols-5 pb-6 [text-shadow:_0px_0px_0px_rgb(0_0_0_/_100%)]"
                            >
                                <div class="col-span-5 md:col-span-3">
                                    <h2
                                        class="block text-base font-bold sm:text-lg md:text-xl"
                                    >
                                        {{ $vacancy->info_heading }}
                                    </h2>
                                    <div
                                        class="mt-6 bg-white p-7 italic sm:p-6 md:p-8"
                                    >
                                        “{{ $vacancy->quote }}”
                                    </div>
                                </div>
                                <div
                                    class="col-span-5 pt-4 md:col-span-2 md:p-4"
                                >
                                    <div
                                        class="mx-auto mb-4 hidden aspect-square w-10/12 rounded-full bg-cover md:block"
                                        style="max-width: 15rem;background-image:url('{{ asset("assets/images/rb_production_facility.webp") }}'"
                                    ></div>
                                    <div class="text-center">
                                        <p
                                            class="block text-xs font-bold md:hidden"
                                        >
                                            LOCATIE
                                        </p>

                                        @if ($vacancy->location->name)
                                            <p
                                                class="mb-6 hidden text-xs uppercase md:block"
                                            >
                                                {{ $vacancy->location->name }}
                                            </p>
                                        @endif

                                        @if ($vacancy->location->building_name)
                                            <p>
                                                <strong>
                                                    {{ $vacancy->location->building_name }}
                                                </strong>
                                            </p>
                                        @endif

                                        <p>
                                            {{ $vacancy->location->address }}
                                            {{ $vacancy->location->number }}
                                        </p>
                                        <p>
                                            {{ $vacancy->location->postal_code }}
                                            {{ $vacancy->location->city }}
                                        </p>

                                        <a
                                            href="/route"
                                            class="text-xs font-bold underline hover:no-underline"
                                        >
                                            routebeschrijving
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="z-10 grid w-full grid-cols-12 gap-0 px-2 md:px-0"
                    >
                        <div class="md:col-start-0 col-span-12 lg:col-start-1">
                            @foreach ($vacancy->blocks as $key => $block)
                                <div
                                    class="overflow-hidden border-b-2 border-gray-300 py-6"
                                >
                                    <div
                                        class="hover:text-dark-blue flex cursor-pointer justify-between text-gray-500"
                                        onclick="this.parentNode.querySelector('.content').classList.toggle('hidden');this.querySelector('svg').classList.toggle('rotate-180');"
                                    >
                                        <div>
                                            <h2
                                                class="block text-lg font-bold sm:text-xl md:text-2xl"
                                            >
                                                {{ $block["title"] }}
                                            </h2>
                                        </div>
                                        <button>
                                            <svg
                                                class="rotate-180 transition-all"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                            >
                                                <g
                                                    fill="none"
                                                    fill-rule="evenodd"
                                                >
                                                    <path
                                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"
                                                    ></path>
                                                    <path
                                                        fill="currentColor"
                                                        d="M13.06 16.06a1.5 1.5 0 0 1-2.12 0l-5.658-5.656a1.5 1.5 0 1 1 2.122-2.121L12 12.879l4.596-4.596a1.5 1.5 0 0 1 2.122 2.12l-5.657 5.658Z"
                                                    ></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="animate__animated animate__fadeInUp content {{ $key > 0 ? "hidden" : "" }} prose max-w-none pt-2"
                                    >
                                        {!! $block["content"] !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>

            <div
                class="text-dark-blue mx-auto mt-6 grid w-full grid-cols-3 place-items-center gap-4 md:place-items-start"
            >
                @if ($vacancy->user ?? contactSettings()->vacancyUser())
                    <x-contact-person :user="$vacancy->user ?? contactSettings()->vacancyUser()">
                        @section("contact_title", "Interesse of vragen over een vacature of (werken bij) Refurb Battery?")
                    </x-contact-person>
                @endif

                <div class="col-span-3 py-6 md:col-span-2 w-full">
                    <h1
                        class="mb-2 block text-base font-bold sm:text-lg md:text-xl"
                    >
                        Nu solliciteren, snel en eenvoudig
                    </h1>
                    <livewire:applicant-form
                        :source="'werken-bij/'.$vacancy->slug"
                        :slug="$vacancy->slug"
                    />
                </div>
            </div>

            <div class="text-center text-rb-dark-blue">
                <h2 class="block text-lg font-bold sm:text-xl md:text-2xl">
                    Het oplaadproces.
                </h2>
                <div
                    class="mb-6 grid grid-cols-3 px-10 py-6 text-rb-dark-blue [text-shadow:_0px_0px_0px_rgb(0_0_0_/_100%)] sm:grid-cols-2 xl:grid-cols-3"
                >
                    <div class="col-span-3 p-4 sm:col-span-1 xl:col-span-1">
                        <svg
                            class="mx-auto text-rb-green"
                            xmlns="http://www.w3.org/2000/svg"
                            height="48"
                            viewBox="0 -960 960 960"
                            width="48"
                        >
                            <path
                                fill="currentColor"
                                d="M450-403h60v-240h-60v240Zm30.5 150q12.5 0 21-9t8.5-21.5q0-12.5-8.625-21T480-313q-12 0-21 8.625T450-283q0 12 9 21t21.5 9ZM310-80q-12.75 0-21.375-8.625T280-110v-676q0-12.75 8.625-21.375T310-816h90v-64h160v64h90q12.75 0 21.375 8.625T680-786v676q0 12.75-8.625 21.375T650-80H310Zm30-60h280v-616H340v616Zm0 0h280-280Z"
                            ></path>
                        </svg>
                        <div class="text-lg font-bold">
                            Opladen: ontdek of we bij jouw energie passen
                        </div>
                    </div>
                    <div class="col-span-3 p-4 sm:col-span-1 xl:col-span-1">
                        <svg
                            class="mx-auto text-rb-green"
                            xmlns="http://www.w3.org/2000/svg"
                            height="48"
                            viewBox="0 -960 960 960"
                            width="48"
                        >
                            <path
                                fill="currentColor"
                                d="M660-87v-113h-80l120-192v112h80L660-87Zm-350 7q-13 0-21.5-8.5T280-110v-676q0-13 8.5-21.5T310-816h90v-64h160v64h90q13 0 21.5 8.5T680-786v333q-16 0-31 2t-29 7v-312H340v383h174q-22 28-34.5 62T467-239q0 48 19.5 89T539-80H310Z"
                            ></path>
                        </svg>
                        <div class="text-lg font-bold">
                            Halverwege! Laten we ons richten op jouw
                            (technische) krachten
                        </div>
                    </div>
                    <div class="col-span-3 p-4 sm:col-span-3 xl:col-span-1">
                        <svg
                            class="mx-auto text-rb-green"
                            xmlns="http://www.w3.org/2000/svg"
                            height="48"
                            viewBox="0 -960 960 960"
                            width="48"
                        >
                            <path
                                fill="currentColor"
                                d="M310-80q-13 0-21.5-8.5T280-110v-676q0-13 8.5-21.5T310-816h90v-64h160v64h90q13 0 21.5 8.5T680-786v333q-88 0-150.5 62.5T467-239q0 48 19.5 89T539-80H310Zm30-556h280v-120H340v120ZM660-87v-113h-80l120-192v112h80L660-87Z"
                            ></path>
                        </svg>
                        <div class="text-lg font-bold">
                            Piekkracht: watt zijn jouw werkenergiebronnen en
                            verwachtingen?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
