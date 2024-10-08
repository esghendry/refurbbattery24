<div class="z-50">
    <div
        class="{{ $height }} relative min-h-[150px] w-full overflow-hidden bg-[#FFBB00]"
    >
        <div
            x-data="{}"
            x-init="
                () => {
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
                }
            "
            class="flex h-full items-center"
        >
            <div class="absolute z-0 aspect-square min-h-[700px] sm:w-screen">
                <div
                    x-ref="radiant1"
                    class="size-full bg-[linear-gradient(60deg,_var(--tw-gradient-stops))] from-rb-green from-25% to-transparent to-60%"
                ></div>
            </div>
            <div class="absolute z-0 aspect-square min-h-[700px] sm:w-screen">
                <div
                    x-ref="radiant2"
                    class="size-full bg-[linear-gradient(240deg,_var(--tw-gradient-stops))] from-rb-dark-blue from-25% to-transparent to-65%"
                ></div>
            </div>
            <div class="container mx-auto my-6 size-full px-5 md:px-0 z-50">
                <div
                    class=" z-50 flex size-full flex-wrap items-center"
                >
                    <div class="space-y-2 text-white">
                        @hasSection("title")
                            <h1 class="text-2xl min-[430px]:text-4xl font-bold">
                                @yield("title")
                            </h1>
                        @endif

                        @hasSection("subtitle")
                            <h2 class="text-base min-[430px]:text-xl">
                                @yield("subtitle")
                            </h2>
                        @endif

                        <div class="z-50">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
