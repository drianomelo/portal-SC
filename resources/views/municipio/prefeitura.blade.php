<x-layout.municipio bg="bg-prefeitura">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-municipio.profile
            img="https://conteudo.imguol.com.br/c/entretenimento/3b/2021/10/01/praca-sao-francisco-em-sao-cristovao-sergipe-1633111234737_v2_1x1.jpg"
            title="Prefeitura" subtitle="Prefeitura - São Cristóvão" :socials="[
                [
                    'url' => 'https://www.instagram.com/prefsaocristovao/',
                    'icon' => 'fa-brands fa-instagram',
                ],
                [
                    'url' => 'https://twitter.com/pref_sc',
                    'icon' => 'fa-brands fa-x-twitter',
                ],
                [
                    'url' => 'https://www.youtube.com/@PrefeituradeSaoCristovaoSe',
                    'icon' => 'fa-brands fa-youtube',
                ],
            ]" linkButton="#"
            nameButton="Contate-me" />

        <!-- SECTION DESCRIPITON -->
        <div>
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6">
                <x-title img="" h2="Endereço" p="Saiba onde encontrar nossa Prefeitura"></x-title>
                <p
                    class="text-justify text dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left">
                    A Prefeitura Municipal de São Cristóvão fica situada no Paço Municipal, S/N, Centro Histórico - CEP
                    49100-071
                    São Cristóvão, Sergipe - Brasil</p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6">
                <x-title img="" h2="Contatos" p="Saiba como entrar em contato com nossa Prefeitura"></x-title>
                <p class="dark:text-white text">
                    Fone Fixo - (79) 3045-4910</p>
                <p class="dark:text-white text">
                    Endereço eletrônico: <a class="text-sm text-blue-400 underline"
                        href="https://www.saocristovao.se.gov.br">https://www.saocristovao.se.gov.br</a></p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between xl:mb-10">
                <x-title img="" h2="Galeria" p="Galeria dos prefeitos de São Cristóvão"></x-title>

            </div>
        </div>

</x-layout.municipio>
