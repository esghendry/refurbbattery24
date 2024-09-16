<form wire:submit="submit">

    <h3 class="font-bold text-rb-green">Join the movement</h3>
    <p>Subscribe to our mailing list.</p>

    <div class="w-full relative">

        <div class="group relative flex items-center w-full text-white">
            <label for="newsletterFormEmail"
                class="origin-left inline-block transform absolute transition-all pointer-events-none group-focus-within:-translate-y-5 group-focus-within:scale-75">
                Your email
            </label>
            <input id="newsletterFormEmail" name="form[email]" type="email"
                class="pr-36 p-0 pb-2.5 pt-6 border-0 focus:ring-0 border-b w-full mb-2 bg-transparent outline-none focus:border-white text-dark-green text-sm border-current"
                value="" required="" />
        </div>

        <div class="absolute top-2 right-2">
            <button
                class="rounded-sm bg-rb-green text-white transition-all px-4 disabled:opacity-50 group text-base text-center inline-flex justify-center items-center h-8 leading-none focus:outline-none !no-underline">
                Subscribe
                <span
                    class="w-0 group-hover:pl-1 pt-1 group-hover:w-5 group-focus:w-5 group-focus:scale-100 overflow-hidden transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-white fill-none"
                        viewBox="0 0 512 512">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                            d="M184 112l144 144-144 144"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <div class="w-full max-w-none">
        <p class="leading-[1.5] text-xs first:mt-0 last:mb-0 my-6">
            By signing up to the newsletter I agree with Refurb Battery processing my personal data in line with the
            <a class="underline !font-normal" href="https://refurbbattery.eu/privacy-and-cookies" target="_blank">
                privacy policy
            </a>.
        </p>
    </div>

</form>