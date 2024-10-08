<x-app-layout>
    <x-page-header>
        @section('title', 'Onze batterijtoepassingen')
        @section('subtitle', 'Grip op je energieverbruik')
    </x-page-header>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid items-center gap-6 my-6 lg:grid-cols-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/rb_tray_met_cell_mobile.webp') }}" alt="Productie" class="" />
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
                    <a href="{{ route('contact') }}"
                        class="inline-block px-3 py-1 mt-6 text-white duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Neem contact op
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container px-5 mx-auto md:px-0">
            <div class="grid gap-6 py-6 lg:grid-cols-2">
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

                <div class="grid items-center w-2/3 grid-cols-2 grid-rows-2 gap-6 mx-auto h-fit xl:w-1/2">
                    <img src="{{ asset('assets/images/rb_toepassing_1.webp') }}"
                        alt="Zwaar materiaal laden met groene energie" />
                    <img src="{{ asset('assets/images/rb_toepassing_2.webp') }}"
                        alt="Buitenevenementen en festivals vergroenen" />
                    <img src="{{ asset('assets/images/rb_toepassing_3.webp') }}"
                        alt="Peak shaving en vraag & aanbod afstemmen" />
                    <img src="{{ asset('assets/images/rb_toepassing_4.webp') }}"
                        alt="Laadpleinen en e-mobillity flexibel laden" />
                </div>
            </div>
            <h3 class="pb-16 text-4xl font-bold">Onze partnerships</h3>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid items-center gap-6 my-6 -mt-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($articles as $article)
                    <x-news-item :article="$article" />
                @endforeach
            </div>
        </div>
    </div>

    <div class="container px-5 mx-auto md:px-0">
        <div class="grid text-white lg:grid-cols-2">
            <div class="relative px-12 py-6 bg-cover"
                style="
                background-image: url({{ asset('assets/images/rb_flexibiliteit.webp') }});
            ">
                <div class="absolute inset-0 z-10 size-full bg-rb-dark-blue/80"></div>
                <div class="relative z-30 flex flex-wrap h-full">
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
                    <div class="w-full my-6"> </div>
                    <a href="{{ route('contact') }}"
                        class="px-3 py-1 mt-auto text-white duration-100 h-fit bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Neem contact op
                    </a>
                </div>
            </div>

            <div class="relative px-12 py-6 bg-cover"
                style="
                background-image: url({{ asset('assets/images/rb_zhero.webp') }});
            ">
                <div class="absolute inset-0 z-10 size-full bg-rb-dark-blue/80"></div>
                <div class="relative z-30 flex flex-wrap h-full">
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
                    <div class="w-full my-6"> </div>
                    <a href="{{ route('contact') }}"
                        class="px-3 py-1 mt-auto text-white duration-100 h-fit bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Neem contact op
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid items-center gap-6 my-6 lg:grid-cols-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/rb_productie.webp') }}" alt="Productie" class="" />
                </div>

                <div>
                    <h3 class="text-xl font-bold">De groenste keuze</h3>
                    <p class="text-lg font-medium leading-6">
                        Refurb Battery maakt energieopslag circulair door de
                        levensduur van batterijcellen te verlengen. Door te
                        laden met elektriciteit uit duurzame bronnen maken we zo
                        het aanbod van groene stroom stabieler. Elk Refurb
                        Battery
                        <b>circulair energieopslagsysteem</b>
                        (CESS) is ontworpen voor circulariteit en gebouwd
                        volgens de geldende duurzaamheids- en veiligheidseisen.
                    </p>
                    <a href="{{ route('productieproces') }}"
                        class="inline-block px-3 py-1 mt-6 text-white duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Lees meer over ons circulaire productieproces
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <x-partners />
        </div>
    </div>
</x-app-layout>
