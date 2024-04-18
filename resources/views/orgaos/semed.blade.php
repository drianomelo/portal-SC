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
                    públicas de educação do município. Art. 71 do <a class="text-blue-500 "
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

                <x-title img="" h2="SAESE"
                    p="Números do Sistema de Avaliação da Educação Básica de Sergipe"></x-title>
                <table class="w-full sm:text-xs">
                    <thead>
                        <tr class="text-blue-900 bg-zinc-100 dark:bg-zinc-900">
                            <th class="p-2 border text text-start">Nível</th>
                            <th class="p-2 border text text-start">Caminho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="dark:text-white">
                            <td class="p-2 text-[11px] font-light border text">2º Ano Ensino Fundamental</td>
                            <td class="p-2 text-[11px] font-light border text">
                                <a href="https://saese.cesgranrio.org.br/devolutivas/regional/29/municipal/221"
                                    class="text-blue-400 ">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Ir para saese
                                </a>
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 text-[11px] font-light border text">5º Ano Ensino Fundamental</td>
                            <td class="p-2 text-[11px] font-light border text">
                                <a href="https://saese.cesgranrio.org.br/devolutivas/regional/29/municipal/221"
                                    class="text-blue-400 ">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Ir para saese
                                </a>
                            </td>
                        </tr>
                        <tr class="dark:text-white">
                            <td class="p-2 text-[11px] font-light border text">9º Ano Ensino Fundamental</td>
                            <td class="p-2 text-[11px] font-light border text">
                                <a href="https://saese.cesgranrio.org.br/devolutivas/regional/29/municipal/221"
                                    class="text-blue-400 ">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Ir para saese
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <x-title img="" h2="IDEB"
                    p="Números do Índice de Desenvolvimento da Educação Básica"></x-title>
                <table id="table_ideb_semed" class="w-full mt-3 sm:text-xs">
                    <thead>
                        <tr class="text-blue-900 bg-zinc-100 dark:bg-zinc-900">
                            <th class="p-2 border text text-start">Ano</th>
                            <th class="p-2 border text text-start">Nível</th>
                            <th class="p-2 border text text-start">Caminho</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados_ideb as $ideb)
                            <tr class="dark:text-white">
                                <td class="p-2 text-[11px] font-light border text">{{ $ideb[0] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $ideb[1] }}</td>
                                <td class="p-2 text-[11px] font-light border text">
                                    <a href="{{ $ideb[2] }}" class="text-blue-400 ">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i> Ir para QEdu
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th id="Ano">Ano</th>
                            <th id="Nível"></th>
                            <th class="hidden">Caminho</th>
                        </tr>
                    </tfoot>
                </table>

                <x-title img="" h2="Unidades de Educação"
                    p="Unidades de Educação da Secretaria Municipal da Educação"></x-title>
                <table id="table_unidades_semed" class="mt-3 sm:text-xs">
                    <thead>
                        <tr class="text-blue-900 bg-zinc-100 dark:bg-zinc-900">
                            <th class="p-2 border text text-start">Unidade de Ensino</th>
                            <th class="p-2 border text text-start">Endereço</th>
                            <th class="p-2 border text text-start">Região</th>
                            <th class="p-2 border text text-start">Diretor</th>
                            <th class="p-2 border text text-start">E-mail</th>
                            <th class="p-2 border text text-start">Turmas</th>
                            <th class="p-2 border text text-start">turno</th>
                            <th class="p-2 border text text-start">Contato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unidades as $unidade)
                            <tr class="dark:text-white">
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[0] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[1] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[2] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[3] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[4] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[5] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[6] }}</td>
                                <td class="p-2 text-[11px] font-light border text">{{ $unidade[7] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="hidden">Unidade de Ensino</th>
                            <th class="hidden">Endereço</th>
                            <th id="Região">Região</th>
                            <th class="hidden">Diretor</th>
                            <th class="hidden">E-mail</th>
                            <th class="hidden">Turmas</th>
                            <th class="hidden">turno</th>
                            <th class="hidden">Contato</th>
                        </tr>
                    </tfoot>
                </table>

                <x-title img="" h2="Âncoras" p="Calendário Letivo e Cardápio"></x-title>
                <div class="flex flex-col gap-6">
                    <x-orgaos.anexo
                        href="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/anexos/CALENDARIO.docx"
                        title="Calendário Letivo - 2024" desc="Calendário letivo para o ano de 2024"
                        icon="fa-calendar-days" />
                    <x-orgaos.anexo
                        href="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/anexos/CARDAPIO.docx"
                        title="Cardápio - 2024" desc="Cardápio qualitativo da alimentação escolar - 2024"
                        icon="fa-utensils" />
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

    @push('scripts')
        <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.5/datatables.min.js"></script>
        <script src="https://cdn.datatables.net/v/dt/dt-1.13.5/b-2.4.0/datatables.min.js"></script>
        <script
            src="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-1.13.5/b-2.4.0/b-html5-2.4.0/b-print-2.4.0/datatables.min.js">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        @vite('resources/js/datatables.js')
    @endpush
</x-layout.orgaos>
