<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Edital OSC', 'url' => '']" />

            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Anexos" p="Anexos do Edital OSC"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/osc/EDITAL%20FOMENTO%202024.pdf">
                    Edital 1 2024
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/osc/Resolu%C3%A7%C3%A3o%20N%C2%BA%2007.2023%20Comiss%C3%A3o%20da%20Sele%C3%A7%C3%A3o%20e%20Acompanhamento.pdf">
                    Comissão de Seleção e Acompanhamento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/editalOSC/EDITAL_01-2022.pdf">
                    Edital 1 2022
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/editalOSC/resultado_preliminar_edital_001.pdf">
                    Resultado Preliminar Edital 1 2022
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/editalOSC/Resultado_final_e_homologacao.pdf">
                    Resultado Final Edital 1 2022
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/editalOSC/Convocacao_Edital_001-2022.pdf">
                    1º Edital de Convocação
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://www.saocristovao.se.gov.br/arquivos/edital_02_2023.pdf">
                    Edital N° 02/2023
                </a>
            </li>
        </ul>
    </div>
</x-layout>
