<x-layout.index name="prefeito">

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
                    class="w-40 h-40 rounded-full border-4 border-white dark:border-zinc-900 bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/Prefeito.jpeg)] bg-cover">
                </div>
                <div class="flex flex-col text-white mt-7">
                    <span class="font-semibold">Marcos Antonio de Azevedo Santana</span>
                    <span class="text-xs font-light">Prefeito - São Cristóvão</span>
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
                class="px-4 py-2 mb-10 text-sm font-semibold text-white bg-yellow-400 rounded-md shadow-md">Contate-me</button>
        </div>

        <div>
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between ">
                <x-title img="" h2="Sobre" p="Conheça um pouco sobre nosso Prefeito"></x-title>
                <p
                    class="dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left">
                    Marcos Antonio de Azevedo Santana está cumprindo, desde primeiro de janeiro de 2021, seu segundo
                    mandato
                    como prefeito de São Cristóvão, cidade onde nasceu no dia 8 de novembro de 1959. É formado em
                    Administração pela FANESE e pós-graduado em Gestão Urbana e Planejamento Municipal pela UFS e
                    funcionário concursado da Caixa Econômica Federal há mais de 30 anos.</p>
                <p class="dark:text-white">
                    Exerceu os cargos de Diretor de Gestão Ambiental da Companhia de Saneamento de Sergipe (DESO),
                    Secretário Adjunto do Meio Ambiente e dos Recursos Hídricos do Estado de Sergipe e Diretor
                    Administrativo e Financeiro da Companhia de Desenvolvimento Sustentável de Sergipe (PRONESE); além
                    do
                    cargo não remunerado de Diretor-Presidente do Hospital e Maternidade Nosso Senhor dos Passos, em São
                    Cristóvão. Elegeu-se a primeira vez prefeito de São Cristóvão em outubro de 2016.
                </p>
            </div>


        </div>
    </section>

</x-layout.index>
