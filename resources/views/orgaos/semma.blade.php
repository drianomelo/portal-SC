<x-layout.orgaos bg="bg-semma">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal do Meio Ambiente" sigla="SEMMA"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semma.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal do Meio Ambiente"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal do Meio Ambiente - SEMMA Integrante do Sistema Municipal de Meio Ambiente,
                    tem por competência prestar apoio e assistência direta ao Chefe do Poder Executivo na área de Meio
                    Ambiente no Município de São Cristóvão; coordenar, supervisionar e fiscalizar os planos, programas,
                    projetos e atividades de preservação, proteção, conservação, controle e de uso de recursos
                    ambientais no Município; participar, no que couber e quando solicitado, do planejamento de políticas
                    públicas do Município; elaborar as diretrizes da Política Municipal de Meio Ambiente, bem como
                    executar outras atividades correlatas ou do âmbito de sua competência, e as que lhe forem
                    regularmente conferidas ou determinadas. Art. 162 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretária" p="Secretária Municipal do Meio Ambiente"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-4rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/janine.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Janine Menezes de Oliveira
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Arquiteta e Urbanista</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Janine Menezes de Oliveira é Arquiteta e Urbanista, formada em 2002 pela Universidade
                        Tiradentes, com especialização em Gestão Ambiental (2006). Exerceu a função de servidora pública
                        na Administração Estadual de Meio Ambiente (2004-2022) com experiência em licenciamento,
                        monitoramento e fiscalização ambiental. Ocupou o cargo de Gerente de Licenciamento Ambiental
                        entre abril de 2015 e janeiro de 2019.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Secretaria Municipal do Meio Ambiente"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="meio ambiente" />
                    @endforeach
                </div>

                <x-title img="" h2="Projetos" p="Projetos da Secretaria Municipal do Meio Ambiente"></x-title>

                <div class="flex flex-col gap-4">
                    <x-banner href=""
                        img="https://www.saocristovao.se.gov.br/imagens/banners/bannerGuardaPet.jpeg" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal do Meio Ambiente"
        address="Largo da Praça do São Francisco, S/N, Centro Histórico" horario="08:00 ás 14:00h"
        phone="(79) 3045-4936" cellphone="(79) 99802-7403" email="semma@saocristovao.se.gov.br" />
</x-layout.orgaos>
