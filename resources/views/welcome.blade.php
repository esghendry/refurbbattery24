<x-app-layout>
    <x-page-header :height="'md:h-[300px]'">
        @section("title", "Alle batterijen een tweede leven")
        <p>Met ons unieke circulaire proces voorkomen we dat batterijen</p>
        <p>in de shredder komen en maken we ze geschikt voor hergebruik.</p>

        <a
            href="{{ route("toepassingen") }}"
            class="mt-12 inline-block bg-rb-green px-5 py-1 drop-shadow-xl duration-100 hover:bg-rb-dark-blue hover:underline"
        >
            Over onze toepassingen
        </a>
    </x-page-header>

    <div class="relative w-full">
        <div
            class="absolute -right-40 -top-[200px] left-0 me-auto ms-auto w-fit md:-top-[270px]"
        >
            <img
                src="{{ asset("assets/icons/circular_arrows.svg") }}"
                class="mix-blend-overlay"
            />
        </div>
        <div
            class="absolute -right-20 -top-10 left-0 z-10 me-auto ms-auto w-9/12 max-w-4xl sm:-top-16 lg:-top-[140px]"
        >
            <img
                src="{{ asset("assets/images/rb_tray_met_cell.png") }}"
                class="w-full"
            />
        </div>
    </div>

    <div class="flex flex-wrap bg-[#D5DBE6]">
        <div
            class="container z-20 mx-auto my-16 px-5 text-rb-dark-blue md:px-0"
        >
            <div class="flex w-8/12 flex-col">
                <h2 class="text-2xl font-bold">
                    De meeste impact met de minste uitstoot
                </h2>

                <p class="font-medium">
                    Refurb Battery controleert en hergebruikt Lithium-ion cellen
                    uit ingezamelde accu's in Nederland. We passen ze toe in
                    <b>circulaire energieopslagsystemen</b>
                    (CESS) voor allerlei toepassingen. Zo geven we batterijen
                    een tweede leven of zelfs derde leven. We verminderen
                    daarmee batterijafval nu én CO2-uitstoot in de toekomst.
                    Onze circulaire oplossingen ondersteunen de verschillende
                    vraagstukken in de energietransitie, zoals het oplossen van
                    netcongesties, pieken in het netwerk maar ook laden van
                    elektrisch materieel. Samen naar groene groei.
                </p>

                <a
                    href="/toepassingen"
                    class="mt-6 font-bold underline duration-100 hover:text-rb-green"
                >
                    Meer over onze toepassingen
                </a>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB]">
        <div class="container mx-auto flex px-5 md:px-0">
            <div class="-my-6 grid w-full grid-rows-2 gap-4 md:grid-cols-2">
                <div class="md:row-span-2 lg:aspect-square">
                    <x-card-link
                        title="Toepassingen"
                        :url="route('toepassingen')"
                        urlText="Meer over onze toepassingen"
                        :img="asset('assets/images/rb_cell.png')"
                        description="Energieopslag is de oplossing voor de uitdagingen van de energietransitie. Lees meer over onze oplossingen voor energieopslag en de mogelijke toepassingen."
                        classes="bg-right"
                        :darkBackground="false"
                    />
                </div>

                <div class="">
                    <x-card-link
                        title="Ons productieproces"
                        :url="route('productieproces')"
                        urlText="Meer over ons productieproces"
                        :img="asset('assets/images/rb_productie.png')"
                        description="E-waste is een groeiend probleem. Lees alles over ons circulaire proces, die e-waste actief vermindert en de impact die we maken samen met fabrikanten en eindgebruikers."
                        classes="!text-white bg-right"
                        :darkBackground="true"
                    />
                </div>

                <div class="">
                    <x-card-link
                        title="Over ons"
                        :url="route('over-ons')"
                        urlText="Meer over ons"
                        :img="asset('assets/images/rb_groen.png')"
                        description="Van start-up naar scale-up. Van dromen naar doen. Lees hier over ons ontstaan en onze ambities."
                        classes="!text-white"
                        :darkBackground="true"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6]">
        <div class="container mx-auto flex px-5 text-rb-dark-blue md:px-0">
            <div class="my-24 w-full">
                <h3 class="text-center text-4xl font-bold">
                    We doen meer met minder.
                </h3>

                <div
                    class="mt-12 grid divide-y divide-rb-dark-blue md:grid-cols-3 md:divide-x md:divide-y-0"
                >
                    <div class="my-6 text-center md:my-auto md:px-6">
                        <img
                            src="{{ asset("assets/icons/lightning.svg") }}"
                            alt=""
                            class="mx-auto w-10"
                        />
                        <h4 class="mt-4 text-5xl font-bold">179501 ton*</h4>
                        <p class="mt-2 px-6 font-medium">
                            CO
                            <sub>2</sub>
                            -uitstoot voorkomen met ons circulaire proces (*en
                            de teller loopt nog!)
                        </p>
                    </div>

                    <div class="my-6 text-center md:my-auto md:px-6">
                        <img
                            src="{{ asset("assets/icons/lightning.svg") }}"
                            alt=""
                            class="mx-auto w-10"
                        />
                        <h4 class="mt-4 text-5xl font-bold">11+</h4>
                        <p class="mt-2 px-6 font-medium">
                            Samenwerkingen met organisaties en marktleiders
                            zoals Accell en Stichting OPEN.
                        </p>
                    </div>

                    <div class="my-6 text-center md:my-auto md:px-6">
                        <img
                            src="{{ asset("assets/icons/lightning.svg") }}"
                            alt=""
                            class="mx-auto w-10"
                        />
                        <h4 class="mt-4 text-5xl font-bold">1.196.673+</h4>
                        <p class="mt-2 px-6 font-medium">
                            Al meer dan één miljoen cellen kregen bij ons een
                            tweede leven.
                        </p>
                    </div>
                </div>

                <div class="mx-auto mt-8 w-fit">
                    <a
                        href="{{ route("productieproces") }}"
                        class="font-bold underline duration-100 hover:text-rb-green"
                    >
                        Meer over ons circulaire proces
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6]">
        <div class="py-12">
            <x-page-gradient-banner
                :height="'lg:min-h-[250px] sm:min-h-[520px] min-h-[500px] text-white'"
                :img="asset('assets/images/rb_productie.png')"
            >
                @section("banner_title", "Werken bij Refurb Battery")
                @section("banner_subtitle", "Werken bij Refurb Battery betekent elke dag pionieren. We worden gedreven door samenwerking, innovatie en duurzaamheid. Is onze energie een match? Bekijk de vacatures.")
                <a
                    href="{{ route("werken-bij") }}"
                    class="mt-6 inline-block bg-rb-green px-3 py-1 duration-100 hover:bg-rb-dark-blue hover:underline"
                >
                    Bekijk onze vacatures
                </a>
            </x-page-gradient-banner>
        </div>
    </div>

    <div class="bg-[#D5DBE6]">
        <div class="container mx-auto flex px-5 text-rb-dark-blue md:px-0">
            <div class="my-6 mb-16">
                <h3 class="text-4xl font-bold">Nieuws</h3>

                <div class="mt-6 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($articles as $article)
                        <x-news-item :article="$article" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
