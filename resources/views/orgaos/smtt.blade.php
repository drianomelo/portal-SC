<x-layout.orgaos bg="bg-smtt">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Superintêndencia Municipal de Trânsito e Transporte" sigla="SMTT"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/smtt.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Superintêndencia Municipal de Trânsito e Transporte"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    Promover a mobilidade urbana e segurança no trânsito através do desenvolvimento e gerenciamento
                    eficiente dos serviços de transporte público, estudos estatísticos, fiscalização e educação para o
                    trânsito. Tendo como valores; a transparência, ética, respeito, eficiência e o compromisso com a
                    população, com vistas a ser um órgão de excelência em trânsito a nível estadual. Serviços de
                    Transportes e Trânsito.
                </p>

                <x-title img="" h2="Superintendente"
                    p="Superintendente Municipal de Trânsito e Transporte"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-3rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/nilton.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Nilton José dos Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Superintendente</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Nilton José dos Santos - Graduado em História pela Universidade Federal de Sergipe (UFS),
                        Graduando em Enfermagem – Bacharelado, 8° período, também pela Universidade Federal de Sergipe
                        (UFS), Policial Militar desde 1998, possui curso de formação de Soldado, Cabo e Sargento pelo
                        Centro de Formação de Praças da Polícia Militar do Estado de Sergipe, possui curso de
                        capacitação de Diretos Humanos, aspectos jurídicos de abordagem policial, mulher vítima de
                        violência doméstica, curso de agente de trânsito, curso de educação para o trânsito para
                        profissionais de segurança pública, curso de combate de tráfico de seres humanos Pela Secretaria
                        Nacional de Segurança Pública. Trabalhou na cavalaria da Polícia, como diretor de Trânsito e
                        Transportes Públicos e atualmente atua como superintendente de trânsito e transporte do
                        município de São Cristóvão.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias"
                    p="Superintêndencia Municipal de Trânsito e Transporte"></x-title>

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

    <x-orgaos.modal name="Superintêndencia Municipal de Trânsito e Transporte"
        address="Rua 63, S/N – Conjunto Eduardo Gomes" horario="08:00 ás 14:00h" phone="(79) 3045-4923" cellphone=""
        email="smtt@saocristovao.se.gov.br" />
</x-layout.orgaos>
