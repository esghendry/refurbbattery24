<div>
    <div class="bg-rb-dark-blue p-6 text-white">
        @if ($isSent)
            <div class="flex w-full">
                <div
                    class="mx-auto inline-flex w-10/12 items-center bg-rb-green p-4"
                >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="mr-2 size-10"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                            />
                        </svg>
                    </div>
                    <p class="notyf__message">
                        We hebben je contact verzoek ontvangen en nemen contact
                        met je op. Bedankt!
                    </p>
                </div>
            </div>
        @endif

        @if (! $isSent)
            <form wire:submit="submit" class="mx-auto max-w-lg">
                <div class="grid grid-cols-2 gap-6">
                    <div class="group relative inline-block w-full">
                        <input
                            type="text"
                            id="first-name"
                            wire:model="firstName"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                            required
                        />
                        <label
                            for="first-name"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Voornaam
                        </label>
                    </div>

                    <div class="group relative inline-block w-full">
                        <input
                            type="text"
                            id="last-name"
                            wire:model="lastName"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                            required
                        />
                        <label
                            for="last-name"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Acternaam
                        </label>
                    </div>

                    <div class="group relative inline-block w-full">
                        <input
                            type="email"
                            id="email"
                            wire:model="email"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                            required
                        />
                        <label
                            for="email"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            E-mail
                        </label>
                    </div>

                    <div class="group relative inline-block w-full">
                        <input
                            type="text"
                            id="phone"
                            wire:model="phone"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                            required
                        />
                        <label
                            for="phone"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Telefoonnummer
                        </label>
                    </div>

                    <div
                        class="group relative col-span-full inline-block w-full"
                    >
                        <textarea
                            type="text"
                            id="message"
                            wire:model="message"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                            required
                        ></textarea>
                        <label
                            for="message"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Bericht
                        </label>
                    </div>

                    <div class="col-span-2">
                        <button
                            class="group inline-flex h-8 w-full items-center justify-center rounded-sm bg-rb-green px-4 text-center text-base leading-none text-white !no-underline transition-all focus:outline-none disabled:opacity-50"
                        >
                            Verstuur
                            <span
                                class="w-0 overflow-hidden transition-all group-hover:w-5 group-hover:pl-1 group-focus:w-5 group-focus:scale-100"
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
                        </button>

                        <p
                            class="linkEffects mt-2 text-center text-xs leading-[1.5]"
                        >
                            By sending I agree with Refurb Battery processing my
                            personal data in line with its
                            <a
                                class="!font-normal underline"
                                href="/privacy-and-cookies"
                                target="_blank"
                            >
                                privacy policy
                            </a>
                            .
                        </p>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>
