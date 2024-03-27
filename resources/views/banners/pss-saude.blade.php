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
                    ]" :last="['nome' => 'Profissionais de Saúde', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Anexos" p="Editais e outros documentos Profissionais de Saúde"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/EDITAL_1_2022.pdf"
                    target="_blank">
                    Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/ERRATA_EDITAL_1_2022.pdf"
                    target="_blank">
                    Primeira ERRATA Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Segunda_ERRATA_Edital_1_2022.pdf"
                    target="_blank">
                    Segunda ERRATA Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Resultado_preliminar_NIVEL_MEDIO.pdf"
                    target="_blank">
                    Resultado Preliminar - Nível Médio
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Resultado_preliminar_NIVEL_SUPERIOR.pdf"
                    target="_blank">
                    Resultado Preliminar - Nível Superior
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Resultado_dos_Recursos_-_PSS.pdf"
                    target="_blank">
                    Resultado dos Recursos - PSS
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Lista_Resultado_Final_-_Medio_PSS.pdf"
                    target="_blank">
                    Lista Resultado Final - Médio PSS
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Lista_Resultado_Final_-_Superior_-_PSS.pdf"
                    target="_blank">
                    Lista Resultado Final - Superior - PSS
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/PCD_-_Lista_resultado_final_-_PSS.pdf"
                    target="_blank">
                    PCD - Lista Resultado Final - PSS
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Terceira_ERRATA_Edital_1_2022.pdf"
                    target="_blank">
                    Terceira ERRATA Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/1CONVOCACAO_PSS.pdf"
                    target="_blank">
                    1ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Portaria_-_vacancia_dos_cargos_Enfermeiro_PSF_decorrente_do_PDV.pdf"
                    target="_blank">
                    Portaria - Vacância dos Cargos Enfermeiro PSF e Cirurgião Dentista Decorrente do PDV
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/2a_convocacao_PSS.pdf"
                    target="_blank">
                    2ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/3_convocacao_pss.pdf"
                    target="_blank">
                    3ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/4_convocacao_pss.pdf"
                    target="_blank">
                    4ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/5_convocacao_pss.pdf"
                    target="_blank">
                    5ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/6_convocacao_pss.pdf"
                    target="_blank">
                    6ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/7_convocacao_pss.pdf"
                    target="_blank">
                    7ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/8_convocacao_pss.pdf"
                    target="_blank">
                    8ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Quarta_ERRATA_EDITAL_1_2022.pdf"
                    target="_blank">
                    Quarta ERRATA Edital 1 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/Quarta_ERRATA_EDITAL_1_2022_PCD.pdf"
                    target="_blank">
                    Quarta ERRATA Edital 1 2022 - PCD
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/9_convocacao_pss.pdf"
                    target="_blank">
                    9ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/10_convocacao_pss.pdf"
                    target="_blank">
                    10ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/11_convocacao_pss.pdf"
                    target="_blank">
                    11ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/12_convocacao_pss.pdf"
                    target="_blank">
                    12ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/13_convocacao_pss.pdf"
                    target="_blank">
                    13ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/14_convocacao_pss.pdf"
                    target="_blank">
                    14ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/15_convocacao_pss.pdf"
                    target="_blank">
                    15ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/16_convocacao_pss.pdf"
                    target="_blank">
                    16ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/17_convocacao_pss.pdf"
                    target="_blank">
                    17ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/18_convocacao_pss.pdf"
                    target="_blank">
                    18ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/19_convocacao_pss.pdf"
                    target="_blank">
                    19ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/saude/20_convocacao_pss.pdf"
                    target="_blank">
                    20ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/21ª%20Convocação%20PSS%20SMS.pdf"
                    target="_blank">
                    21ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/d_o_municipal_sao_cristovao_2023-05-16_completo-38.pdf"
                    target="_blank">
                    Prorrogação do prazo de validade do Processo de Seletivo Simplificado - PSS
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/22a_Convocacao_PSS_SMS.pdf"
                    target="_blank">
                    22ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/23a_Convocacao_PSS_SMS.pdf"
                    target="_blank">
                    23ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/24ª%20Convocação%20PSS%20SMS.pdf"
                    target="_blank">
                    24ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/25a_Convocacao_PSS_SMS.pdf"
                    target="_blank">
                    25ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/26a_Convocacao_PSS_SMS_1.pdf"
                    target="_blank">
                    26ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/27a_Convocacao_PSS_SMS_1.pdf"
                    target="_blank">
                    27ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/28a_Convocacao_PSS_SMS.pdf"
                    target="_blank">
                    28ª Convocação 2022
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/Saude%20-%202022/29a_Convocacao_PSS_SMS_1.pdf"
                    target="_blank">
                    29ª Convocação 2022
            </li>
        </ul>
    </div>
</x-layout>
