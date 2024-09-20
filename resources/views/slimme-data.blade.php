<x-app-layout>
    <x-page-header>
        @section("title", "Slimme data")
        @section("subtitle", "Realtime status van CESS")
    </x-page-header>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div>
                    <h3 class="text-xl font-bold">
                        Veiligheid en duurzaamheid, data is key
                    </h3>
                    <p class="text-lg font-medium leading-6">
                        De Europese Unie heeft onlangs een uitgebreide
                        verordening ingevoerd die gericht is op het verbeteren
                        van de duurzaamheid, circulariteit en veiligheid van
                        batterijen, met name lithium-ionbatterijen, die een
                        sleutelrol spelen in de overgang naar schone energie en
                        duurzame mobiliteit. Deze nieuwe verordening heeft
                        betrekking op de gehele levenscyclus van batterijen,
                        inclusief productie, gebruik en recycling, en is een
                        belangrijke stap in de richting van het bereiken van de
                        doelstelling van de EU om tegen 2050 klimaatneutraal te
                        zijn.
                    </p>

                    <a
                        href="https://eur-lex.europa.eu/legal-content/NL/TXT/?uri=CELEX:32023R1542"
                        target="_blank"
                        class="external-link mt-4 inline-block font-bold underline duration-100 hover:text-rb-green"
                    >
                        EU Verordening 2023/1542 inzake batterijen
                    </a>
                </div>

                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_dashboardmockup.png") }}"
                        alt="Dashboard"
                        class="md:-mt-24"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto px-5 md:px-0">
            <div class="grid gap-6 py-6 lg:grid-cols-2">
                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_batterijpaspoort.png") }}"
                        alt="Batterijpaspoort"
                        class=""
                    />
                </div>
                <div>
                    <h3 class="text-xl font-bold">Batterijpaspoort</h3>
                    <p class="text-lg font-medium leading-6">
                        Vaak bepaalt de slechtste cel de prestatie van de gehele
                        accu. Dit betekent dat als één cel niet goed
                        functioneert, de accu niet werkt en de eindgebruiker
                        (fietser) hier last van heeft. Dat is natuurlijk zonde.
                        Als Refurb hebben we een proces ingericht om deze goede
                        cellen eruit te halen en weer te gebruiken. Om dit
                        proces voor nu en de toekomst goed in te richten hebben
                        we onze oplossingen voorzien van Battery Management
                        Systemen (BMS) en deze uitgebreid met de extra
                        informatie die wij ophalen van de batterijen in ons
                        productieproces.
                    </p>
                    <br />
                    <p class="text-lg font-medium leading-6">
                        Gedurende ons productieproces labelen we alle accu’s die
                        binnenkomen, de individuele cellen en onze modules.
                        Middels een unieke QR code verzamelen we alle informatie
                        van een cel: samenstelling, levenscyclus, en
                        productprestaties. Op basis van deze data kunnen
                        momenteel al meer dan 70% van de binnengekomen cellen
                        worden hergebruikt.
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

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="my-6 grid gap-6 lg:grid-cols-2">
                <div>
                    <h3 class="text-xl font-bold">Slim BMS</h3>
                    <p class="text-lg font-medium leading-6">
                        In onze oplossingen gebruiken we deze informatie in ons
                        slimme BMS waarmee we de veiligheid van onze oplossingen
                        kunnen verhogen en real-time kunnen monitoren op cel
                        niveau. Tevens mocht er een cel niet goed zijn, dan kan
                        onze module ook weer hergebruikt worden en komt weer in
                        ons productieproces.
                    </p>
                    <p class="text-lg font-medium leading-6">
                        Deze waardevolle informatie gebruiken we niet alleen
                        operationeel naar de afnemer, maar Refurb geeft ook
                        terugkoppeling aan de fabrikanten en Stichting OPEN, met
                        als doel ook de productie van nieuwe cellen uiteindelijk
                        te verbeteren. Zo dragen we bij aan de wereldwijde
                        innovatieopdracht van de IEA om de productie van
                        batterijen te verbeteren
                    </p>

                    <a
                        href="https://www.iea.org/news/rapid-expansion-of-batteries-will-be-crucial-to-meet-climate-and-energy-security-goals-set-at-cop28"
                        target="_blank"
                        class="external-link mt-4 inline-block font-bold underline duration-100 hover:text-rb-green"
                    >
                        Lees het rapport van de IEA
                    </a>
                </div>

                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_slim_bms.png") }}"
                        alt="Slim BMS"
                        class=""
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container mx-auto px-5 md:px-0">
            <div class="grid gap-6 py-6 lg:grid-cols-2">
                <div class="relative">
                    <img
                        src="{{ asset("assets/images/rb_zhero.png") }}"
                        alt="Zhero batterijen container"
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
</x-app-layout>
