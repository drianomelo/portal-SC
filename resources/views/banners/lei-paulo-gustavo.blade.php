<x-layout>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%] sm:lg:w-[140%] sm:bg-home-sm">
        </section>

        <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-3">
            <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
                <div class="">
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Lei Paulo Gustavo', 'url' => '']" />

                </div>
                <a href="{{ route('orgaos.fumctur') }}"
                    class="px-4 py-2 font-semibold text-white bg-yellow-400 rounded-md shadow-md outline-none tex-sm text">Contatos
                </a>
            </div>
        </div>

        <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3">
            <x-title img="" h2="Sobre" p="Sobre a Lei Paulo Gustavo"></x-title>
            <div class="mb-6">
                <p
                    class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Lei Paulo Gustavo é um apoio essencial para a cultura, artistas, técnicos e trabalhadores do setor
                    superarem os efeitos de dois anos da pandemia do Covid-19. A lei injetará R$3,8 bilhões para o
                    fomento e
                    apoio das expressões culturais e manifestações artísticas em todo o Brasil. O recurso é do próprio
                    setor
                    cultural, reinvestindo valores do Fundo Nacional de Cultura e do Fundo Setorial do Audiovisual
                    (FSA).
                </p>
            </div>

            <x-title img="" h2="Em São Cristóvão" p="A Lei Paulo Gustavo em São Cristóvão"></x-title>
            <div class="mb-6">
                <p
                    class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    O município de São Cristóvão, Cidade Mãe de Sergipe, receberá, em previsão, o montante total de
                    R$789.604,11, distribuídos da seguinte forma:
                    Art. 6º -
                    I Apoio a Produções Audiovisuais: R$418.332,26
                    II Apoio a salas de cinema: R$95.621,06
                    III Capacitação, formação e qualificação no audiovisual; apoio a cineclubes e a festivais e mostras:
                    R$48.007,93
                    Art. 8º - Apoio às demais áreas da cultura que não o audiovisual: R$227.642,86
                    Conforme Decreto de Lei nº 11.525/23, Art. 17, o município pode utilizar até 05 (cinco) por cento
                    dos
                    recursos para operacionalização administrativa referente à Lei.
                </p>
            </div>

            <x-title img="" h2="Atualmente" p="Atual situação da Lei Paulo Gustavo em São Cristóvão"></x-title>
            <div class="mb-6">
                <p
                    class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    Em 30 de Novembro de 2023 a Fundação Municipal de Cultura e Turismo ‘João Bebe Água’ (FUMCTUR)
                    divulgou
                    a relação final de propostas selecionadas e suplentes para aplicação da Lei Paulo Gustavo em São
                    Cristóvão.

                    Em caso de dúvidas ou necessidade de suporte, não hesite em entrar em contato por meio do e-mail
                    fumctur@saocristovao.se.gov.br ou pelo WhatsApp, no número (79) 9 8131-5293.
                </p>
            </div>

            <x-title img="" h2="Anexos" p="Editais e Cartilhas da Lei Paulo Gustavo"></x-title>
            <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href=" https://drive.google.com/file/d/1HYrahExol_LmRD0DbHm7tmaYv_pWDfkF/view?usp=sharing">EDITAL
                        Nº002/2023: PUBLICAÇÃO FINAL DE PARECERISTAS SELECIONADOS </a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href=" https://drive.google.com/file/d/1h8Jz9FoOEYt0ZMyC3qPbuQAcwhoxq-t7/view?usp=sharing">EDITAL
                        N°002/2023: CHAMAMENTO PÚBLICO PARA SELEÇÃO DE PARECERISTAS </a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400" href=" https://www.gov.br/cultura/pt-br/assuntos/lei-paulo-gustavo">Site
                        Oficial do Ministério da
                        Cultura
                        – Lei Paulo Gustavo </a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://www.gov.br/cultura/pt-br/assuntos/lei-paulo-gustavo/central-de-conteudo/cartilhaweb-lpg1505.pdf">
                        Cartilha da Lei Paulo Gustavo desenvolvido pelo Ministério da Cultura </a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://drive.google.com/file/d/10M203_txvE3d1y1f8CcK6Z6ebFOV-ri2/view?usp=sharing"
                        target="_blank">CARTILHA SIMPLIFICADA PARA OS EDITAIS N°003/2023 E Nº004/2023</a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://drive.google.com/file/d/1G_tB8CqLdWn4kQV6iHcrS9v9D6x2KwKH/view"
                        target="_blank">EDITAL
                        N°002/2023: RELAÇÃO DE PARECERISTAS PRÉ-SELECIONADOS</a>
                </li>

                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://drive.google.com/file/d/10apuP-bCX2HZwGSNbj6gHPR0KvdKrb9C/view?usp=sharing"
                        target="_blank">EDITAL N° 003/2023: CHAMAMENTO PÚBLICO PARA SELEÇÃO DE PROJETOS AUDIOVISUAIS</a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://drive.google.com/file/d/1-WmEyvs29m3EF_RxqoXCiXtMKrc6EvRK/view?usp=sharing"
                        target="_blank">EDITAL N°004/2023: CHAMAMENTO PÚBLICO PARA SELEÇÃO DE PROJETOS ARTÍSTICOS E
                        CULTURAIS</a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://drive.google.com/file/d/1RdfA_eogb5uDF6Wuq8ZDxxf7KnaOszZp/view"
                        target="_blank">EDITAL Nº
                        003/2023 (AUDIOVISUAL): RELAÇÃO FINAL DE PROJETOS PRÉ-SELECIONADOS E SUPLENTES</a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://drive.google.com/file/d/1IcvQoJtYFJ8YudJdGmsdNtWRSdTy2aq8/view?usp=sharing"
                        target="_blank">EDITAL Nº 004/2023 (DEMAIS ÁREAS): RELAÇÃO FINAL DE PROJETOS PRÉ-SELECIONADOS E
                        SUPLENTEEDITAL Nº 004/2023 (DEMAIS ÁREAS): RELAÇÃO FINAL DE PROJETOS PRÉ-SELECIONADOS E
                        SUPLENTES</a>
                </li>
            </ul>

            <x-title img="" h2="Leis e Decretos" p="Leis e Decretos da Lei Paulo Gustavo"></x-title>
            <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
                <li class="text-justify list-disc">
                    <a class="text-blue-400" href="https://www.planalto.gov.br/ccivil_03/leis/lcp/lcp195.htm"> Lei
                        Complementar nº 195/2022 (Lei
                        Paulo
                        Gustavo)</a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="http://www.planalto.gov.br/ccivil_03/_ato2023-2026/2023/decreto/D11453.htm"> Decreto nº
                        11.453
                        (Novos mecanismos de fomento do sistema de financiamento à cultura) </a>
                </li>
                <li class="text-justify list-disc">
                    <a class="text-blue-400"
                        href="https://www.in.gov.br/web/dou/-/decreto-n-11.525-de-11-de-maio-de-2023-482720690"> Decreto
                        nº
                        11.525, de 11 de maio de 2023 (decreto de regulamentação da Lei Paulo Gustavo) </a>
                </li>

            </ul>
        </div>
</x-layout>
