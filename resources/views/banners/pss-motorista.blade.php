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
                    <x-caminho :caminhos="[
                        ['nome' => 'Início', 'url' => '/'],
                        ['nome' => 'Banners', 'url' => '/banners'],
                        ['nome' => 'Concursos e Seleções', 'url' => '/banners/concursos-selecoes'],
                        ['nome' => 'Seleções', 'url' => '/banners/concursos-selecoes/pss'],
                    ]" :last="['nome' => 'Motorista Transporte Escolar', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Anexos" p="Editais e outros documentos Motorista Transporte Escolar"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/EDITAL_PSS_2022.pdf"
                    target="_blank">
                    Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Edital02PSS.pdf"
                    target="_blank">
                    Edital 2 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Edital03PSS.pdf"
                    target="_blank">
                    Edital 3 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Edital04PSS.pdf"
                    target="_blank">
                    Edital 4 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Declaracao_de_Vinculo.pdf"
                    target="_blank">
                    Declaração de Vínculo
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Formulario_de_Inscricao.pdf"
                    target="_blank">
                    Formulário de Inscrição
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Formulario_para_Recurso.pdf"
                    target="_blank">
                    Formulário para Recurso
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Resultado_Provisorio_-_Motorista.pdf"
                    target="_blank">
                    Resultado Provisório - Motorista
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Resultado_Provisorio_-_Motorista_de_transporte_escolar.pdf"
                    target="_blank">
                    Resultado Provisório - Motorista de Transporte Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Resultado_DEFINITIVO_-_Motorista.pdf"
                    target="_blank">
                    Resultado Definitivo - Motorista
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/Resultado_DEFINITIVO_-_Motorista_de_transporte_escolar.pdf"
                    target="_blank">
                    Resultado Definitivo - Motorista de Transporte Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/1o_EDITAL_DE_CONVOCACAO.pdf"
                    target="_blank">
                    1º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/2o_EDITAL_DE_CONVOCACAO.pdf"
                    target="_blank">
                    2º Edital de Convocação
            </li>

            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/3o_EDITAL_DE_CONVOCACAO.pdf"
                    target="_blank">
                    3º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/4o_EDITAL_DE_CONVOCACAO.pdf"
                    target="_blank">
                    4º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/motorista/5o_EDITAL_DE_CONVOCACAO.pdf"
                    target="_blank">
                    5º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/6o_EDITAL_DE_CONVOCACAO_-_Diario_Oficial.pdf"
                    target="_blank">
                    6º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/7o_EDITAL_DE_CONVOCACAO_PSS_01-2022.pdf"
                    target="_blank">
                    7º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/8o_EDITAL_DE_CONVOCACAO_PSS_01-2022.pdf"
                    target="_blank">
                    8º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/9o_EDITAL_DE_CONVOCACAO_PSS_01-2022.pdf"
                    target="_blank">
                    9º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/10o_EDITAL_DE_CONVOCACAO_PSS_01-2022.pdf"
                    target="_blank">
                    10º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/11o_EDITAL_DE_CONVOCACAO_PSS_01-2022.pdf"
                    target="_blank">
                    11º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/12o_EDITAL_DE_CONVOCACAO_PSS_01-2022.pdf"
                    target="_blank">
                    12º Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/13o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_DE_TRANSPORTE_ESCOLAR_PSS_01-2022.pdf"
                    target="_blank">
                    13ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/15o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_DE_TRANSPORTE_ESCOLAR_PSS_01-2022.pdf"
                    target="_blank">
                    15ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/16o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_PSS_01-2022.pdf"
                    target="_blank">
                    16ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/17o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_cat._A_e_MOTORISTA_DE_TRANSPORTE_ESCOLAR_PSS_01-2022.pdf"
                    target="_blank">
                    17ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/18o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_cat._A.pdf"
                    target="_blank">
                    18ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/19o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_DE_TRANSPORTE_ESCOLAR_PSS_01-2022.pdf"
                    target="_blank">
                    19ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/20o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_DE_TRANSPORTE_ESCOLAR_PSS_01-2022.pdf"
                    target="_blank">
                    20ª Edital de Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/motorista/21o_EDITAL_DE_CONVOCACAO_-_MOTORISTA_DE_TRANSPORTE_ESCOLAR_PSS_01-2022_1.pdf"
                    target="_blank">
                    21ª Edital de Convocação
            </li>
        </ul>
    </div>
</x-layout>
