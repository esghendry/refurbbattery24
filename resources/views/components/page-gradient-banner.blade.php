<div class="z-50">
    <div class="{{ $height }} relative min-h-[150px] w-full bg-[#FFBB00]">
        <div x-data="{}" x-init="() => {
            gsap.timeline().to($refs.radiant1, {
                keyframes: {
                    x: [0, -250],
                    y: [0, -100],
                },
                duration: 7,
                repeat: -1,
                yoyo: true,
            })
            gsap.timeline().to($refs.radiant2, {
                keyframes: {
                    x: [0, 200],
                    y: [-100, 100],
                },
                duration: 5,
                repeat: -1,
                yoyo: true,
            })
        }"
            class="absolute inset-0 flex items-center h-full overflow-hidden">
            <div class="absolute z-0 aspect-square min-h-[700px] sm:w-screen">
                <div x-ref="radiant1"
                    class="size-full bg-[linear-gradient(60deg,_var(--tw-gradient-stops))] from-rb-dark-blue from-25% to-transparent to-65%">
                </div>
            </div>
            <div class="absolute z-0 aspect-square min-h-[700px] sm:w-screen">
                <div x-ref="radiant2"
                    class="size-full bg-[linear-gradient(240deg,_var(--tw-gradient-stops))] from-rb-green from-25% to-transparent to-60%">
                </div>
            </div>
        </div>

        <div class="absolute inset-0 z-50 size-full">
            <div class="container items-center px-5 mx-auto size-full md:px-0">
                <div class="relative grid gap-2 size-full md:grid-cols-12 md:gap-12">
                    <div class="relative items-center md:col-span-6 md:flex">
                        <img src="{{ $img }}" alt="image" class="self-center -mt-6 md:absolute md:mt-0" />
                    </div>

                    <div class="flex items-center md:col-span-6">
                        <div class="">
                            @hasSection('banner_title')
                                <h1 class="text-4xl font-bold">
                                    @yield('banner_title')
                                </h1>
                            @endif

                            @hasSection('banner_subtitle')
                                <h2 class="text-xl">
                                    @yield('banner_subtitle')
                                </h2>
                            @endif

                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
