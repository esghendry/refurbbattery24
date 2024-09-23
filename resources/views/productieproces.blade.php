<x-app-layout>
    <x-page-header>
        @section('title', 'Ons productieproces')
        @section('subtitle', 'Samenwerken voor meer grip op e-waste')
        <br />
    </x-page-header>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid gap-6 my-6 lg:grid-cols-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/rb_productie.png') }}" alt="Productie" class="z-50 -mt-12" />
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
                    <a href="https://www.stichting-open.org/2024/05/01/accell-group-en-refurb-battery-verduurzamen-fietsbranche/"
                        target="_blank"
                        class="inline-block mt-2 font-bold underline duration-100 external-link hover:text-rb-green">
                        Over onze samenwerking met Stichting Open
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid gap-6 my-6 lg:grid-cols-2">
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
                    <a href="https://www.accell-group.com/en/news/news-2/accell-group-reduces-co2-emissions-by-giving-second-life-to-e-bike-batteries"
                        target="_blank"
                        class="inline-block mt-2 font-bold underline duration-100 external-link hover:text-rb-green">
                        Over onze samenwerking met ACCELL
                    </a>
                </div>

                <div class="relative">
                    <img src="{{ asset('assets/images/rb_dumpster.png') }}" alt="Batterijen container" class="" />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <img src="{{ asset('assets/images/rb_proces_desktop.png') }}"
                srcset="{{ asset('assets/images/rb_proces_mobile.png') }} 320w, {{ asset('assets/images/rb_proces_mobile.png') }} 800w, {{ asset('assets/images/rb_proces_desktop.png') }} 1200w"
                sizes="(max-width: 768px) 100vw, 1200px" alt="Proces" class="my-12" />
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid gap-6 my-6 lg:grid-cols-2">
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

                    <a href="{{ route('slimme-data') }}"
                        class="inline-block px-3 py-1 mt-6 text-white duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Lees meer over slimme data
                    </a>
                </div>

                <div class="relative">
                    <img src="{{ asset('assets/images/rb_dashboardmockup.png') }}" alt="Batterijen container"
                        class="md:-mt-24" />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid gap-6 my-6 lg:grid-cols-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/rb_zhero.png') }}" alt="Productie" class="" />
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
                    <a href="{{ route('toepassingen') }}"
                        class="inline-block px-3 py-1 mt-6 text-white duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Lees meer over onze toepassingen
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
