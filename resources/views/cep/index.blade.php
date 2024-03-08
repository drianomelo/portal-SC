<x-layout.cep>
    <section
        class="w-[110%] h-[40vh] home rounded-b-[35%] relative flex justify-center items-center
     before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]">

        <div class="min-w-[1200px] relative z-10 mt-16">
            <h2 class="mb-6 text-6xl font-extrabold text-white">Encontre seu CEP</h2>

            <p class="w-2/5 text-lg text-white">
                Consulte rapidamente o <span class="font-bold text-yellow-400">CEP</span> das ruas da <span
                    class="font-bold text-yellow-400">Cidade Mãe</span> e facilite sua vida!
            </p>
        </div>
    </section>

    <div class="max-w-[1200px] mx-auto mt-16">
        <form class="flex flex-col items-center w-full" id="cep-form">
            <div class="relative flex items-center w-[1200px] mx-auto mb-10">
                <label
                    class="absolute px-3 font-bold text-blue-900 transition-all bg-white dark:bg-zinc-900 dark:text-yellow-500 left-8 bottom-2/4 translate-y-2/4"
                    for="input-rua" id="label-rua">Nome da Rua</label>
                <input type="text" required
                    class="w-full px-8 py-4 bg-white border-2 border-blue-900 rounded-full outline-none dark:border-yellow-500 dark:bg-zinc-900 dark:text-white" id="input-rua">
            </div>
            <input type="submit" value="Pesquisar CEP"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">
        </form>

        <div id="ruas" class="flex flex-wrap items-start justify-center w-full gap-4 my-10">

        </div>
    </div>
</x-layout.cep>
