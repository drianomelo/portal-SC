<x-layout.municipio bg="bg-saocristovao">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:max-w-full">
        <!-- SECTION PROFILE -->
        <x-municipio.profile img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/saocristovao.jpg"
            title="São Cristóvão" subtitle="Cidade Mãe - Sergipe" :socials="[
                [
                    'url' =>
                        'https://www.google.com/maps/place/São+Cristóvão+-+SE/@-10.9688207,-37.2132195,11z/data=!3m1!4b1!4m6!3m5!1s0x71aa5fa29ce520b:0xfc9aeffb7b31b9b5!8m2!3d-11.0122334!4d-37.2059343!16zL20vMDZjX3dy?entry=ttu',
                    'icon' => 'fa-solid fa-location-dot',
                ],
            ]"
            linkButton="https://turismosaocristovao-se.com.br" nameButton="Visite-me" />

        <!-- SECTION DESCRIPITON -->
        <div class="sm:px-4">
            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col mb-6 justify-between lg:min-w-full">
                <x-title img="" h2="Sobre" p="Conheça a Cidade Mãe de Sergipe"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    São Cristóvão foi fundada em 1º de janeiro de 1590 pelo capitão português Cristóvão de Barros. Foi a
                    primeira cidade de Sergipe e a quarta surgida no Brasil, depois de Salvador, Rio de Janeiro e João
                    Pessoa. No período da fundação de São Cristóvão, Portugal estava sob domínio do Rei Felipe II, da
                    Espanha, durante a União Ibérica. Por isso mesmo, é possível observar a influência de ambos os
                    países na constituição urbana da cidade. A herança portuguesa pode ser notada no modelo de cidade,
                    com dois planos bem diferentes: a Cidade Alta, onde ficava a sede do poder civil e religioso, e a
                    Cidade Baixa, em que se localizavam o porto e as fábricas e vivia a população de baixa renda.</p>
            </div>

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col mb-6 justify-between xl:mb-10 lg:min-w-full">
                <x-title img="" h2="Cultura" p="Conheça sobre a cultura de São Cristóvão"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
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

            <div class="min-w-[1200px] mx-auto gap-4 flex flex-col justify-between xl:mb-10 lg:min-w-full">
                <x-title img="" h2="Referências" p="Anexos sobre a História da Cidade Mãe de Sergipe"></x-title>
                <div class="flex flex-col gap-6">
                    <x-municipio.anexo
                        href="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/anexos/cidade-mae-de-sergipe.docx"
                        title="Cidade Mãe de Sergipe"
                        desc="São Cristóvão foi fundada em 1º de janeiro de 1590 pelo capitão português Cristóvão de Barros. Foi a primeira cidade de Sergipe e a quarta surgida no Brasil, depois de Salvador, Rio de Janeiro e João Pessoa." />
                    <x-municipio.anexo
                        href="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/anexos/LOGRADOUROS-DE-SAO-CRISTOVAO.docx"
                        title="Logradouros de São Cristóvão"
                        desc="São Gonçalo - este nome remete ao nome de uma das fábricas existentes da cidade nas décadas de 1940, como a fábrica, se chamou também o nome da ladeira que descia para a mesma." />
                    <x-municipio.anexo
                        href="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/anexos/SAO-CRISTOVAO-E-SEUS-MONUMENTOS.docx"
                        title="São Cristóvão e seus Monumentos"
                        desc="Convento e Igreja de Santa Cruz; Convento e Igreja de Nossa Senhora do Carmo; Museu Histórico do Estado de Sergipe; Conjunto Carmelita; igrejas da Matriz de Nossa Senhora das Vitórias, da Ordem Terceira do Carmo (Igreja de Nosso Senhor dos Passos), de Nossa Senhora do Amparo, de São Francisco e de Nossa Senhora do Rosário dos Homens Pretos; praças da Bandeira,  de São Francisco, e do Senhor dos Passos (Largo do Carmo); ladeiras de Epaminondas (Beco da Poesia), do Porto da Banca, e do Açougue; Beco do Amparo; Largo do Rosário; e Engenho Poxim e Capela de Nossa Senhora da Conceição, entre outros." />
                </div>
            </div>
        </div>
    </section>

</x-layout.municipio>
