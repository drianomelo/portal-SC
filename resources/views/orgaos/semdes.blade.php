<x-layout.orgaos bg="bg-semdes">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal de Defesa Social" sigla="SEMDES"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semdes.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal de Defesa Social"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal de Defesa Social – SEMDES, tem por competência propor e conduzir a a política
                    de defesa social do Município com ênfase na prevenção da violência e realização de programas
                    sociais, promover a gestão dos mecanismos de proteção do patrimônio público municipal e de seus
                    usuários, planejar, acompanhar e executar as ações de defesa social, promover, apoiar e divulgar
                    normas e diretrizes de direitos humanos, visando à garantia efetiva dos direitos do cidadão, atuar
                    na política de prevenção e combate às drogas, através de agentes multiplicadores, na orientação
                    escolar, na elaboração de estatísticas e sugestões pertinentes, tudo em conformidade com as
                    disposições da Legislação Federal, promover a vigilância dos bens culturais e das áreas de
                    preservação do patrimônio natural do Município, na defesa das mananciais, da fauna, da flora e meio
                    ambiente em geral, coordenar as ações da Guarda Civil Municipal de São Cristóvão e executar outras
                    atividades correlatas ou do âmbito de sua competência, e as que lhe forem regularmente conferidas ou
                    determinadas. Art. 189 do Projeto de Lei Complementar Nº 69/2022. Art. 189 do <a
                        class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário" p="Secretário Municipal da Defesa Social"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-2rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/edmilson.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Edmilson Santos Brito
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Defensor Social</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Edmilson Santos Brito é advogado, jornalista e radialista. Natural de Nossa Senhora das Dores,
                        vive no município de São Cristóvão desde 1988 tendo assumido vários cargos públicos no município
                        como o de secretário municipal de saúde. Trabalhou ainda da FUNCAP – Fundação de Cultura e Arte
                        Aperipê, na Casa Civil do Governo de Sergipe e é assessor de comunicação da Arquidiocese de
                        Aracaju.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Secretaria Municipal de Defesa Social"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="trânsito" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal de Defesa Social" address="Rua 24 de Outubro, 1089, 49100-153"
        horario="08:00 ás 14:00h" phone="(79) 3045-4924" cellphone="(79) 99657-3471"
        email="semdes@saocristovao.se.gov.br" />
</x-layout.orgaos>
