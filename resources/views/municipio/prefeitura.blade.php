<x-layout.index name="prefeitura">

    <!-- SECTION HOME -->
    <section
        class="w-[110%] h-[30vh] homee rounded-b-[35%] relative flex justify-center items-center
            before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]">
    </section>

    <!-- SECTION PROFILE -->
    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <div class="flex items-center justify-between mb-6 -mt-28">
            <div class="flex gap-3">
                <div
                    class="w-40 h-40 rounded-full border-4 dark:border-zinc-900 border-white bg-[url(https://scontent.faju22-1.fna.fbcdn.net/v/t39.30808-6/416714436_692094886443091_7664827533256086455_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=1SeoHseb99kAX-02OBU&_nc_ht=scontent.faju22-1.fna&oh=00_AfCWHJhr62fD3s55mz0Mn8LPx_rq120qw4srsYfakavmsQ&oe=65D3E1E7)] bg-cover">
                </div>
                <div class="flex flex-col text-white mt-7">
                    <span class="font-semibold text">Prefeitura</span>
                    <span class="text-xs font-light text">Prefeitura - São Cristóvão</span>
                    <div class="mt-2.5 flex gap-2">
                        <a class="relative flex items-center justify-center w-8 h-8 rounded-full cursor-pointer bg-blue-950 border-opacity-20"
                            href="#">
                            <span
                                class="absolute w-4 h-4 bg-yellow-400 rounded-full -bottom-[1px] -right-[2px] -z-10"></span>
                            <i class="text-white fa-brands fa-instagram"></i>
                        </a>
                        <a class="relative flex items-center justify-center w-8 h-8 rounded-full cursor-pointer bg-blue-950 border-opacity-20"
                            href="#">
                            <span
                                class="absolute w-4 h-4 bg-yellow-400 rounded-full -bottom-[1px] -right-[2px] -z-10"></span>
                            <i class="text-white fa-brands fa-x-twitter"></i></a>
                        <a class="relative flex items-center justify-center w-8 h-8 rounded-full cursor-pointer bg-blue-950 border-opacity-20"
                            href="#">
                            <span
                                class="absolute w-4 h-4 bg-yellow-400 rounded-full -bottom-[1px] -right-[2px] -z-10"></span>

                            <i class="text-white fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <button
                class="px-4 py-2 mb-10 text-sm font-semibold text-white bg-yellow-400 rounded-md shadow-md text">Contate-me</button>
        </div>

        <div>
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6">
                <x-title img="" h2="Endereço" p="Saiba onde encontrar nossa Prefeitura"></x-title>
                <p
                    class="text dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left">
                    A Prefeitura Municipal de São Cristóvão fica situada no Paço Municipal, S/N, Centro Histórico - CEP
                    49100-071
                    São Cristóvão, Sergipe - Brasil</p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between ">
                <x-title img="" h2="Contatos" p="Saiba como entrar em contato com nossa Prefeitura"></x-title>
                <p class="dark:text-white text">
                    Fone Fixo - (79) 3045-4910</p>
                <p class="dark:text-white text">
                    Endereço eletrônico: <a class="text-sm underline"
                        href="https://www.saocristovao.se.gov.br">https://www.saocristovao.se.gov.br</a></p>
            </div>
        </div>
    </section>

</x-layout.index>
