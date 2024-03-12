<x-layout.municipio bg="bg-prefeito">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-16">
        <!-- SECTION PROFILE -->
        <x-municipio.profile img="https://www.saocristovao.se.gov.br/imagens/orgaos/Prefeito.jpeg"
            title="Marcos Antonio de Azevedo Santana" subtitle="Prefeito - São Cristóvão" :socials="[
                [
                    'url' => 'https://www.instagram.com/marcossantanasc/',
                    'icon' => 'fa-brands fa-instagram',
                ],
                [
                    'url' => 'https://twitter.com/MarcosSantanaSC',
                    'icon' => 'fa-brands fa-x-twitter',
                ],
                [
                    'url' => 'https://www.youtube.com/channel/UC7DxV1yDgXnzDU7a8goZuCQ',
                    'icon' => 'fa-brands fa-youtube',
                ],
            ]" linkButton="#"
            nameButton="Contate-me" />

        <!-- SECTION DESCRIPITON -->
        <div>
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between xl:mb-10">
                <x-title img="" h2="Sobre" p="Conheça um pouco sobre nosso Prefeito"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    Marcos Antonio de Azevedo Santana está cumprindo, desde primeiro de janeiro de 2021, seu segundo
                    mandato
                    como prefeito de São Cristóvão, cidade onde nasceu no dia 8 de novembro de 1959. É formado em
                    Administração pela FANESE e pós-graduado em Gestão Urbana e Planejamento Municipal pela UFS e
                    funcionário concursado da Caixa Econômica Federal há mais de 30 anos.</p>
                <p class="-mt-2 text-justify dark:text-white text">
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

</x-layout.municipio>
