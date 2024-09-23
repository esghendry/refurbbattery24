<x-app-layout>
    <div class="bg-[#E5E7EB]">
        <div
            class="grid h-72 w-full grid-cols-1 place-content-center bg-cover bg-center sm:h-96"
            style="background-image: url('{{ $article->image }}')"
        >
            <div>
                <div class="relative grid w-full grid-cols-12 px-4 md:px-0">
                    <div
                        class="col-span-12 md:col-span-10 md:col-start-2 xl:col-span-8 xl:col-start-3"
                    >
                        <div
                            class="animate__animated animate__delay-4s animate__fadeInUp"
                            style="
                                padding: 5rem;
                                width: 100%;
                                height: 100%;
                                margin-top: -2rem;
                                margin-left: -24rem;
                                z-index: 0;
                                position: absolute;
                                background-color: rgba(26, 54, 94, 0.75);
                                border-radius: 50%;
                                filter: blur(80px);
                            "
                        ></div>
                        <h1
                            class="animate__animated animate__backInDown relative z-50 mb-2 block font-mulish text-2xl font-bold text-white sm:text-3xl md:text-4xl lg:text-5xl"
                        >
                            {{ $article->title }}
                        </h1>
                        <span
                            class="animate__animated animate__backInDown animate__delay-1s relative block font-mulish text-base text-white sm:text-xl md:text-2xl"
                        >
                            {{ $article->author }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container linkEffects mx-auto px-5 md:px-0 py-12">

            <div class="prose mx-auto">
                {!! $article->body !!}
            </div>

        </div>

    </div>
</x-app-layout>
