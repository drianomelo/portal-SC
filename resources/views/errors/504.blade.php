<x-layout.cep>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[390px] bg-home rounded-b-[35%] relative flex justify-center items-center
     before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30] xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-sm lg:justify-start sm:h-[290px]">

            <div class="min-w-[1200px] relative z-10 mt-16 lg:px-5 lg:min-w-fit lg:pl-[180px] sm:pl-[85px]">
                <h2 class="mb-6 text-6xl font-extrabold text-white sm:text-4xl">Encontre seu CEP</h2>

                <p class="w-2/5 text-lg text-white lg:w-4/5 sm:text-base">
                    Consulte rapidamente o <span class="font-bold text-yellow-400">CEP</span> das ruas da <span
                        class="font-bold text-yellow-400">Cidade Mãe</span> e facilite sua vida!
                </p>
            </div>
        </section>
    </div>

    <div class="max-w-[1200px] mx-auto mt-6 sm:mt-6">
        <p class="flex flex-col items-center gap-4 mt-6 text-lg font-bold text-center text-red-500">
            OPS, ACONTECEU ALGO DE ERRADO COM SUA PESQUISA !!
            <a href=""
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">Tentar Novamente</a>
        </p>
    </div>

    @push('scripts')
        @vite('resources/js/cep.js')
    @endpush
</x-layout.cep>
