<div>
    <div class="sticky h-[150px] w-full overflow-hidden bg-[#FFBB00]">
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
            <div class="absolute -left-28 z-0 aspect-square w-screen">
                <div
                    x-ref="radiant1"
                    class="size-full bg-[linear-gradient(60deg,_var(--tw-gradient-stops))] from-rb-green from-25% to-transparent to-60%"
                ></div>
            </div>
            <div class="absolute -right-28 z-0 aspect-square w-screen">
                <div
                    x-ref="radiant2"
                    class="size-full bg-[linear-gradient(240deg,_var(--tw-gradient-stops))] from-rb-dark-blue from-25% to-transparent to-65%"
                ></div>
            </div>
        </div>

        <div class="absolute top-0 size-full">
            <div class="container mx-auto size-full px-5 md:px-0">
                <div class="size-full items-center flex flex-wrap">
                    <div class="text-white space-y-2">
                        <h1 class="text-4xl font-bold">
                            @yield('title')
                        </h1>
                        <h2 class="text-xl">
                            @yield('subtitle')
                        </h2>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
