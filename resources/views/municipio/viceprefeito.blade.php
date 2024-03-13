<x-layout.municipio bg="bg-prefeito">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5">
        <!-- SECTION PROFILE -->
        <x-municipio.profile img="https://www.saocristovao.se.gov.br/imagens/orgaos/GABVP.JPG"
            title="Paulo Roberto de Santana Júnior" subtitle="Vice-Prefeito - São Cristóvão" :socials="[
                [
                    'url' => '#',
                    'icon' => 'fa-brands fa-instagram',
                ],
                [
                    'url' => '#',
                    'icon' => 'fa-brands fa-x-twitter',
                ],
                [
                    'url' => '#',
                    'icon' => 'fa-brands fa-youtube',
                ],
            ]"
            linkButton="#" nameButton="Contate-me" />

        <!-- SECTION DESCRIPITON -->
        <div>
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between xl:mb-10">
                <x-title img="" h2="Sobre" p="Conheça um pouco sobre nosso Vice-Prefeito"></x-title>
                <p
                    class="text-justify text dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left">
                    Paulo Roberto de Santana Júnior, Paulo Júnior, exerceu por dois mandatos o cargo de vereador,
                    ocupando, ainda, a Presidência da Câmara. Filho do ex-Vereador Paulinho dos Correios e de dona
                    Edelzita Cardoso, é sancristovense, servidor público do Estado,e ocupou por quatro meses a
                    Secretaria do Meio Ambiente em 2011. Bacharel em Direito, é também pós-graduando em Gestão e Direito
                    Municipal.</p>
            </div>
        </div>
    </section>

</x-layout.municipio>
