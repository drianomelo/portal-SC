<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[
                    ['nome' => 'Início', 'url' => '/'],
                    ['nome' => 'Banners', 'url' => '/banners'],
                    ['nome' => 'Concursos e Seleções', 'url' => '/banners/concursos-selecoes'],
                    ['nome' => 'Seleções', 'url' => '/banners/concursos-selecoes/pss'],
                ]" :last="['nome' => 'Bolsistas', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Anexos" p="Editais e outros documentos Bolsistas"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/alfabetiza_pra_valer/resultado_final_sao_cristovao_2024-03.pdf"
                    target="_blank">RESULTADO FINAL 2024</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/BOLSISTAS/resultado_preliminar_sao_cristovao_2024-03-06.pdf"
                    target="_blank"> RESULTADO PRELIMINAR 2024 - PROCESSO SELETIVO PARA BOLSISTAS DO PROGRAMA
                    ALFABETIZAR PRA VALER </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/alfabetiza_pra_valer/edital_publicado_do_21_02_2024.pdf"
                    target="_blank" rel="noopener noreferrer">EDITAL Nº 02/2024</a>
            </li>
        </ul>
    </div>
</x-layout>
