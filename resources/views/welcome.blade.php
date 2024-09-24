<x-app-layout>
    <x-page-header :height="'md:h-[300px]'">
        @section('title', 'Alle batterijen een tweede leven')
        <p>Met ons unieke circulaire proces voorkomen we dat batterijen</p>
        <p>in de shredder komen en maken we ze geschikt voor hergebruik.</p>

        <a href="{{ route('toepassingen') }}"
            class="inline-block px-5 py-1 mt-12 duration-100 bg-rb-green drop-shadow-xl hover:bg-rb-dark-blue hover:underline">
            Over onze toepassingen
        </a>
    </x-page-header>

    <div class="absolute inset-0 size-full h-[1000px] overflow-x-hidden">
        <div class="absolute -right-40 top-[150px] lg:top-[130px] left-0 me-auto ms-auto w-fit">
            <img src="{{ asset('assets/icons/circular_arrows.svg') }}" class="w-full mix-blend-overlay"
                alt="circular arrows" style="transform: translate3d(0,0,0);" />
        </div>
    </div>
    <div class="relative w-full">
        <div class="absolute -right-20 -top-10 left-0 z-10 me-auto ms-auto w-9/12 max-w-4xl sm:-top-16 lg:-top-[140px]">
            <img src="{{ asset('assets/images/rb_tray_met_cell.webp') }}" class="w-full" alt="rb tray met cell" />
        </div>
    </div>

    <div class="flex flex-wrap bg-[#D5DBE6]">
        <div class="container z-20 px-5 mx-auto my-16 text-rb-dark-blue md:px-0">
            <div class="flex flex-col md:w-8/12">
                <h2 class="text-2xl font-bold">
                    De meeste impact met de minste uitstoot
                </h2>

                <p class="font-medium">
                    Refurb Battery controleert en hergebruikt Lithium-ion cellen
                    uit ingezamelde accu's in Nederland. We passen ze toe in
                    <b>circulaire energieopslagsystemen</b>
                    (CESS) voor allerlei toepassingen. Zo geven we batterijen
                    een tweede leven of zelfs derde leven. We verminderen
                    daarmee batterijafval nu én CO&#8322;-uitstoot in de toekomst.
                    Onze circulaire oplossingen ondersteunen de verschillende
                    vraagstukken in de energietransitie, zoals het oplossen van
                    netcongesties, pieken in het netwerk maar ook laden van
                    elektrisch materieel. Samen naar groene groei.
                </p>

                <a href="/toepassingen" class="mt-6 font-bold underline duration-100 hover:text-rb-green">
                    Meer over onze toepassingen
                </a>
            </div>
        </div>
    </div>

    <div class="bg-[#E5E7EB]">
        <div class="container flex px-5 mx-auto md:px-0">
            <div class="grid w-full grid-rows-2 gap-4 -my-6 md:grid-cols-2">
                <div class="md:row-span-2 lg:aspect-square">
                    <x-card-link title="Toepassingen" :url="route('toepassingen')" urlText="Meer over onze toepassingen"
                        :img="asset('assets/images/rb_cell.webp')"
                        description="Energieopslag is de oplossing voor de uitdagingen van de energietransitie. Lees meer over onze oplossingen voor energieopslag en de mogelijke toepassingen."
                        classes="bg-right" :darkBackground="false" />
                </div>

                <div class="">
                    <x-card-link title="Ons productieproces" :url="route('productieproces')" urlText="Meer over ons productieproces"
                        :img="asset('assets/images/rb_productie.webp')"
                        description="E-waste is een groeiend probleem. Lees alles over ons circulaire proces, die e-waste actief vermindert en de impact die we maken samen met fabrikanten en eindgebruikers."
                        classes="!text-white bg-right" :darkBackground="true" />
                </div>

                <div class="">
                    <x-card-link title="Over ons" :url="route('over-ons')" urlText="Meer over ons" :img="asset('assets/images/rb_groen.webp')"
                        description="Van start-up naar scale-up. Van dromen naar doen. Lees hier over ons ontstaan en onze ambities."
                        classes="!text-white" :darkBackground="true" />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6]">
        <div class="container flex px-5 mx-auto text-rb-dark-blue md:px-0">
            <div class="w-full my-24">
                <h3 class="text-4xl font-bold text-center">
                    We doen meer met minder.
                </h3>

                <div class="grid mt-12 divide-y divide-rb-dark-blue md:grid-cols-3 md:divide-x md:divide-y-0">
                    <div class="my-6 text-center md:my-auto md:px-6">
                        <img src="{{ asset('assets/icons/lightning.svg') }}" alt="" class="w-10 mx-auto" />
                        <h4 class="mt-4 text-5xl font-bold">179501 ton*</h4>
                        <p class="px-6 mt-2 font-medium">
                            CO&#8322;-uitstoot voorkomen met ons circulaire proces (*en
                            de teller loopt nog!)
                        </p>
                    </div>

                    <div class="my-6 text-center md:my-auto md:px-6">
                        <img src="{{ asset('assets/icons/lightning.svg') }}" alt="" class="w-10 mx-auto" />
                        <h4 class="mt-4 text-5xl font-bold">11+</h4>
                        <p class="px-6 mt-2 font-medium">
                            Samenwerkingen met organisaties en marktleiders
                            zoals Accell en Stichting OPEN.
                        </p>
                    </div>

                    <div class="my-6 text-center md:my-auto md:px-6">
                        <img src="{{ asset('assets/icons/lightning.svg') }}" alt="" class="w-10 mx-auto" />
                        <h4 class="mt-4 text-5xl font-bold">1.196.673+</h4>
                        <p class="px-6 mt-2 font-medium">
                            Al meer dan één miljoen cellen kregen bij ons een
                            tweede leven.
                        </p>
                    </div>
                </div>

                <div class="mx-auto mt-8 w-fit">
                    <a href="{{ route('productieproces') }}"
                        class="font-bold underline duration-100 hover:text-rb-green">
                        Meer over ons circulaire proces
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6]">
        <div class="py-12">
            <x-page-gradient-banner :height="'lg:min-h-[250px] sm:min-h-[520px] min-h-[500px] text-white'" :img="asset('assets/images/rb_productie.webp')">
                @section('banner_title', 'Werken bij Refurb Battery')
                @section('banner_subtitle',
                    'Werken bij Refurb Battery betekent elke dag pionieren. We worden gedreven
                    door samenwerking, innovatie en duurzaamheid. Is onze energie een match? Bekijk de vacatures.')
                    <a href="{{ route('werken-bij') }}"
                        class="inline-block px-3 py-1 mt-6 duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Bekijk onze vacatures
                    </a>
                </x-page-gradient-banner>
            </div>
        </div>

        <div class="bg-[#D5DBE6]">
            <div class="container flex px-5 mx-auto text-rb-dark-blue md:px-0">
                <div class="my-6 mb-16">
                    <h3 class="text-4xl font-bold">Nieuws</h3>

                    <div class="grid gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($articles as $article)
                            <x-news-item :article="$article" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
