<x-layout.orgaos bg="bg-semsurb">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal de Serviços Urbanos" sigla="SEMSURB"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semsurb.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal de Serviços Urbanos"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal de Serviços Urbanos – SEMSURB tem por competência prestar apoio e assistência
                    direta e imediata ao Chefe do Poder Executivo quanto à execução de serviços urbanos e
                    operacionalização de ações de desenvolvimento regional; acompanhar e supervisionar atividades e/ou
                    serviços de limpeza e conservação de logradouros públicos, e também coleta regular de lixo;
                    acompanhar e supervisionar atividades e/ou serviços de limpeza e conservação dos mercados
                    municipais, campos de futebol e cemitérios; supervisionar as atividades de vigilância do patrimônio
                    público; acompanhar e supervisionar as atividades e/ou serviços de iluminação pública;
                    disponibilizar serviços públicos essenciais de forma centralizada e executar outras atividades
                    correlatas ou do âmbito de sua competência, e as que lhe forem regularmente conferidas ou
                    determinadas. Art. 154 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário" p="Secretário Municipal do Meio Ambiente"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-0rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/genivaldo.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Genivaldo Silva dos Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretário</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Genivaldo Silva dos Santos (Secretário Municipal de Serviços Urbanos) Ex-funcionário aposentado
                        da Petrobrás atuava como comprador e empresário. Desde Janeiro de 2017, atua como secretário
                        municipal de serviços urbanos.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Secretaria Municipal de Serviços Urbanos"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="serviços urbanos" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal de Serviços Urbanos" address="Praça Getúlio Vargas, 18 - Centro"
        horario="08:00 ás 14:00h" phone="(79) 3045-4935" cellphone="(79) 99690-0841"
        email="gabinete.semsurb@saocristovao.se.gov.br" />
</x-layout.orgaos>
