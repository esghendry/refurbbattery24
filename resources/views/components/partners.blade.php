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
            "loadingClasses": "opacity-0"
            {{-- ,
            "isAutoPlay": true --}}
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
                                src="{{ asset("assets/logos/greenchoice.svg") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/stichting-open.png") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/accell-group.svg") }}"
                                alt=""
                                class="max-h-[250px]"
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
                                src="{{ asset("assets/logos/port-of-moerdijk.svg") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/brainport.svg") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/avans-hogeschool.svg") }}"
                                alt=""
                                class="max-h-[250px]"
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
                                src="{{ asset("assets/logos/esg-tech.webp") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/hyvolt.svg") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/bam.svg") }}"
                                alt=""
                                class="max-h-[250px]"
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
                                src="{{ asset("assets/logos/arn.svg") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/tue.svg") }}"
                                alt=""
                                class="max-h-[250px]"
                            />
                            <img
                                src="{{ asset("assets/logos/rai.svg") }}"
                                alt=""
                                class="max-h-[250px]"
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
                class="size-3 cursor-pointer rounded-full border border-gray-400 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"
            ></span>
            <span
                class="size-3 cursor-pointer rounded-full border border-gray-400 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"
            ></span>
            <span
                class="size-3 cursor-pointer rounded-full border border-gray-400 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"
            ></span>
            <span
                class="size-3 cursor-pointer rounded-full border border-gray-400 hs-carousel-active:border-blue-700 hs-carousel-active:bg-blue-700 dark:border-neutral-600 dark:hs-carousel-active:border-blue-500 dark:hs-carousel-active:bg-blue-500"
            ></span>
        </div>
    </div>

    {{--  --}}
</div>