<x-layout.municipio>

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-municipio.profile
            img="https://conteudo.imguol.com.br/c/entretenimento/3b/2021/10/01/praca-sao-francisco-em-sao-cristovao-sergipe-1633111234737_v2_1x1.jpg"
            title="São Cristóvão" subtitle="Cidade Mãe - Sergipe" :socials="[
                [
                    'url' =>
                        'https://www.google.com/maps/place/São+Cristóvão+-+SE/@-10.9688207,-37.2132195,11z/data=!3m1!4b1!4m6!3m5!1s0x71aa5fa29ce520b:0xfc9aeffb7b31b9b5!8m2!3d-11.0122334!4d-37.2059343!16zL20vMDZjX3dy?entry=ttu',
                    'icon' => 'fa-solid fa-location-dot',
                ],
            ]"
            linkButton="https://turismosaocristovao-se.com.br" nameButton="Visite-me" />

        <!-- SECTION DESCRIPITON -->
        <div>
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col mb-6 justify-between ">
                <x-title img="" h2="Sobre" p="Conheça a Cidade Mãe de Sergipe"></x-title>
                <p
                    class="mb-6 dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    Berço do nosso estado, São Cristóvão é a primeira capital de Sergipe e quarta cidade mais antiga do
                    país, atrás apenas de Salvador, Rio De Janeiro e João Pessoa, por isso, é carinhosamente conhecida
                    como
                    cidade mãe de Sergipe.

                    A 23 km de Aracaju e com população de aproximadamente 80 mil habitantes, São Cristóvão é um pedaço
                    vivo
                    da história do nosso país, com diversas construções sendo patrimônios históricos tombados pelo IPHAN
                    e
                    carregando o título de Patrimônio da Humanidade concedido pela UNESCO. A cidade também se destaca
                    pelas
                    manifestações religiosas e folclóricas que mantém vivas até hoje, pelas cores do artesanato e
                    sabores da
                    gastronomia que encantam os olhos e o paladar, e pelas belezas naturais privilegiadas, sendo banhada
                    pelos rios Paramopama, Vaza Barris e Poxim.</p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between ">
                <x-title img="" h2="Cultura" p="Conheça sobre a cultura de São Cristóvão"></x-title>
                <p
                    class="dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    São Cristóvão é berço da cultura sergipana e se destaca pela diversidade artística. Música, artes
                    plásticas, artesanato, teatro e outras manifestações estão presentes na cidade, que é considerada um
                    celeiro de artistas e mestres da cultura popular. E para celebrar essa riqueza cultural, todos os
                    anos, o município se torna o palco de um dos maiores eventos de arte do país, o Festival de Artes de
                    São Cristóvão (FASC), com mais de 50 anos de história. Desde então, 37 edições já foram realizadas,
                    com uma vasta programação que inclui cursos, seminários, oficinas, palestras, apresentações
                    musicais, concertos, exposições, espetáculos de dança e teatro acontece, enquanto grupos culturais
                    se apresentam pelas ruas do Centro Histórico que, durante o evento, ficam lotadas com milhares de
                    pessoas de todo o país. Além do FASC, São Cristóvão é palco de outros eventos tradicionais como o
                    Carnaval dos Carnavais e o São João da Tradição.</p>
            </div>
        </div>
    </section>

</x-layout.municipio>
