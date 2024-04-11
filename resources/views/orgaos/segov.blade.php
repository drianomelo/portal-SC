<x-layout.orgaos bg="bg-segov">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal de Governo e Gestão" sigla="SEGOV"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/segov.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal de Governo e Gestão"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal de Governo e Gestão – SEGOV, tem por competência coordenar a execução da
                    política de administração de recursos humanos, supervisionar a realização de compras e aquisições de
                    bens e serviços de forma centralizada, coordenar o controle de movimentação de material e patrimônio
                    do município, prestar apoio e assistência direta e imediata ao Chefe do Poder Executivo quanto às
                    atividades de articulação institucional com órgãos e entidades da Administração Pública Municipal,
                    Estadual e Federal e com outras instituições; sistematizar a captação e gerenciamento de recursos
                    extra tributários, por meio do recebimento de repassesa fundo perdido e financiamentos; executar
                    atividades e serviços de articulação política com o Poder Legislativo; supervisionar a elaboração,
                    redação e recomposição e de proposições legislativas de interesse do Poder Executivo, bem como os
                    decretos e atos normativos do Prefeito Municipal; efetuar o controle e o registro dos atos oficiais
                    do Prefeito Municipal; desempenhar a coordenação geral das ações governamentais dos diversos órgãos
                    e entidades municipais; executar todas as atividades correlatas que lhe forem regularmente
                    delegadas. Art. 34 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário" p="Secretário Municipal de Governo e Gestão"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-4rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/edson.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Edson Fontes dos Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretário</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Edson Fontes dos Santos é bacharel em Ciências Contábeis – FANESE, pós-graduado em direito
                        constitucional e controle externo – UNIT, funcionário público aposentado pela SEFAZ-SE, esteve a
                        disposição do Tribunal de Contas do Estado pelo período aproximado de 8 anos na função de
                        técnico de controle externo. No município de São Cristóvão é ex-vereador, ex-controlador geral e
                        ex-secretário chefe de assuntos parlamentares.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Secretaria Municipal de Governo e Gestão"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="governo" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal de Governo e Gestão"
        address="Largo da Praça do São Francisco, S/N, Centro Histórico" horario="08:00 ás 14:00h"
        phone="(79) 3045-4938" cellphone="(79) 99815-7116" email="segov@saocristovao.se.gov.br" />
</x-layout.orgaos>
