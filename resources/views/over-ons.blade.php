<x-app-layout>
    <x-page-header>
        @section('title', 'Over ons')
        @section('subtitle', 'Met veel energie maken we het verschil')
    </x-page-header>

    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container px-5 mx-auto md:px-0">
            <div class="grid gap-6 py-6 lg:grid-cols-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/dromen.webp') }}" alt="Productie" class="z-50 -mt-12" />
                </div>

                <div>
                    <h3 class="text-xl font-bold">Van dromen naar doen</h3>
                    <p class="text-lg font-medium leading-6">
                        Refurb Battery is opgericht door ondernemers die actief
                        zijn in de energie en infrastructuur. Verduurzaming staat
                        hoog op de agenda, en energieopslag was hierin een
                        belangrijke factor. Toch lijkt energieopslag nog in de
                        kinderschoenen te staan: vragen over capaciteit,
                        rendement en batterijafval maken het een lastig
                        vraagstuk. Wat als we juist batterijen die nu als afval
                        worden beschouwd, herbruiken in energieopslag? Vanuit
                        die win-win-gedachte werd Refurb Battery in 2021
                        gestart.
                    </p>
                    <a href="https://www.linkedin.com/in/marty-smits-203394/" target="_blank"
                        class="block mt-2 font-bold underline duration-100 external-link hover:text-rb-green">
                        Linkedinprofiel van oprichter Marty Smits
                    </a>
                    <a href="https://www.linkedin.com/in/msvanbeek/" target="_blank"
                        class="block mt-2 font-bold underline duration-100 external-link hover:text-rb-green">
                        Linkedinprofiel van Martijn van Beek
                    </a>
                </div>
                <img src="{{ asset('assets/images/sdg.svg') }}" alt="SDG" class="col-span-full" />
            </div>
        </div>
    </div>

    <div class="bg-[#D5DBE6] text-rb-dark-blue">
        <div class="container px-5 mx-auto md:px-0">
            <div class="grid gap-6 py-6 lg:grid-cols-2">
                <div>
                    <h3 class="text-xl font-bold">
                        Van start-up naar scale-up
                    </h3>
                    <p class="text-lg font-medium leading-6">
                        De eerste collega betrekt in 2022 het splinternieuwe,
                        duurzaam gebouwde kantoorpand in de omgeving van Breda.
                        Binnen 6 maanden stampen we de demontagelijn uit de
                        grond. Dat is de eerste stap richting ons circulaire
                        proces, waarmee we alleen al in 2023 drie duurzame
                        awards in de wacht slepen. Ondertussen werken meer dan
                        30 collega's samen en hebben we al meer dan 1 miljoen
                        lithium-ion cellen gered van de shredder en een tweede
                        leven gegeven. We zijn trots op de samenwerkingen met
                        partijen die voorop lopen in de transitie naar volledig
                        groene energie.
                    </p>
                </div>

                <div class="relative">
                    <img src="{{ asset('assets/images/rb_groen.webp') }}" alt="Batterijen container" class="" />
                </div>
            </div>

            <h3 class="pb-16 text-4xl font-bold">Wat we al hebben bereikt</h3>
        </div>
    </div>
    <div class="bg-[#E5E7EB] text-rb-dark-blue">
        <div class="container px-5 mx-auto md:px-0">
            <div class="grid items-center gap-6 py-6 -mt-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($articles as $article)
                    <x-news-item :article="$article" />
                @endforeach
            </div>

            <div class="grid gap-6 py-6 lg:grid-cols-2">
                <div class="relative">
                    <img src="{{ asset('assets/images/sky.webp') }}" alt="Refurb Battery" />
                </div>

                <div>
                    <h3 class="text-xl font-bold">The sky is the limit</h3>
                    <p class="text-lg font-medium leading-6">
                        Refurb Battery als dé recyclinghub van Noordwest-Europa
                        voor Lithium-ion batterijen: dat is onze ambitie. Met ons
                        unieke proces redden we cellen en genereren daarmee data
                        en doen kennis op. Die kennis van batterijtechnologie
                        delen we met Technische Universiteiten,
                        Certificeringsbedrijven en fabrikanten. Kortom: door
                        batterijen nu een tweede leven te geven, maken we ze in
                        de toekomst ook al beter in hun eerste leven.
                    </p>
                    <br />
                    <p class="text-lg font-bold leading-6">
                        Meer weten over Refurb Battery? We komen graag langs op
                        scholen of netwerkbijeenkomsten als spreker of om een
                        presentatie te geven.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-block px-3 py-1 mt-6 text-white duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
                        Kom in contact
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
