<x-app-layout>
    <x-page-header>
        @section("title", "Contact")
        @section("subtitle", "Samenwerken?")
        <br />
    </x-page-header>
    <div class="container mx-auto mb-12 px-5 md:px-0">
        <div class="grid grid-cols-12 gap-12">
            <div class="relative col-span-full -mt-6 max-w-3xl md:col-span-7">
                <livewire:contact-form />
            </div>

            <div class="md:col-span-5 col-span-full mt-6">
                <div class="w-fit min-w-[300px] mx-auto text-center">
                    <div
                        class="mx-auto mb-4 inline-flex aspect-square w-10/12 items-center rounded-full bg-cover"
                        style="max-width: 15rem;background-image:url('{{ asset("assets/images/production_facility.webp") }}"
                    >
                        <div class="w-full">&nbsp;</div>
                    </div>
                    <br />
                    <div>
                        <span class="text-xs">PRODUCTION FACILITY</span>
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
                            directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
