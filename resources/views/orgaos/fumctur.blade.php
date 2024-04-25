<x-layout.orgaos bg="bg-fumctur">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Fundação Municipal de Cultura e Turismo" sigla="FUMCTUR"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/fumctur.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Fundação Municipal de Cultura e Turismo"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Fundação Municipal de Cultura e Turismo – FUMCTUR tem por finalidade a execução das políticas
                    cultural e turística do Município, com ênfase no fomento, estímulo e proteção das manifestações
                    culturais, artísticas e históricas, e na promoção turística de São Cristóvão. Compete à FUMCTUR a
                    realização das seguintes atividades ou atribuições, sem prejuízo de outras legalmente previstas:
                </p>
                <ul class="flex flex-col gap-2 px-16 list-disc dark:text-white">
                    <li class="text-sm">Difusão e incentivo dos valores e das entidades culturais;</li>
                    <li class="text-sm">Orientação e estímulo à criatividade em instituições oficiais e
                        particulares;</li>
                    <li class="text-sm">Levantamento e Registro do acervo documental, bibliográfico e
                        cultural;</li>
                    <li class="text-sm">Conservação e preservação de monumentos Históricos, Artísticos,
                        Paisagísticos e Arqueológicos e
                        dos bens de natureza etnográfica;
                    </li>
                    <li class="text-sm">Promover a criação de Museus, Bibliotecas e Arquivos;</li>
                    <li class="text-sm">Coordenar os eventos e programas culturais promovidos pelo Poder
                        Público Municipal;</li>
                    <li class="text-sm">Firmar convênios, contratos, acordos ou ajustes com instituições
                        públicas ou privadas, nacionais
                        ou estrangeiras, visando à melhoria da execução ou do desempenho de suas atividades;</li>
                    <li class="text-sm">Exercer outras atividades ou atribuições correlatas, ou inerentes , no
                        âmbito da sua finalidade.
                    </li>
                </ul>

                <x-title img="" h2="Secretária" p="Secretária Municipal de Cultura e Turismo"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-5rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/paola.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Paola Rodrigues de Santana
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretária</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Paola Rodrigues de Santana é formada em Design Gráfico com pós-graduação em Comunicação Visual
                        pela Unifasc-Ba. Trabalhou na esfera governamental e na coordenação e planejamento de campanhas
                        eleitorais. Em São Cristóvão atuou como secretária municipal de Governo e Relações Comunitárias
                        (SEGOV) entre 2017 e 2020. No ano de 2017 foi a responsável pela retomada do Festival de Artes
                        de São Cristóvão, que estava sem realizar uma edição há 12 anos.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Fundação Municipal de Cultura e Turismo"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="cultura e turismo" />
                    @endforeach
                </div>

                <x-title img="" h2="Projetos"
                    p="Projetos da Fundação Municipal de Cultura e Turismo"></x-title>

                <div class="flex flex-col gap-4">
                    <x-banner href="{{ route('banners.leipaulogustavo') }}"
                        img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-lei-paulo-gustavo.png" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Fundação Municipal de Cultura e Turismo"
        address="Largo da Praça do São Francisco, S/N, Centro Histórico" horario="08:00 ás 14:00h"
        phone="(79) 3045-4937" cellphone="(79) 99877-2636" email="fumctur@saocristovao.se.gov.br" />
</x-layout.orgaos>
