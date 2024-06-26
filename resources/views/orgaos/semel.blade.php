<x-layout.orgaos bg="bg-semel">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal do Esporte e Lazer" sigla="SEMEL"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semel.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal do Esporte e Lazer"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretária Municipal do Esportes e Lazer – SEMEL é responsável por planejar, organizar, coordenar,
                    orientar, executar, controlar e fiscalizar as atividades relativas ao desporto e ao lazer;
                    pesquisar, orientar, apoiar e desenvolver a educação física, o desporto, a recreação e o lazer,
                    estimulando essas práticas com vistas à expansão potencial existente; administrar, controlar a
                    utilização e zelar pelas praças esportivas do Município; gerir a infraestrutura e proteger o
                    patrimônio desportivo; coordenar os agentes envolvidos no desenvolvimento de práticas esportivas
                    formais e não formais no Município; organizar campeonatos, torneios, competições e encontros
                    regionais esportivos de interesse público; propor e gerir convênios com órgãos, entidades e
                    municípios, em atividades relativas ao desporto e ao lazer; preparar calendários, programas e guias
                    esportivos e de lazer, além de outras atividades correlatas ou do âmbito de sua competência que lhe
                    forem regularmente conferidas ou determinadas. Art. 183 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário" p="Secretário Municipal de Esporte e Lazer"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-1rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/klewerton.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Klewerton José Siqueira
                                Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretário</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Klewerton José Siqueira Santos, bacharelando em Gestão Pública, iniciou sua vida pública na
                        Secretaria de Estado da Assistência Social em 1999, como Gerente de Frota até 2009, Diretor de
                        Licitações Prefeitura Municipal de Nossa Senhora do Socorro de 2009 a 2010, Secretário Municipal
                        de Transportes de Nossa Senhora do Socorro de 2010 à 2015, em 2015 acumulou a função também como
                        Secretário de Serviços Urbanos de Socorro, 2016 Secretário de Governo Nossa Senhora do Socorro,
                        Secretário Municipal São Cristóvão, 2017. Atualmente trabalhava no Gabinete do Senador Rogério
                        Carvalho.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Secretaria Municipal do Esporte e Lazer"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="esporte" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal do Esporte e Lazer"
        address="Largo da Praça do São Francisco, S/N, Centro Histórico" horario="08:00 ás 14:00h"
        phone="(79) 3045-4910" cellphone="" email="semel@saocristovao.se.gov.br" />
</x-layout.orgaos>
