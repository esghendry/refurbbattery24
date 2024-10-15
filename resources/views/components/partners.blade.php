<div class="my-6">
    <div>
        <h2 class="text-4xl font-bold">Ecosysteem van partners</h2>
        <p class="mt-4 text-lg font-bold leading-6">
            Dankzij onze samenwerkingen met organisaties zoals ARN en Stichting OPEN
            hebben we tot nu toe al 1 miljoen batterijcellen kunnen redden van
            de shredder. Maar wat ons betreft is dit nog maar het begin. Werk
            jij mee aan het succes?
        </p>
        <a href="{{ route('contact') }}"
            class="inline-block px-3 py-1 mt-6 text-white duration-100 bg-rb-green hover:bg-rb-dark-blue hover:underline">
            Neem contact op
        </a>
    </div>

    <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "isAutoPlay": true
        }'
        class="relative mt-6">
        <div class="relative w-full overflow-hidden bg-white rounded-lg hs-carousel min-h-52 lg:min-h-64 xl:min-h-72">
            <div
                class="absolute top-0 bottom-0 flex transition-transform duration-700 opacity-0 hs-carousel-body start-0 flex-nowrap">
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-300">
                        <span
                            class="grid items-center self-center w-full grid-cols-3 gap-6 text-4xl text-gray-800 transition duration-700 justify-items-center dark:text-white">
                            <img src="{{ asset('assets/logos/greenchoice.svg') }}" alt="greenchoice"
                                class="max-w-[200px] w-full" />
                            <img src="{{ asset('assets/logos/stichting-open.webp') }}" alt="stichting-open"
                                class="max-h-[150px]" />
                            <img src="{{ asset('assets/logos/accell-group.svg') }}" alt="accell-group"
                                class="max-w-[200px] w-full" />
                        </span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-300">
                        <span
                            class="grid items-center self-center w-full grid-cols-3 gap-6 text-4xl text-gray-800 transition duration-700 justify-items-center dark:text-white">
                            <img src="{{ asset('assets/logos/port-of-moerdijk.svg') }}" alt="port-of-moerdijk"
                                class="max-w-[250px] w-full" />
                            <img src="{{ asset('assets/logos/brainport.svg') }}" alt="brainport"
                                class="max-h-[250px]" />
                            <img src="{{ asset('assets/logos/avans-hogeschool.svg') }}" alt="avans-hogeschool"
                                class="max-w-[250px] w-full" />
                        </span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-300">
                        <span
                            class="grid items-center self-center w-full grid-cols-3 gap-6 text-4xl text-gray-800 transition duration-700 justify-items-center dark:text-white">
                            <img src="{{ asset('assets/logos/esg-tech.svg') }}" alt="esg-tech"
                                class="max-h-[250px] w-full" />
                            <img src="{{ asset('assets/logos/hyvolt.svg') }}" alt="hyvolt"
                                class="max-h-[250px] w-full" />
                            <img src="{{ asset('assets/logos/bam.svg') }}" alt="bam"
                                class="max-w-[250px] w-full" />
                        </span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-300">
                        <span
                            class="grid items-center self-center w-full grid-cols-3 gap-6 text-4xl text-gray-800 transition duration-700 justify-items-center dark:text-white">
                            <img src="{{ asset('assets/logos/arn.svg') }}" alt="arn"
                                class="max-w-[175px] w-full" />
                            <img src="{{ asset('assets/logos/tue.svg') }}" alt="tue"
                                class="max-w-[200px] w-full" />
                            <img src="{{ asset('assets/logos/rai.svg') }}" alt="rai"
                                class="max-h-[250px] w-full" />
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel:disabled:opacity-50 absolute inset-y-0 start-0 inline-flex h-full w-[46px] items-center justify-center rounded-s-lg text-gray-800 hover:bg-gray-800/10 focus:bg-gray-800/10 focus:outline-none disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="size-5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel:disabled:opacity-50 absolute inset-y-0 end-0 inline-flex h-full w-[46px] items-center justify-center rounded-e-lg text-gray-800 hover:bg-gray-800/10 focus:bg-gray-800/10 focus:outline-none disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="size-5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <div class="absolute flex justify-center space-x-2 hs-carousel-pagination bottom-3 end-0 start-0">
            <span
                class="border border-gray-400 rounded-full cursor-pointer size-3 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"></span>
            <span
                class="border border-gray-400 rounded-full cursor-pointer size-3 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"></span>
            <span
                class="border border-gray-400 rounded-full cursor-pointer size-3 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"></span>
            <span
                class="border border-gray-400 rounded-full cursor-pointer size-3 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"></span>
        </div>
    </div>

    {{--  --}}
</div>
