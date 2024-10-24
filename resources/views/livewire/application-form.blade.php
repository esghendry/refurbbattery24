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
                    Bedankt! We hebben je sollicitatie ontvangen en nemen zo
                    snel mogelijk contact met je op.
                </p>
            </div>
        </div>
    @endif

    @if (! $isSent)
        <form
            enctype="multipart/form-data"
            class="mx-auto lg:max-w-none"
            wire:submit="submit"
        >
            <div class="grid w-full grid-cols-2 gap-6">
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
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
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
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
                            Achternaam
                        </label>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
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
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
                        <input
                            type="text"
                            id="phone"
                            wire:model="phone"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                        />
                        <label
                            for="phone"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Telefoonnummer
                        </label>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
                        <input
                            type="text"
                            id="location"
                            wire:model="location"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                        />
                        <label
                            for="location"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Waar woon je?
                        </label>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
                        <input
                            type="text"
                            id="languages"
                            wire:model="languages"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                        />
                        <label
                            for="languages"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Welke talen spreek je?
                        </label>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
                        <input
                            type="text"
                            id="link"
                            wire:model="link"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                        />
                        <label
                            for="link"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Link naar je LinkedIn of je CV?
                        </label>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <div class="group relative flex w-full items-center">
                        <input
                            type="text"
                            id="how-did-you-find-us"
                            wire:model="howDidYouFindUs"
                            class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                            placeholder=""
                        />
                        <label
                            for="how-did-you-find-us"
                            class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75"
                        >
                            Hoe heb je ons gevonden?
                        </label>
                    </div>
                </div>
                <div class="relative col-span-2">
                    <input
                        type="file"
                        id="cv-documents"
                        wire:model="cvDocuments"
                        multiple
                        accept=".jpg, .jpeg, .png, .webp, .pdf, .doc, .docx"
                        class="peer mb-2 block w-full border-0 border-b border-rb-green bg-transparent p-0 py-2.5 outline-none focus:border-white focus:ring-0"
                    />
                    <label
                        for="cv-documents"
                        class="pointer-events-none absolute top-3 origin-[0] -translate-y-6 scale-75 transform text-sm"
                    >
                        Upload je CV document(en) hier
                    </label>
                    {{-- @error("cvDocuments")
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror --}}
                </div>

                <div class="col-span-2">
                    <button
                        type="submit"
                        class="group inline-flex h-8 w-full items-center justify-center rounded-sm bg-rb-green px-4 text-center text-base leading-none !no-underline transition-all focus:outline-none disabled:opacity-50"
                        wire:loading.attr="disabled"
                        wire:target="cvDocuments"
                    >
                        Solliciteer
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
                        Door te verzenden ga ik akkoord met Refurb Battery die
                        mijn persoonlijke gegevens verwerkt in overeenstemming
                        met haar
                        <a
                            class="!font-normal underline"
                            href="{{ route("privacy-and-cookies") }}"
                            target="_blank"
                        >
                            privacybeleid
                        </a>
                        .
                        <br />
                        Acquisitie naar aanleiding van deze of een andere (open)
                        vacature wordt niet op prijs gesteld. Doe je dat alsnog,
                        dan wordt je als sollicitant behandeld. 🙂
                    </p>
                </div>
            </div>
        </form>
    @endif
</div>
