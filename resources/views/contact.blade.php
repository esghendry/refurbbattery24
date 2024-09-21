<x-app-layout>
    <x-page-header>
        @section("title", "Contact")
        @section("subtitle", "Samenwerken?")
        <br />
    </x-page-header>

    <div class="bg-[#E5E7EB]">
        {{--
            <div class="container mx-auto mb-12 px-5 md:px-0">
            <div class="grid w-full grid-cols-12 gap-12">
            <div class="col-span-full">
            <div class="m-6"></div>
            <livewire:contact-form />
            </div>
            </div>
            </div>
        --}}
        {{-- </div> --}}

        <div class="container mx-auto pb-12 px-5 md:px-0">
            <div class="grid md:grid-cols-12 gap-12">
                <div
                    class="relative col-span-full -mt-6 max-w-3xl md:col-span-7"
                >
                    <livewire:contact-form />
                </div>

                <div class="col-span-full mt-6 md:col-span-5">
                    <div class="mx-auto w-fit min-w-[300px] text-center">
                        <div
                            class="mx-auto mb-4 inline-flex aspect-square w-10/12 items-center rounded-full bg-cover"
                            style="max-width: 15rem;background-image:url('{{ asset("assets/images/rb_production_facility.webp") }}"
                        >
                            <div class="w-full">&nbsp;</div>
                        </div>
                        <br />
                        <div>
                            <span class="text-xs uppercase">
                                Productiefaciliteit
                            </span>
                            <br />
                            <br />
                            <strong>BCT Treeport</strong>
                            <br />
                            Treeport 3
                            <br />
                            4891 PZ Rijsbergen
                            <br />
                            <a
                                target="_blank"
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
    </div>
</x-app-layout>
