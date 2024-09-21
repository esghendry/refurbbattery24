<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(["resources/css/app.css", "resources/js/app.js"])

        <title>{{ $title ?? "Refurb Battery" }}</title>

        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/favicon-16x16.png"
        />
        <link rel="manifest" href="/site.webmanifest" />
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
            rel="stylesheet"
        />
    </head>

    <body class="flex min-h-screen w-full flex-col font-mulish">
        <header class="sticky top-0 overflow-hidden z-[99]">

            <x-nav-bar />

            <div class="linkEffects bg-[#E5E7EB] text-rb-dark-blue">
                <div
                    class="container mx-auto flex h-12 items-center px-5 md:px-0"
                >
                    <ul class="mx-auto sm:mx-0 sm:ml-auto grid grid-flow-col gap-2 md:gap-12">
                        <li>
                            <a href="{{ route("nieuws") }}">
                                <img
                                    src="{{ asset("assets/icons/lightning.svg") }}"
                                    alt=""
                                    class="mr-2 inline"
                                />
                                Nieuws
                            </a>
                        </li>
                        <li>
                            <a href="{{ route("werken-bij") }}">Werken bij</a>
                        </li>
                        <li>
                            <a href="{{ route("contact") }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <main class="w-full flex-grow">
            {{ $slot }}
        </main>

        <footer>
            <div class="font-mulish">
                <div class="hidden">
                    <a
                        href="{{ route("contact") }}"
                        class="group flex bg-rb-green text-white hover:bg-[#0c2850]"
                    >
                        <div
                            class="relative mx-auto my-6 flex flex-wrap items-center justify-center gap-6 px-5 text-center"
                        >
                            <div class="font-bold uppercase">
                                See what Refurb Battery can do for you
                            </div>

                            <div class="uppercase">
                                Our in-house experts can walk you through
                                everything you need to know
                            </div>

                            <div
                                class="group inline-flex items-center justify-center text-nowrap rounded-sm bg-rb-dark-blue px-4 py-2 text-center text-base font-bold leading-none text-white !no-underline transition-all focus:outline-none disabled:opacity-50 group-hover:bg-rb-green"
                            >
                                Get in Touch
                                <span
                                    class="w-0 overflow-hidden pt-1 transition-all group-hover:w-5 group-hover:pl-1 group-focus:w-5 group-focus:scale-100"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 fill-none stroke-white"
                                        viewBox="0 0 512 512"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="48"
                                            d="M184 112l144 144-144 144"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="flex bg-rb-dark-blue text-white">
                    <div
                        class="container mx-auto my-6 flex h-full items-center px-5 md:px-0"
                    >
                        <div class="grid w-full gap-6 md:grid-cols-12">
                            <div class="md:col-span-4">
                                <a href="{{ route("home") }}">
                                    <img
                                        src="{{ asset("assets/icons/RB_Logo.svg") }}"
                                        alt="Refurb Battery logo"
                                        class="h-7"
                                    />
                                </a>
                                <div class="my-6">
                                    <p>Let's talk</p>
                                    <a
                                        href="tel:+31852464999"
                                        class="flex w-fit items-center underline hover:no-underline"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="mr-2 h-5 w-5 fill-white"
                                            viewBox="0 0 512 512"
                                        >
                                            <title>Call</title>
                                            <path
                                                d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z"
                                            ></path>
                                        </svg>
                                        085 246 4999
                                    </a>
                                    <a
                                        href="mailto:hello@refurbbattery.eu"
                                        class="flex w-fit items-center underline hover:no-underline"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="mr-2 h-5 w-5 fill-white"
                                            viewBox="0 0 512 512"
                                        >
                                            <title>Mail</title>
                                            <path
                                                d="M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18-104.36a16 16 0 0119.64 25.26z"
                                            ></path>
                                        </svg>
                                        hello@refurbbattery.eu
                                    </a>
                                </div>
                            </div>
                            <div class="md:col-span-8">
                                {{-- <livewire:footer.subscribe /> --}}
                                <livewire:footer.links />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    </body>
</html>
