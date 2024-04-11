<x-layout.orgaos bg="bg-semed">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal da Educação" sigla="SEMED"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semed.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências" p="Competências da Secretaria Municipal da Educação"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal da Educação – SEMED Integra a Administração Direta do Poder Executivo
                    Municipal e tem por finalidade prestar apoio e assistência direta e imediata ao Chefe do Poder
                    Executivo na área de Educação, bem como formular, coordenar, implementar e avaliar as políticas
                    públicas de educação do município. Art. 71 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretária" p="Secretária Municipal da Educação"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-3rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/deise.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Deise Maria Barroso
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Pedagoga</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Deise Maria Barroso - Licenciada em Pedagogia desde o ano de 2002 pela Faculdade Pio Décimo e
                        pós-graduada em gestão escolar. Também possui formação em História, licenciatura plena.
                        Professora da Rede Estadual de Ensino desde o ano de 2000. Professora da Rede Municipal de
                        Ensino desde 2002. Esteve à frente da diretoria pedagógica da Secretaria Municipal de Educação
                        de São Cristóvão e desde junho de 2022 atua como secretária da pasta.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Secretaria Municipal da Assistência Social"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="educação" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal da Educação" address="Rua Messias Prado, 79, Centro"
        horario="08:00 ás 14:00h" phone="(79) 3045-4939" cellphone="" email="educacao@saocristovao.se.gov.br" />
</x-layout.orgaos>
