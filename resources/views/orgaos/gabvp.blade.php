<x-layout.orgaos bg="bg-gapre">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Gabinete do Vice-Prefeito" sigla="GABVP" :img="asset('img/orgaos/gapre.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências" p="Competências do Gabinete do Vice-Prefeito"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    O Gabinete do Vice-Prefeito - GABVP tem por competência prestar apoio e assistência direta e
                    imediata ao Vice-Prefeito Municipal, essencialmente quanto ao trato de questões, providências e
                    iniciativas de seu expediente de trabalho; à recepção, estudo, triagem e encaminhamento dos
                    expedientes enviados ao Vice-Prefeito Municipal; ao assessoramento do Vice-Prefeito Municipal no
                    desempenho de suas atribuições legais; executar outras atividades correlatas ou do âmbito de sua
                    competência, e as que lhe forem regularmente conferidas ou determinadas. Art. 54 do <a
                        class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Vice-Prefeito" p="Vice-Prefeito de São Cristóvão"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-2rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/GABVP.JPG)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Paulo Roberto de Santana
                                Júnior
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Vice-Prefeito</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Paulo Roberto de Santana Júnior, Paulo Júnior, exerceu por dois mandatos o cargo de vereador,
                        ocupando, ainda, a Presidência da Câmara. Filho do ex-Vereador Paulinho dos Correios e de dona
                        Edelzita Cardoso, é sancristovense, servidor público do Estado,e ocupou por quatro meses a
                        Secretaria do Meio Ambiente em 2011. Bacharel em Direito, é também pós-graduando em Gestão e
                        Direito Municipal.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <x-orgaos.modal name="Gabinete do Vice-Prefeito"
        address="Largo da Praça do São Francisco, S/N, Centro – Paço Municipal" horario="08:00 ás 14:00h"
        phone="(79) 3045-4910" cellphone="" email="" />
</x-layout.orgaos>
