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
                ]" :last="['nome' => 'Assistência Social', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Anexos" p="Editais e outros documentos Assistência Social"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/EDITAL_1_2022.pdf"
                    target="_blank">
                    Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/LISTA_FINAL_PARA_COMUNICACAO.pdf"
                    target="_blank">
                    Resultado Final
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/Resultado_do_Recurso_para_Comunicacao.pdf"
                    target="_blank">
                    Resultado do Recurso
            </li>

            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/EDITAL_01_2022_RESULTADO_PRELIMINAR.pdf"
                    target="_blank">
                    Resultado Preliminar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/EDITAL_01_2022_SEMAS.pdf"
                    target="_blank">
                    Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/1a_Lista_de_Convocacao_PSS_2022_-_SEMAS.pdf"
                    target="_blank">
                    1° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/2a_Lista_de_Convocacao_PSS_2022_-_SEMAS.pdf"
                    target="_blank">
                    2° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/3a_Lista_de_Convocacao_PSS_2022_-_SEMAS.pdf"
                    target="_blank">
                    3° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/4a_Lista_de_Convocacao_PSS_2022_-_SEMAS.pdf"
                    target="_blank">
                    4° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/5a_Lista_de_Convocacao_PSS_2022_-_SEMAS.pdf"
                    target="_blank">
                    5° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semas/6a_Lista_de_Convocacao_PSS_2022_-_SEMAS.pdf"
                    target="_blank">
                    6° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/7o_Convocacao_PSS_SEMAS.pdf"
                    target="_blank">
                    7° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/8o_Convocacao_PSS_SEMAS.pdf"
                    target="_blank">
                    8° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/9o_Convocacao_PSS_SEMAS.pdf"
                    target="_blank">
                    9° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/SEMAS/10o_Convocacao_PSS_SEMAS.pdf"
                    target="_blank">
                    10° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/11_Convocacao_PSS_SEMAS_Diario.pdf"
                    target="_blank">
                    11° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/12_Convocacao_PSS_SEMAS_1.pdf"
                    target="_blank">
                    12° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/13Convocação%20PSS%20SEMAS.pdf"
                    target="_blank">
                    13° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/14_Convocacao_PSS_SEMAS_Diario.pdf"
                    target="_blank">
                    14° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/15Convocacao_PSS_SEMAS_Diario.pdf"
                    target="_blank">
                    15° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/16Convocacao_PSS_SEMAS_Diario.pdf"
                    target="_blank">
                    16° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/17Convocacao_PSS_SEMAS_Diario.pdf"
                    target="_blank">
                    17° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/18_Convocacao_PSS_SEMAS_Educador_Social_2023.pdf"
                    target="_blank">
                    18° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/19_Convocacao_PSS_SEMAS_Educador_Social_2023_1.pdf"
                    target="_blank">
                    19° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/20_Convocacao_PSS_SEMAS_Educador_Social.pdf"
                    target="_blank">
                    20° Convocação Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMAS/21_Convocacao_PSS_SEMAS.pdf"
                    target="_blank">
                    21° Convocação Edital 1 2022
            </li>
        </ul>
    </div>
</x-layout>
