<x-app-layout>
    <x-page-header>
        @section('title', 'Contact')
        @section('subtitle', 'Samenwerken?')
        <br />
    </x-page-header>

    <div class="bg-[#E5E7EB]">

        <div class="container px-5 pb-12 mx-auto md:px-0">
            <div class="grid gap-12 md:grid-cols-12">
                <div class="relative max-w-3xl -mt-6 col-span-full md:col-span-7">
                    <livewire:contact-form />
                </div>

                <div class="mt-6 col-span-full md:col-span-5">
                    <div class="mx-auto w-fit min-w-[300px] text-center">
                        <div class="inline-flex items-center w-10/12 mx-auto mb-4 bg-cover rounded-full aspect-square"
                            style="max-width: 15rem;background-image:url('{{ asset('assets/images/rb_production_facility.webp') }}">
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
                            <a target="_blank" href="/route" class="text-xs font-bold underline hover:no-underline">
                                routebeschrijving
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
