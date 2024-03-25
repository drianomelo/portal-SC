<x-layout.cep>
    <section
        class="w-[110%] h-[390px] bg-home rounded-b-[35%] relative flex justify-center items-center
     before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30] xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-sm lg:justify-start">

        <div class="min-w-[1200px] relative z-10 mt-16 lg:px-5 lg:min-w-fit lg:pl-[180px]">
            <h2 class="mb-6 text-6xl font-extrabold text-white">Encontre seu CEP</h2>

            <p class="w-2/5 text-lg text-white lg:w-4/5">
                Consulte rapidamente o <span class="font-bold text-yellow-400">CEP</span> das ruas da <span
                    class="font-bold text-yellow-400">Cidade Mãe</span> e facilite sua vida!
            </p>
        </div>
    </section>

    <div class="max-w-[1200px] mx-auto mt-14">
        <form class="flex flex-col items-center w-full" id="cep-form">
            <div class="relative flex items-center justify-center mx-auto mb-10 w-fit">
                <label
                    class="absolute px-3 font-bold text-blue-900 transition-all bg-white dark:bg-zinc-900 dark:text-yellow-500 left-8 bottom-2/4 translate-y-2/4"
                    for="input-rua" id="label-rua">Nome da Rua</label>
                <input type="text" required
                    class="w-[400px] px-8 py-4 bg-white border-2 border-blue-900 rounded-full outline-none dark:border-yellow-500 dark:bg-zinc-900 dark:text-white"
                    id="input-rua">
            </div>
            <input type="submit" value="Pesquisar CEP"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">
        </form>

        <div id="ruas" class="flex flex-wrap items-start justify-center w-full gap-4 my-10">
            <div class="flex items-center bg-blue-900 gap-2 w-[350px] p-3 pl-5 rounded-full">
                <img class="w-16 ml-2"
                    src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/location.png"
                    alt="">
                <div class="flex flex-col ml-4">
                    <span class="font-bold text-white">Nome da Rua</span>
                    <span class="mb-1 -mt-[2px] text-xs font-light text-white">Bairro - Complemento</span>
                    <span class="font-bold text-yellow-400">CEP</span>
                </div>
            </div>
        </div>
    </div>
</x-layout.cep>
