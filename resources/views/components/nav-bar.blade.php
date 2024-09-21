<!-- ========== HEADER ========== -->
<nav
    class="relative z-50 mx-auto w-full bg-rb-dark-blue py-2 md:flex md:items-center md:justify-between md:gap-3"
>
    <div class="container mx-auto md:flex px-5 md:px-0">
        <div class="flex items-center justify-between gap-x-1">
            <a
                class="flex-none text-xl font-semibold text-white focus:opacity-80 focus:outline-none"
                href="/"
                aria-label="Brand"
            >
                <img
                    src="{{ asset("assets/icons/RB_Logo.svg") }}"
                    alt="Refurb Battery logo"
                    class="h-7"
                />
            </a>

            <!-- Collapse Button -->
            <button
                type="button"
                class="hs-collapse-toggle relative flex size-9 items-center justify-center rounded-lg text-[12px] font-medium text-white focus:outline-none disabled:pointer-events-none disabled:opacity-50 md:hidden"
                id="hs-header-base-collapse"
                aria-expanded="false"
                aria-controls="hs-header-base"
                aria-label="Toggle navigation"
                data-hs-collapse="#hs-header-base"
            >
                <svg
                    class="hs-collapse-open:hidden size-6"
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
                    <line x1="3" x2="21" y1="6" y2="6" />
                    <line x1="3" x2="21" y1="12" y2="12" />
                    <line x1="3" x2="21" y1="18" y2="18" />
                </svg>
                <svg
                    class="hs-collapse-open:block hidden size-6 shrink-0"
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
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
                <span class="sr-only">Toggle navigation</span>
            </button>
            <!-- End Collapse Button -->
        </div>

        <!-- Collapse -->
        <div
            id="hs-header-base"
            class="hs-collapse hidden grow basis-full overflow-hidden text-white transition-all duration-300 md:block"
            aria-labelledby="hs-header-base-collapse"
        >
            <div
                class="max-h-[75vh] overflow-hidden overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar]:w-2"
            >
                <div
                    class="flex flex-col gap-0.5 py-2 md:flex-row md:items-center md:gap-1 md:py-0"
                >
                    <div class="grow">
                        <div
                            class="linkEffects flex flex-col gap-0.5 md:flex-row md:items-center md:justify-end md:gap-2 lg:gap-12"
                        >
                            <a
                                class="flex items-center rounded-lg p-2"
                                href="{{ route("home") }}"
                                aria-current="page"
                            >
                                Home
                            </a>

                            <a
                                class="flex items-center rounded-lg p-2"
                                href="{{ route("productieproces") }}"
                            >
                                Ons productieproces
                            </a>

                            <a
                                class="flex items-center rounded-lg p-2"
                                href="{{ route("toepassingen") }}"
                            >
                                Toepassingen
                            </a>

                            <a
                                class="flex items-center rounded-lg p-2"
                                href="{{ route("slimme-data") }}"
                            >
                                Slimme data
                            </a>

                            <a
                                class="flex items-center rounded-lg p-2"
                                href="{{ route("over-ons") }}"
                            >
                                Over ons
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Collapse -->
</nav>
