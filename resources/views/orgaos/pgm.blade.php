<x-layout.orgaos bg="bg-pgm">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Procuradoria Geral do Município" sigla="PGM"
            img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/pgm.png" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências" p="Competências da Procuradoria Geral do Município"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Procuradoria Geral do Município – PGM tem por competência as atividades de consultoria e
                    assessoramento jurídico da Administração Pública direta e indireta, bem como, privativamente, a
                    representação judicial do Município, a inscrição e a cobrança judicial e extrajudicial da dívida
                    ativa e o processamento de todos os feitos de interesse da administração municipal; emitir, com
                    exclusividade, pareceres em todos os processos administrativos dos órgãos e entidades municipais e
                    executar outras atividades correlatas, do âmbito de sua competência definidas por lei ou que lhe
                    foram regularmente delegadas. Art. 20 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Procurador" p="Procurador Geral do Municipal"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-0rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/robson.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">José Robson Almeida Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Procurador Geral</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat optio iure doloribus a odit
                        cupiditate vero dolores deserunt velit maiores doloremque provident, deleniti totam distinctio
                        reiciendis quasi quibusdam excepturi corporis! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Architecto similique minima eum beatae laborum in impedit deserunt id est
                        blanditiis accusamus recusandae itaque, dolorem sed? Tempore temporibus placeat illo ipsa.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias" p="Procuradoria Geral do Município"></x-title>

                <div class="flex flex-col gap-2">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="procuradoria" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Procuradoria Geral do Município" address="Rua Messias Prado, 65, Centro"
        horario="08:00 ás 14:00h" phone="(79) 3045-4931" cellphone="(79) 99689-8138"
        email="procuradoria@saocristovao.se.gov.br" />
</x-layout.orgaos>
