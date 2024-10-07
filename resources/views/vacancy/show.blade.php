<x-app-layout>
    <x-page-header>
        @section("title", $vacancy->title)
        @section("subtitle", $vacancy->subtitle)
    </x-page-header>

    <div class="bg-[#E5E7EB]">
        <div class="container mx-auto px-5 py-6 md:px-0">
            <div class="grid grid-cols-12">
                <div
                    class="text-dark-blue col-span-12 pt-6 md:col-span-10 md:col-start-2 md:px-0 xl:col-span-8 xl:col-start-3"
                >
                    {{--  --}}
                    <div
                        class="linkEffects z-10 grid w-full grid-cols-12 gap-2 px-2 sm:gap-3 md:px-0 lg:gap-5"
                    >
                        <div
                            class="md:col-start-0 col-span-12 border-b-2 border-gray-300 pb-6 lg:col-start-1"
                        >
                            <div
                                class="text-dark-blue grid w-full grid-cols-5 pb-6 [text-shadow:_0px_0px_0px_rgb(0_0_0_/_100%)]"
                            >
                                <div class="col-span-5 md:col-span-3">
                                    <h2
                                        class="block text-base font-bold sm:text-lg md:text-xl"
                                    >
                                        {{ $vacancy->info_heading }}
                                    </h2>
                                    <div
                                        class="mt-6 bg-white p-7 italic sm:p-6 md:p-8"
                                    >
                                        “{{ $vacancy->quote }}”
                                    </div>
                                </div>
                                <div
                                    class="col-span-5 pt-4 md:col-span-2 md:p-4"
                                >
                                    <div
                                        class="mx-auto mb-4 hidden aspect-square w-10/12 rounded-full bg-cover md:block"
                                        style="max-width: 15rem;background-image:url('{{ asset("assets/images/rb_production_facility.webp") }}'"
                                    ></div>
                                    <div class="text-center">
                                        <p
                                            class="block text-xs font-bold md:hidden "
                                        >
                                            LOCATIE
                                        </p>

                                        @if ($vacancy->location->name)
                                            <p
                                                class="hidden text-xs uppercase md:block mb-6"
                                            >
                                                {{ $vacancy->location->name }}
                                            </p>
                                        @endif

                                        @if ($vacancy->location->building_name)
                                            <p>
                                                <strong>
                                                    {{ $vacancy->location->building_name }}
                                                </strong>
                                            </p>
                                        @endif

                                        <p>
                                            {{ $vacancy->location->address }}
                                            {{ $vacancy->location->number }}
                                        </p>
                                        <p>
                                            {{ $vacancy->location->postal_code }}
                                            {{ $vacancy->location->city }}
                                        </p>

                                        <a
                                            href="/route"
                                            class="text-xs font-bold underline hover:no-underline"
                                        >
                                            routebeschrijving
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="z-10 grid w-full grid-cols-12 gap-0 px-2 md:px-0"
                    >
                        <div class="md:col-start-0 col-span-12 lg:col-start-1">
                            @foreach ($vacancy->blocks as $key => $block)
                                <div
                                    class="overflow-hidden border-b-2 border-gray-300 py-6"
                                >
                                    <div
                                        class="hover:text-dark-blue flex cursor-pointer justify-between text-gray-500"
                                        onclick="this.parentNode.querySelector('.content').classList.toggle('hidden');this.querySelector('svg').classList.toggle('rotate-180');"
                                    >
                                        <div>
                                            <h2
                                                class="block text-lg font-bold sm:text-xl md:text-2xl"
                                            >
                                                {{ $block["title"] }}
                                            </h2>
                                        </div>
                                        <button>
                                            <svg
                                                class="rotate-180 transition-all"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                            >
                                                <g
                                                    fill="none"
                                                    fill-rule="evenodd"
                                                >
                                                    <path
                                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"
                                                    ></path>
                                                    <path
                                                        fill="currentColor"
                                                        d="M13.06 16.06a1.5 1.5 0 0 1-2.12 0l-5.658-5.656a1.5 1.5 0 1 1 2.122-2.121L12 12.879l4.596-4.596a1.5 1.5 0 0 1 2.122 2.12l-5.657 5.658Z"
                                                    ></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                    <div
                                        class="animate__animated animate__fadeInUp content prose max-w-none pt-2 {{ $key > 0 ? "hidden" : "" }}"
                                    >
                                        {!! $block["content"] !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>

            <div
                class="text-dark-blue mx-auto mt-6 grid w-full grid-cols-3 place-items-center gap-4 md:place-items-start"
            >
                <div class="col-span-3 pt-6 text-center md:col-span-1">
                    <h1
                        class="mb-2 block text-base font-bold sm:text-lg md:text-xl"
                    >
                        Interesse of vragen over een vacature of (werken bij)
                        Refurb Battery?
                    </h1>
                    Neem dan contact op met
                    <br />
                    <br />
                    <div
                        class="mx-auto mb-4 inline-flex aspect-square w-10/12 items-center rounded-full bg-cover"
                        style="
                            max-width: 15rem;
                            background-image: url('{{ asset("assets/images/peoples/daan.webp") }}');
                        "
                    >
                        <div class="w-full">&nbsp;</div>
                    </div>
                    <br />
                    <strong>Talent &amp; Culture Manager</strong>
                    <br />
                    Daan de Win
                    <br />
                    <br />
                    <small>
                        <svg
                            class="inline"
                            width="16px"
                            height="16px"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                                id="SVGRepo_tracerCarrier"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M22 3.47059V20.5294C22 20.9194 21.8451 21.2935 21.5693 21.5693C21.2935 21.8451 20.9194 22 20.5294 22H3.47059C3.08056 22 2.70651 21.8451 2.43073 21.5693C2.15494 21.2935 2 20.9194 2 20.5294V3.47059C2 3.08056 2.15494 2.70651 2.43073 2.43073C2.70651 2.15494 3.08056 2 3.47059 2H20.5294C20.9194 2 21.2935 2.15494 21.5693 2.43073C21.8451 2.70651 22 3.08056 22 3.47059ZM7.88235 9.64706H4.94118V19.0588H7.88235V9.64706ZM8.14706 6.41177C8.14861 6.18929 8.10632 5.96869 8.02261 5.76255C7.93891 5.55642 7.81542 5.36879 7.65919 5.21039C7.50297 5.05198 7.31708 4.92589 7.11213 4.83933C6.90718 4.75277 6.68718 4.70742 6.46471 4.70588H6.41177C5.95934 4.70588 5.52544 4.88561 5.20552 5.20552C4.88561 5.52544 4.70588 5.95934 4.70588 6.41177C4.70588 6.86419 4.88561 7.29809 5.20552 7.61801C5.52544 7.93792 5.95934 8.11765 6.41177 8.11765C6.63426 8.12312 6.85565 8.0847 7.06328 8.00458C7.27092 7.92447 7.46074 7.80422 7.62189 7.65072C7.78304 7.49722 7.91237 7.31346 8.00248 7.10996C8.09259 6.90646 8.14172 6.6872 8.14706 6.46471V6.41177ZM19.0588 13.3412C19.0588 10.5118 17.2588 9.41177 15.4706 9.41177C14.8851 9.38245 14.3021 9.50715 13.7799 9.77345C13.2576 10.0397 12.8143 10.4383 12.4941 10.9294H12.4118V9.64706H9.64706V19.0588H12.5882V14.0529C12.5457 13.5403 12.7072 13.0315 13.0376 12.6372C13.3681 12.2429 13.8407 11.9949 14.3529 11.9471H14.4647C15.4 11.9471 16.0941 12.5353 16.0941 14.0176V19.0588H19.0353L19.0588 13.3412Z"
                                    fill="#000000"
                                ></path>
                            </g>
                        </svg>
                        <a
                            href="https://www.linkedin.com/in/daandewin/"
                            class="!font-normal underline"
                            target="_blank"
                        >
                            LinkedIn
                        </a>
                        <br />
                        <svg
                            class="inline"
                            width="16px"
                            height="16px"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="#000000"
                            stroke="#000000"
                            stroke-width="0.0002"
                        >
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                                id="SVGRepo_tracerCarrier"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                                <rect
                                    x="0"
                                    fill="none"
                                    width="20"
                                    height="20"
                                ></rect>
                                <g>
                                    <path
                                        d="M3.87 4h13.25C18.37 4 19 4.59 19 5.79v8.42c0 1.19-.63 1.79-1.88 1.79H3.87c-1.25 0-1.88-.6-1.88-1.79V5.79c0-1.2.63-1.79 1.88-1.79zm6.62 8.6l6.74-5.53c.24-.2.43-.66.13-1.07-.29-.41-.82-.42-1.17-.17l-5.7 3.86L4.8 5.83c-.35-.25-.88-.24-1.17.17-.3.41-.11.87.13 1.07z"
                                    ></path>
                                </g>
                            </g>
                        </svg>
                        <a
                            href="mailto:daan.dewin@refurbbattery.eu?subject=Question+about+vacancies"
                            class="!font-normal underline"
                            target="_blank"
                        >
                            e-mail
                        </a>
                        <br />
                        <svg
                            class="inline"
                            width="16px"
                            height="16px"
                            viewBox="0 0 20 20"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#000000"
                        >
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                                id="SVGRepo_tracerCarrier"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>whatsapp [#128]</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g
                                    id="Page-1"
                                    stroke="none"
                                    stroke-width="1"
                                    fill="none"
                                    fill-rule="evenodd"
                                >
                                    <g
                                        id="Dribbble-Light-Preview"
                                        transform="translate(-300.000000, -7599.000000)"
                                        fill="#000000"
                                    >
                                        <g
                                            id="icons"
                                            transform="translate(56.000000, 160.000000)"
                                        >
                                            <path
                                                d="M259.821,7453.12124 C259.58,7453.80344 258.622,7454.36761 257.858,7454.53266 C257.335,7454.64369 256.653,7454.73172 254.355,7453.77943 C251.774,7452.71011 248.19,7448.90097 248.19,7446.36621 C248.19,7445.07582 248.934,7443.57337 250.235,7443.57337 C250.861,7443.57337 250.999,7443.58538 251.205,7444.07952 C251.446,7444.6617 252.034,7446.09613 252.104,7446.24317 C252.393,7446.84635 251.81,7447.19946 251.387,7447.72462 C251.252,7447.88266 251.099,7448.05372 251.27,7448.3478 C251.44,7448.63589 252.028,7449.59418 252.892,7450.36341 C254.008,7451.35771 254.913,7451.6748 255.237,7451.80984 C255.478,7451.90987 255.766,7451.88687 255.942,7451.69881 C256.165,7451.45774 256.442,7451.05762 256.724,7450.6635 C256.923,7450.38141 257.176,7450.3464 257.441,7450.44643 C257.62,7450.50845 259.895,7451.56477 259.991,7451.73382 C260.062,7451.85686 260.062,7452.43903 259.821,7453.12124 M254.002,7439 L253.997,7439 L253.997,7439 C248.484,7439 244,7443.48535 244,7449 C244,7451.18666 244.705,7453.21526 245.904,7454.86076 L244.658,7458.57687 L248.501,7457.3485 C250.082,7458.39482 251.969,7459 254.002,7459 C259.515,7459 264,7454.51465 264,7449 C264,7443.48535 259.515,7439 254.002,7439"
                                                id="whatsapp-[#128]"
                                            ></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <a
                            href="https://wa.me/31627456484"
                            class="!font-normal underline"
                            target="_blank"
                        >
                            WhatsApp
                        </a>
                        <br />
                        <svg
                            class="inline"
                            width="16px"
                            height="16px"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g
                                id="SVGRepo_tracerCarrier"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z"
                                    fill="#1C274C"
                                ></path>
                            </g>
                        </svg>
                        <a
                            href="tel:0031627456484"
                            class="!font-normal underline"
                            target="_blank"
                        >
                            call
                        </a>
                    </small>
                    <br />
                    <br />
                </div>

                <div class="col-span-3 py-6 md:col-span-2">
                    <h1
                        class="mb-2 block text-base font-bold sm:text-lg md:text-xl"
                    >
                        Nu solliciteren, snel en eenvoudig
                    </h1>
                    <livewire:applicant-form
                        :source="'werken-bij/'.$vacancy->slug"
                    />
                </div>
            </div>

            <div class="text-center text-rb-dark-blue">
                <h2 class="block text-lg font-bold sm:text-xl md:text-2xl">
                    Het oplaadproces.
                </h2>
                <div
                    class="mb-6 grid grid-cols-3 px-10 py-6 text-rb-dark-blue [text-shadow:_0px_0px_0px_rgb(0_0_0_/_100%)] sm:grid-cols-2 xl:grid-cols-3"
                >
                    <div class="col-span-3 p-4 sm:col-span-1 xl:col-span-1">
                        <svg
                            class="mx-auto text-rb-green"
                            xmlns="http://www.w3.org/2000/svg"
                            height="48"
                            viewBox="0 -960 960 960"
                            width="48"
                        >
                            <path
                                fill="currentColor"
                                d="M450-403h60v-240h-60v240Zm30.5 150q12.5 0 21-9t8.5-21.5q0-12.5-8.625-21T480-313q-12 0-21 8.625T450-283q0 12 9 21t21.5 9ZM310-80q-12.75 0-21.375-8.625T280-110v-676q0-12.75 8.625-21.375T310-816h90v-64h160v64h90q12.75 0 21.375 8.625T680-786v676q0 12.75-8.625 21.375T650-80H310Zm30-60h280v-616H340v616Zm0 0h280-280Z"
                            ></path>
                        </svg>
                        <div class="text-lg font-bold">
                            Opladen: ontdek of we bij jouw energie passen
                        </div>
                    </div>
                    <div class="col-span-3 p-4 sm:col-span-1 xl:col-span-1">
                        <svg
                            class="mx-auto text-rb-green"
                            xmlns="http://www.w3.org/2000/svg"
                            height="48"
                            viewBox="0 -960 960 960"
                            width="48"
                        >
                            <path
                                fill="currentColor"
                                d="M660-87v-113h-80l120-192v112h80L660-87Zm-350 7q-13 0-21.5-8.5T280-110v-676q0-13 8.5-21.5T310-816h90v-64h160v64h90q13 0 21.5 8.5T680-786v333q-16 0-31 2t-29 7v-312H340v383h174q-22 28-34.5 62T467-239q0 48 19.5 89T539-80H310Z"
                            ></path>
                        </svg>
                        <div class="text-lg font-bold">
                            Halverwege! Laten we ons richten op jouw
                            (technische) krachten
                        </div>
                    </div>
                    <div class="col-span-3 p-4 sm:col-span-3 xl:col-span-1">
                        <svg
                            class="mx-auto text-rb-green"
                            xmlns="http://www.w3.org/2000/svg"
                            height="48"
                            viewBox="0 -960 960 960"
                            width="48"
                        >
                            <path
                                fill="currentColor"
                                d="M310-80q-13 0-21.5-8.5T280-110v-676q0-13 8.5-21.5T310-816h90v-64h160v64h90q13 0 21.5 8.5T680-786v333q-88 0-150.5 62.5T467-239q0 48 19.5 89T539-80H310Zm30-556h280v-120H340v120ZM660-87v-113h-80l120-192v112h80L660-87Z"
                            ></path>
                        </svg>
                        <div class="text-lg font-bold">
                            Piekkracht: watt zijn jouw werkenergiebronnen en
                            verwachtingen?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
