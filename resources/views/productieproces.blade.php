<x-app-layout>
    <x-page-header>
        @section("title", "Ons productieproces")
        @section("subtitle", "Samenwerken voor meer grip op e-waste")
        <br />
    </x-page-header>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_productie.png") }}"
                        alt="Productie"
                        class="z-50 -mt-12"
                    />
                </div>

                <div>
                    <h3 class="text-xl font-bold">Wat is e-waste?</h3>
                    <p class="text-lg font-medium leading-6">
                        Alle bedrijven die elektronische apparaten op de
                        Europese markt brengen, zijn verantwoordelijk voor
                        recycling aan het einde van de levensduur van hun
                        product. In de meeste gevallen organiseren producenten
                        de inzameling en recycling van hun apparaten zelf, en
                        daarmee ook de batterijen, wat in het beste geval leidt
                        tot herwinning van een klein deel van de grondstoffen.
                        Maar eigen duurzaamheidsdoelen en toenemende wetgeving
                        beweegt bedrijven om te kijken naar verbeterde
                        recyclingsmogelijkheden. Verenigingen zoals Stichting
                        OPEN (voorheen Stibat en EPAC) zijn opgericht om als
                        collectief die verantwoordelijkheid te dragen.
                    </p>
                    <a
                        href="https://www.stichting-open.org/2024/05/01/accell-group-en-refurb-battery-verduurzamen-fietsbranche/"
                        target="_blank"
                        class="external-link mt-2 inline-block font-bold underline duration-100 hover:text-rb-green"
                    >
                        Over onze samenwerking met Stichting Open
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div>
                    <h3 class="text-xl font-bold">
                        Refurb Battery: ReUse in plaats van ReCycling
                    </h3>
                    <p class="text-lg font-medium leading-6">
                        Refurb Battery werkt nauw samen met Stichting OPEN en
                        producenten zoals Accell Group. Ons proces is gericht op
                        het maximaliseren van hergebruik en het minimaliseren
                        van het aantal batterijen die onnodig in
                        verbrandingsovens terechtkomen. Accu’s worden
                        gedemonteerd en cellen worden uitvoerig op kwaliteit
                        gecheckt. Vervolgens hergebruiken we ze in
                        maatwerkmodules, ontworpen voor circulariteit. Door de
                        cellen op deze manier te hergebruiken, redden we ze van
                        de shredder en verlengen we de levensduur van iedere cel
                        tot wel 3 of 4 keer. Met elke cel die we een tweede
                        leven geven, voorkomen we de productie van een nieuwe
                        cel. Zo besparen we energie, grondstoffen en uitstoot.
                        Elke nieuw-geproduceerde cel heeft een geschatte
                        CO2-uitstoot van 150 kg/kWh.
                    </p>
                    <a
                        href="https://www.accell-group.com/en/news/news-2/accell-group-reduces-co2-emissions-by-giving-second-life-to-e-bike-batteries"
                        target="_blank"
                        class="external-link mt-2 inline-block font-bold underline duration-100 hover:text-rb-green"
                    >
                        Over onze samenwerking met ACCELL
                    </a>
                </div>

                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_dumpster.png") }}"
                        alt="Batterijen container"
                        class=""
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <img
                src="{{ asset("assets/images/rb_proces.png") }}"
                alt=""
                class="my-12"
            />
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div>
                    <h3 class="text-xl font-bold">
                        Slimme dataverzameling op celniveau
                    </h3>
                    <p class="text-lg font-medium leading-6">
                        Naar schatting van Refurb Battery zijn vaak meer dan 70%
                        van de cellen nog van goede kwaliteit op het moment dat
                        een accu wordt ingeleverd. Onze modules zijn ontworpen
                        voor circulariteit en daarom voorzien van een slim BMS,
                        die inzicht geeft in hoe iedere individuele cel
                        presteert. Zo kunnen we cellen volgen, indien nodig
                        uitsluiten en vervolgens vervangen. Ook voorzien we elke
                        batterijcel van een eigen paspoort.
                    </p>
                    <br />
                    <p class="text-lg font-medium leading-6">
                        Dat levert waardevolle data op, die we niet alleen
                        terugkoppelen aan de afnemer maar ook aan fabrikanten en
                        Stichting OPEN, met als doel ook de productie van nieuwe
                        cellen uiteindelijk te verbeteren. Zo dragen we bij aan
                        de wereldwijde innovatieopdracht van de IEA om de
                        productie van batterijen te verbeteren.
                    </p>

                    <a
                        href="{{ route("slimme-data") }}"
                        class="mt-6 inline-block bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                    >
                        Lees meer over slimme data
                    </a>
                </div>

                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_dashboardmockup.png") }}"
                        alt="Batterijen container"
                        class="md:-mt-24"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_productie.png") }}"
                        alt="Productie"
                        class=""
                    />
                </div>

                <div>
                    <h3 class="text-xl font-bold">Energieopslagsystemen</h3>
                    <p class="text-lg font-medium leading-6">
                        De modules van Refurb Battery worden gebruikt in
                        <b>circulaire energieopslagsystemen</b>
                        (CESS), zowel plug & play als op maat, die hun
                        toepassing vinden in allerlei situaties. Onze systemen
                        elektrificeren bouwplaatsen en evenementen, helpen het
                        net ontlasten en fungeren als buffer om energieverbruik
                        goed te managen. Al onze systemen zijn gebouwd volgens
                        de leidende normen en hoogste veiligheidseisen.
                    </p>
                    <a
                        href="{{ route("toepassingen") }}"
                        class="mt-6 inline-block bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                    >
                        Lees meer over onze toepassingen
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6">
                <div>
                    <h2 class="text-3xl font-bold">Ecosysteem van partners</h2>
                    <p class="mt-4 text-lg font-bold leading-6">
                        Dankzij onze samenwerkingen met producenten zoals Accell
                        en Van Moof hebben we tot nu toe al 1 miljoen
                        batterijcellen kunnen redden van de shredder. Maar wat
                        ons betreft is dit nog maar het begin. Werk jij mee aan
                        het succes?
                    </p>
                    <a
                        href="{{ route("contact") }}"
                        class="mt-6 inline-block bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                    >
                        Neem contact op
                    </a>
                </div>

                <div
                    data-hs-carousel='{
                        "loadingClasses": "opacity-0",
                        "isAutoPlay": true
                    }'
                    class="relative mt-6"
                >
                    <div
                        class="hs-carousel relative min-h-52 w-full overflow-hidden rounded-lg bg-white lg:min-h-64 xl:min-h-72"
                    >
                        <div
                            class="hs-carousel-body absolute bottom-0 start-0 top-0 flex flex-nowrap opacity-0 transition-transform duration-700"
                        >
                            <div class="hs-carousel-slide">
                                <div
                                    class="flex h-full justify-center bg-gray-300 p-6"
                                >
                                    <span
                                        class="grid grid-cols-3 items-center justify-items-center gap-6 self-center text-4xl text-gray-800 transition duration-700 dark:text-white"
                                    >
                                        <img
                                            src="{{ asset("assets/icons/greenchoice.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                        <img
                                            src="{{ asset("assets/icons/stichting-open.png") }}"
                                            alt=""
                                            class=""
                                        />
                                        <img
                                            src="{{ asset("assets/icons/accell-group.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                    </span>
                                </div>
                            </div>
                            <div class="hs-carousel-slide">
                                <div
                                    class="flex h-full justify-center bg-gray-300 p-6"
                                >
                                    <span
                                        class="grid grid-cols-3 items-center justify-items-center gap-6 self-center text-4xl text-gray-800 transition duration-700 dark:text-white"
                                    >
                                        <img
                                            src="{{ asset("assets/icons/port-of-moerdijk.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                        <img
                                            src="{{ asset("assets/icons/brainport.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                        <img
                                            src="{{ asset("assets/icons/avans-hogeschool.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                    </span>
                                </div>
                            </div>
                            <div class="hs-carousel-slide">
                                <div
                                    class="flex h-full justify-center bg-gray-300 p-6"
                                >
                                    <span
                                        class="grid grid-cols-3 items-center justify-items-center gap-6 self-center text-4xl text-gray-800 transition duration-700 dark:text-white"
                                    >
                                        <img
                                            src="{{ asset("assets/icons/esg-tech.webp") }}"
                                            alt=""
                                            class=""
                                        />
                                        <img
                                            src="{{ asset("assets/icons/hyvolt.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                        <img
                                            src="{{ asset("assets/icons/bam.svg") }}"
                                            alt=""
                                            class=""
                                        />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button
                        type="button"
                        class="hs-carousel-prev hs-carousel:disabled:opacity-50 absolute inset-y-0 start-0 inline-flex h-full w-[46px] items-center justify-center rounded-s-lg text-gray-800 hover:bg-gray-800/10 focus:bg-gray-800/10 focus:outline-none disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                    >
                        <span class="text-2xl" aria-hidden="true">
                            <svg
                                class="size-5 shrink-0"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button
                        type="button"
                        class="hs-carousel-next hs-carousel:disabled:opacity-50 absolute inset-y-0 end-0 inline-flex h-full w-[46px] items-center justify-center rounded-e-lg text-gray-800 hover:bg-gray-800/10 focus:bg-gray-800/10 focus:outline-none disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                    >
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                            <svg
                                class="size-5 shrink-0"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </span>
                    </button>

                    <div
                        class="hs-carousel-pagination absolute bottom-3 end-0 start-0 flex justify-center space-x-2"
                    >
                        <span
                            class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500 size-3 cursor-pointer rounded-full border border-gray-400 dark:border-neutral-600"
                        ></span>
                        <span
                            class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500 size-3 cursor-pointer rounded-full border border-gray-400 dark:border-neutral-600"
                        ></span>
                        <span
                            class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500 size-3 cursor-pointer rounded-full border border-gray-400 dark:border-neutral-600"
                        ></span>
                    </div>
                </div>

                {{--  --}}
            </div>
        </div>
    </div>
</x-app-layout>
