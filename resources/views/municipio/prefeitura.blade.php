<x-layout.municipio bg="bg-prefeitura">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:max-w-full">
        <!-- SECTION PROFILE -->
        <x-municipio.profile img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeitura.jpg"
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
        <div class="sm:px-4">
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6 lg:min-w-full">
                <x-title img="" h2="Endereço" p="Saiba onde encontrar nossa Prefeitura"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl text dark:text-white first-letter:text-5xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left">
                    A Prefeitura Municipal de São Cristóvão fica situada no Paço Municipal, S/N, Centro Histórico - CEP
                    49100-071
                    São Cristóvão, Sergipe - Brasil</p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between mb-6 lg:min-w-full">
                <x-title img="" h2="Contatos" p="Saiba como entrar em contato com nossa Prefeitura"></x-title>
                <p class="dark:text-white text sm:text-xs">
                    Fone Fixo - (79) 3045-4910</p>
                <p class="dark:text-white text sm:text-xs">
                    Endereço eletrônico: <a class="text-sm text-blue-400 underline sm:text-xs"
                        href="https://www.saocristovao.se.gov.br">https://www.saocristovao.se.gov.br</a></p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between xl:mb-10 lg:min-w-full">
                <x-title img="" h2="Galeria" p="Galeria dos prefeitos de São Cristóvão"></x-title>

                <div class="flex flex-wrap items-center justify-center w-full gap-6">
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/marcos-santana.jpeg"
                        name="Marcos Santana" mandato="2017 - 2024"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jorge-eduardo.jpeg"
                        name="Jorge Eduardo" mandato="2015 - 2016"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/rivanda-varias.jpeg"
                        name="Rivanda Varias" mandato="2013 - 2015"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/alexander-rocha.jpeg"
                        name="Alexander Rocha" mandato="2007 - 2012"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/carlos-augusto.jpeg"
                        name="Carlos Augusto" mandato="2008"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jose-correia.jpeg"
                        name="José Correia" mandato="2005 - 2007"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/armando-batalha.jpeg"
                        name="Armando Batalha" mandato="1997 - 2004"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/isaias-almeida.jpeg"
                        name="Isaias Almeida" mandato="1993 - 1996"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/horacio-souza.jpeg"
                        name="Horácio de Souza" mandato="1983 - 1988"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jailton-vieira.jpeg"
                        name="Jailton Vieira" mandato="1982"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/lauro-rocha.jpeg"
                        name="Lauro Rocha" mandato="1977 - 1982 / 1989 - 1992"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/cledivaldo-oliveira.jpeg"
                        name="Cledivlado de Oliveira" mandato="1973 - 1976"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/paulo-correia.jpeg"
                        name="Paulo Correia" mandato="1971 - 1972"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/izaias-gileno.jpeg"
                        name="Izaías Gileno" mandato="1967 - 1970"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/romualdo-prado.jpeg"
                        name="Romualdo Prado" mandato="1963 - 1966"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/elysio-carmelo.jpeg"
                        name="Elysio Carmelo" mandato="1959 - 1962"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/deoclecio-vieira.jpeg"
                        name="Deoclécio Vieira" mandato="1955 - 1958"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/lourival-batista.jpeg"
                        name="Lourival Batista" mandato="1950 - 1954"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/mamades-fernandes.jpeg"
                        name="Mamades Fernandes" mandato="1946 - 1949"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/helio-amado.jpeg"
                        name="Hélio Amado" mandato="1945"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jose-pereira.jpeg"
                        name="José Pereira" mandato="1940 - 1945"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/antonio-silvio.jpeg"
                        name="Antônio Sílvio" mandato="1936 - 1939"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/pedro-montalvao.jpeg"
                        name="Pedro Montalvão" mandato="1935 - 1936"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/joao-baptista.jpeg"
                        name="João Baptista" mandato="1935"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/erundino-prado.jpeg"
                        name="Erundino Prado" mandato="1934"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/jose-vieira.jpeg"
                        name="José Vieira" mandato="1925 - 1930 / 1906 - 1910"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="José Góis" mandato="1926 - 1927"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Bathazar Mandarino" mandato="1925 - 1926"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Odilon Cardoso" mandato="1923 - 1924"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Manoel Bernadino" mandato="1922 - 1923"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/antonio-fontes.jpeg"
                        name="Antônio Fontes" mandato="1916 - 1922 / 1900 - 1905"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/messias-prado.jpeg"
                        name="Messias do Prado" mandato="1911 - 1915"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/generico.jpg"
                        name="Diniz Galvão" mandato="1912 - 1913"></x-municipio.card>
                    <x-municipio.card
                        bg="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/galeria/antonio-miguel.jpeg"
                        name="Antônio Miguel" mandato="1888 - 1900"></x-municipio.card>
                </div>
            </div>
        </div>

</x-layout.municipio>
