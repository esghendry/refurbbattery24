<x-app-layout>
    <x-page-header>
        @section("title", "Onze batterijtoepassingen")
        @section("subtitle", "Grip op je energieverbruik")
    </x-page-header>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid items-center gap-6 lg:grid-cols-2">
                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_tray_met_cell.png") }}"
                        alt="Productie"
                        class=""
                    />
                </div>

                <div>
                    <h3 class="text-xl font-bold">
                        Energieverbruik de baas (Battery as a Service)
                    </h3>
                    <p class="text-lg font-medium leading-6">
                        Refurb Battery biedt circulaire energieopslag. Onze
                        trays zijn ontworpen vanuit een volledige
                        circulariteitsgedachte en in te bouwen in zowel maatwerk
                        als plug & play systemen. Zo kunnen we vermogens leveren
                        variërend van 300 kWh tot meer dan 1 MWh. Onze
                        schakelbare batterijen maken extra stroom direct
                        mogelijk.
                    </p>
                    <a
                        href="{{ route("contact") }}"
                        class="mt-6 inline-block bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                    >
                        Neem contact op
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div>
                    <h3 class="text-xl font-bold">De toepassingen</h3>
                    <p class="text-lg font-medium leading-6">
                        Of het nu gaat om een extra stroombuffer voor op de
                        bouwplaats, een evenement voorzien van groene stroom, of
                        een beheersstrategie om piekvragen bij uw bedrijf te
                        managen, de energieopslagsystemen van Refurb Battery
                        bieden een circulair, flexibel en schakelbaar
                        alternatief. Voor iedere toepassing een oplossing.
                    </p>
                    <br />
                    <p class="text-lg font-medium leading-6">
                        Enkele voorbeelden? Golfbaan The Dutch maakt met hun
                        CESS optimaal gebruik van het variabele energiecontract.
                        Bouwbedrijf BAM zet twee systemen in: één bij het
                        laadplein van hun kantoor in Den Bosch en één op de
                        bouwplaats in Waalwijk. En samen met BrabantSport maken
                        we het mogelijk hun evenementen te verduurzamen.
                    </p>
                    <br />
                    <p class="text-lg font-medium leading-6">
                        Onze systemen zijn uitgerust met een AC-interfacehub die
                        tot zes energieopslageenheden kan verbinden. Zo maken we
                        eventuele capaciteitsuitbreiding moeiteloos mogelijk.
                    </p>
                </div>

                <div
                    class="mx-auto grid h-fit w-2/3 grid-cols-2 grid-rows-2 items-center gap-6 xl:w-1/2"
                >
                    <img
                        src="{{ asset("assets/images/rb_toepassing_1.png") }}"
                        alt="Zwaar materiaal laden met groene energie"
                    />
                    <img
                        src="{{ asset("assets/images/rb_toepassing_2.png") }}"
                        alt="Buitenevenementen en festivals vergroenen"
                    />
                    <img
                        src="{{ asset("assets/images/rb_toepassing_3.png") }}"
                        alt="Peak shaving en vraag & aanbod afstemmen"
                    />
                    <img
                        src="{{ asset("assets/images/rb_toepassing_4.png") }}"
                        alt="Laadpleinen en e-mobillity flexibel laden"
                    />
                </div>
            </div>
        </div>

        <div class="container mx-auto flex px-5 md:px-0">
            <h3 class="mb-16 text-4xl font-bold">Onze partnerships</h3>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div
                class="my-6 -mt-8 grid items-center gap-6 md:grid-cols-2 lg:grid-cols-3"
            >
                @foreach ($articles as $article)
                    <x-news-item :article="$article" />
                @endforeach
            </div>
        </div>
    </div>

    <div class="grid text-white lg:grid-cols-2">
        <div
            class="relative bg-cover px-12 py-6"
            style="
                background-image: url({{ asset("assets/images/rb_flexibiliteit.png") }});
            "
        >
            <div
                class="absolute inset-0 z-10 size-full bg-rb-dark-blue/80"
            ></div>
            <div class="relative z-30 h-full flex flex-wrap">
                <h3 class="text-2xl font-bold">CESS op maat</h3>
                <p class="text-lg font-normal leading-6">
                    Flexibiliteit die past bij deze turbulente fase van de
                    energietransitie. Refurb Battery en partners adviseren voor
                    de juiste fit en integratie in het energiesysteem. Wij
                    monitoren de batterij, maximeren levensduur en zorgen voor
                    uiteindelijk hergebruik of recycling. We adviseren niet
                    alleen op techniek maar ook op financieel gebied.
                </p>
                <br />
                <p class="text-lg font-normal leading-6">
                    •&emsp;&emsp; Eenvoudig capaciteit bijplaatsen of reduceren
                    <br />
                    •&emsp;&emsp; Direct aan de slag, al lerend optimaliseren
                    <br />
                    •&emsp;&emsp; Nauwkeurige dataverzameling en overzichtelijk
                    dashboard.
                    <br />
                    •&emsp;&emsp; Elke batterij heeft een eigen paspoort.
                    <br />
                    •&emsp;&emsp; Schakelbaar en ontworpen voor hergebruik.
                </p>
                <div class="my-6"> </div>
                <a
                    href="{{ route("contact") }}"
                    class="mt-auto h-fit bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                >
                    Neem contact op
                </a>
            </div>
        </div>

        <div
            class="relative bg-cover px-12 py-6"
            style="
                background-image: url({{ asset("assets/images/rb_zhero.png") }});
            "
        >
            <div
                class="absolute inset-0 z-10 size-full bg-rb-dark-blue/80"
            ></div>
            <div class="relative z-30 h-full flex flex-wrap">
                <h3 class="text-2xl font-bold">Zhero CESS</h3>
                <p class="text-lg font-normal leading-6">
                    Een CESS geeft inzicht en controle in je energiemanagement.
                    Onder de naam Zhero levert Refurb Battery plug & play
                    opslagsystemen zoals 10-voetscontainers en oplossingen voor
                    laadpalen. We bieden de groenste oplossing: circulair,
                    schakelbaar en meetbaar. On demand groene energie, voor peak
                    shaving, als stroombuffer of als tijdelijke oplossing. Zero
                    waste, hero impact.
                </p>
                <br />
                <p class="text-lg font-normal leading-6">
                    •&emsp;&emsp; Output van 300kWh tot 1MWh
                    <br />
                    •&emsp;&emsp; Het enige circulaire energieopslagsysteem
                    <br />
                    •&emsp;&emsp; Nauwkeurige dataverzameling en overzichtelijk
                    dashboard.
                    <br />
                    •&emsp;&emsp; Elke batterij heeft een eigen paspoort.
                    <br />
                    •&emsp;&emsp; Schakelbaar en ontworpen voor hergebruik.
                </p>
                <div class="my-6"> </div>
                <a
                    href="{{ route("contact") }}"
                    class="mt-auto h-fit bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                >
                    Neem contact op
                </a>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid items-center gap-6 lg:grid-cols-2">
                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_productie.png") }}"
                        alt="Productie"
                        class=""
                    />
                </div>

                <div>
                    <h3 class="text-xl font-bold">De groenste keuze</h3>
                    <p class="text-lg font-medium leading-6">
                        Bij Refurb Battery maakt energieopslag circulair door de
                        levensduur van batterijcellen te verlengen. Door te
                        laden met elektriciteit uit duurzame bronnen maken we zo
                        het aanbod van groene stroom stabieler. Elk Refurb
                        Battery
                        <b>circulair energieopslagsysteem</b>
                        (CESS) is ontworpen voor circulariteit en gebouwd
                        volgens de geldende duurzaamheids- en veiligheidseisen.
                    </p>
                    <a
                        href="{{ route("productieproces") }}"
                        class="mt-6 inline-block bg-rb-green px-3 py-1 text-white duration-100 hover:bg-rb-dark-blue hover:underline"
                    >
                        Lees meer over ons circulaire productieproces
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6">
                <div>
                    <h2 class="text-4xl font-bold">Ecosysteem van partners</h2>
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
            </div>
        </div>
    </div>
</x-app-layout>
