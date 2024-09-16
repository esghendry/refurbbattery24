<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Refurb Battery' }}</title>
</head>

<body class="flex flex-col w-full min-h-screen">

    <header>
        <div class="bg-rb-dark-blue">
            <div class="container mx-auto px-5 md:px-0 h-12 items-center flex">
                <a href="/">
                    <img src="{{ asset('assets/RB_Logo.svg') }}" alt="Refurb Battery logo" class="h-7">
                </a>
            </div>
        </div>
    </header>


    <main class="flex-grow w-full">
        {{ $slot }}
    </main>


    <footer>
        <div>
            <div class="">
                <a href="/contact" class="bg-rb-green group hover:bg-[#0c2850] text-white flex">

                    <div class="relative text-center flex flex-col md:flex-row items-center my-6 px-5 gap-6 mx-auto">

                        <div class="font-bold uppercase">
                            See what Refurb Battery can do for you
                        </div>

                        <div class="uppercase">
                            Our in-house experts can walk you through everything you need to know
                        </div>

                        <div
                            class="font-bold rounded-sm bg-rb-dark-blue group-hover:bg-rb-green text-white transition-all py-2 px-4 disabled:opacity-50 group text-base text-center inline-flex justify-center items-center leading-none focus:outline-none !no-underline">
                            Get in Touch
                            <span
                                class="w-0 group-hover:pl-1 pt-1 group-hover:w-5 group-focus:w-5 group-focus:scale-100 overflow-hidden transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-white fill-none"
                                    viewBox="0 0 512 512">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                                        d="M184 112l144 144-144 144"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="bg-rb-dark-blue text-white flex">
                <div class="container mx-auto px-5 md:px-0 items-center flex h-full my-6">
                    <div class="grid md:grid-cols-2 gap-6 w-full">
                        <div>
                            <a href="/">
                                <img src="{{ asset('assets/RB_Logo.svg') }}" alt="Refurb Battery logo" class="h-7">
                            </a>
                            <div class="my-6">
                                <p>Let's talk</p>
                                <a href="tel:+31852464999" class="underline hover:no-underline flex items-center w-fit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-white mr-2"
                                        viewBox="0 0 512 512">
                                        <title>Call</title>
                                        <path
                                            d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z">
                                        </path>
                                    </svg>
                                    085 246 4999
                                </a>
                                <a href="mailto:hello@refurbbattery.eu"
                                    class="underline hover:no-underline flex items-center w-fit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-white mr-2"
                                        viewBox="0 0 512 512">
                                        <title>Mail</title>
                                        <path
                                            d="M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18-104.36a16 16 0 0119.64 25.26z">
                                        </path>
                                    </svg>
                                    hello@refurbbattery.eu
                                </a>
                            </div>
                        </div>
                        <livewire:footer-subscribe />
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>