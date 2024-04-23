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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Licenças', 'url' => '/licencas']]" :last="['nome' => 'Licenças Meio Ambiente', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:max-w-full">
        <x-title img="" h2="Regulamentação" p="Regulamentos do Meio Ambiente"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                Regulamenta os procedimentos de licenciamento ambiental no âmbito municipal:
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/Decreto_49_2024___Regulamentacao_do_Licenciamento_Ambiental___SC.pdf">
                    Decreto Municipal nº49/2024
                </a>
            </li>
            <li class="text-justify list-disc">
                Dispõe sobre o procedimento de licenciamento ambiental no Estado de Sergipe:
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/Lei_Estadual_Sergipe_8497_2018___Procedimento_de_licenciamento_ambiental.pdf">
                    Lei Estadual nº 8.497/2018
                </a>
            </li>
        </ul>

        <x-title img="" h2="Licenciamento Ordinário"
            p="Licença Prévia (LP), Licença de Instalação (LI) e Licença de Operação (LO)"></x-title>
        <p class="mt-3 text-xl font-extrabold">Documentação Básica:</p>
        <ul class="flex flex-col gap-2 mt-1 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/GERAL___REQUERIMENTO.pdf">
                    Requerimento Geral
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CONSULTA_PREVIA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Consulta Prévia - Documentação Específica
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/COMPLEMENTACAO___REQUERIMENTO.pdf">
                    Complementação - Requerimento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/DIAGNOSTICO_AMBIENTAL___ROTEIRO.pdf">
                    Diagnóstico Ambiental - Roteiro
                </a>
            </li>
        </ul>
        <p class="mt-3 text-xl font-extrabold">Documentação Específica:</p>
        <ul class="flex flex-col gap-2 mt-1 mb-6 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/01.00___ATIVIDADES_AGROPECUARIAS_1___DOCUMENTACAO_ESPECIFICA.pdf">
                    Criação de animais sem abate e Cultivo de plantas
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/01.00___ATIVIDADES_AGROPECUARIAS_2___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades da Agricultura Familiar;Projetos Agrícolas;Projetos de Assentamentos; Projetos de
                    irrigação sem defensivo
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/02.00___AQUICULTURA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Piscicultura; Algicultura, Mitilicultura e Ostreicultura; Malacocultura; Ranicultura
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/03.00___TRANSPORTE_1___DOCUMENTACAO_ESPECIFICA.pdf">
                    Armazenamento temporário – exceto classes I e Serviços de Saúde (A, B, C e E); Triagem de resíduos
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/03.00___TRANSPORTE_3___DOCUMENTACAO_ESPECIFICA.pdf">
                    Co-processamento; Tratamento de resíduos sólidos – classes II; Usina de reciclagem
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/04.00___ATIVIDADES_DIVERSAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades Diversas
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/06.00___ATIVIDADES_IMOBILIARIAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades Imobiliárias
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/07.00___CONSTRUCAO_CIVIL___DOCUMENTACAO_ESPECIFICA.pdf">
                    Construção civil
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/08.00___COMERCIO_E_SERVICOS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Comércio e serviços
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/09.00___EXTRACAO_MINERAL___DOCUMENTACAO_ESPECIFICA.pdf">
                    Jazidas de empréstimo para obras civis
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/10.00_A_25.00___INDUSTRIAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Indústrias
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/26.00___INFRA_ESTRUTURA_URBANISTICA_PAISAGISTICA___DOCUMENTACAO_ESPECIFICA.pdf">
                    INFRA-ESTRUTURA URBANÍSTICA/PAISAGÍSTICA
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/27.00___INFRAESTRUTURA_VIARIA_E_DE_OBRAS_DE_ARTE___DOCUMENTACAO_ESPECIFICA.pdf">
                    Infraestrutura viária e de obras de arte
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/28.00___SANEAMENTO_BASICO___DOCUMENTACAO_ESPECIFICA.pdf">
                    Saneamento básico
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/29.00___ENERGIA_ELETRICA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Geração, transmissão e distribuição de energia elétrica
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/30.00___SISTEMAS_DE_COMUNICACAO___DOCUMENTACAO_ESPECIFICA.pdf">
                    Sistemas de comunicação
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/31.00___OBRAS_HIDRICAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Obras hídricas
                </a>
            </li>
        </ul>

        <x-title img="" h2="Licenciamento Simplificado" p="Licença Simplificada (LS)"></x-title>
        <p class="mt-3 text-xl font-extrabold">Documentação Básica:</p>
        <ul class="flex flex-col gap-2 mt-1 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/GERAL___REQUERIMENTO.pdf">
                    Requerimento Geral
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CONSULTA_PREVIA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Consulta Prévia - Documentação Específica
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/COMPLEMENTACAO___REQUERIMENTO.pdf">
                    Complementação - Requerimento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/DIAGNOSTICO_AMBIENTAL___ROTEIRO.pdf">
                    Diagnóstico Ambiental - Roteiro
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/LS___TERMO_DE_RESPONSABILIDADE_AMBIENTAL.pdf">
                    Termo de Responsabilidade Ambiental
                </a>
            </li>
        </ul>
        <p class="mt-3 text-xl font-extrabold">Documentação Específica:</p>
        <ul class="flex flex-col gap-2 mt-1 mb-6 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/01.00___ATIVIDADES_AGROPECUARIAS_1___DOCUMENTACAO_ESPECIFICA.pdf">
                    Criação de animais sem abate e Cultivo de plantas
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/01.00___ATIVIDADES_AGROPECUARIAS_2___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades da Agricultura Familiar;Projetos Agrícolas;Projetos de Assentamentos; Projetos de
                    irrigação sem defensivo
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/02.00___AQUICULTURA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Piscicultura; Algicultura, Mitilicultura e Ostreicultura; Malacocultura; Ranicultura
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/03.00___TRANSPORTE_1___DOCUMENTACAO_ESPECIFICA.pdf">
                    Armazenamento temporário – exceto classes I e Serviços de Saúde (A, B, C e E); Triagem de resíduos
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/03.00___TRANSPORTE_3___DOCUMENTACAO_ESPECIFICA.pdf">
                    Co-processamento; Tratamento de resíduos sólidos – classes II; Usina de reciclagem
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/06.00___ATIVIDADES_IMOBILIARIAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades Imobiliárias
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/07.00___CONSTRUCAO_CIVIL___DOCUMENTACAO_ESPECIFICA.pdf">
                    Construção civil
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/08.00___COMERCIO_E_SERVICOS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Comércio e serviços
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/10.00_A_25.00___INDUSTRIAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Indústrias
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/26.00___INFRA_ESTRUTURA_URBANISTICA_PAISAGISTICA___DOCUMENTACAO_ESPECIFICA.pdf">
                    INFRA-ESTRUTURA URBANÍSTICA/PAISAGÍSTICA
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/27.00___INFRAESTRUTURA_VIARIA_E_DE_OBRAS_DE_ARTE___DOCUMENTACAO_ESPECIFICA.pdf">
                    Infraestrutura viária e de obras de arte
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/28.00___SANEAMENTO_BASICO___DOCUMENTACAO_ESPECIFICA.pdf">
                    Saneamento básico
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/29.00___ENERGIA_ELETRICA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Geração, transmissão e distribuição de energia elétrica
                </a>
            </li>
        </ul>

        <x-title img="" h2="Certidão" p="Certidão de Dispensa de Licença Ambiental (CDLA)"></x-title>
        <p class="mt-3 text-xl font-extrabold">Documentação Básica:</p>
        <ul class="flex flex-col gap-2 mt-1 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/GERAL___REQUERIMENTO.pdf">
                    Requerimento Geral
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CONSULTA_PREVIA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Consulta Prévia - Documentação Específica
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CDLA___CARACTERIZACAO_DO_EMPREENDIMENTO.pdf">
                    Caracterização do empreendimento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/COMPLEMENTACAO___REQUERIMENTO.pdf">
                    Complementação - Requerimento
                </a>
            </li>
        </ul>
        <p class="mt-3 text-xl font-extrabold">Documentação Específica:</p>
        <ul class="flex flex-col gap-2 mt-1 mb-6 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/01.00___ATIVIDADES_AGROPECUARIAS_1___DOCUMENTACAO_ESPECIFICA.pdf">
                    Criação de animais sem abate e Cultivo de plantas
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/01.00___ATIVIDADES_AGROPECUARIAS_2___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades da Agricultura Familiar;Projetos Agrícolas;Projetos de Assentamentos; Projetos de
                    irrigação sem defensivo
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/07.00___CONSTRUCAO_CIVIL___DOCUMENTACAO_ESPECIFICA.pdf">
                    Construção civil
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/27.00___INFRAESTRUTURA_VIARIA_E_DE_OBRAS_DE_ARTE___DOCUMENTACAO_ESPECIFICA.pdf">
                    Infraestrutura viária e de obras de arte
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/31.00___OBRAS_HIDRICAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Obras hídricas
                </a>
            </li>
        </ul>

        <x-title img="" h2="Autorização Ambiental" p="Autorização Ambiental"></x-title>
        <p class="mt-3 text-xl font-extrabold">Documentação Básica:</p>
        <ul class="flex flex-col gap-2 mt-1 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/GERAL___REQUERIMENTO.pdf">
                    Requerimento Geral
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CONSULTA_PREVIA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Consulta Prévia - Documentação Específica
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/COMPLEMENTACAO___REQUERIMENTO.pdf">
                    Complementação - Requerimento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/DIAGNOSTICO_AMBIENTAL___ROTEIRO.pdf">
                    Diagnóstico Ambiental - Roteiro
                </a>
            </li>
        </ul>
        <p class="mt-3 text-xl font-extrabold">Documentação Específica:</p>
        <ul class="flex flex-col gap-2 mt-1 mb-6 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/03.00___TRANSPORTE_2___DOCUMENTACAO_ESPECIFICA.pdf">
                    Agrícolas, comerciais, urbanos e de construção civil; Industriais – exceto classes I e Serviços de
                    Saúde (A, B, C e E); Esgotos sanitários; Agroquímicos e suas embalagens usadas;
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/04.00___ATIVIDADES_DIVERSAS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Atividades Diversas
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/07.00___CONSTRUCAO_CIVIL___DOCUMENTACAO_ESPECIFICA.pdf">
                    Construção civil
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/27.00___INFRAESTRUTURA_VIARIA_E_DE_OBRAS_DE_ARTE___DOCUMENTACAO_ESPECIFICA.pdf">
                    Infraestrutura viária e de obras de arte
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/28.00___SANEAMENTO_BASICO___DOCUMENTACAO_ESPECIFICA.pdf">
                    Saneamento básico
                </a>
            </li>
        </ul>

        <x-title img="" h2="Supressão de Vegetação"
            p="Autorização de Supressão de Vegetação"></x-title>
        <p class="mt-3 text-xl font-extrabold">Documentação Básica:</p>
        <ul class="flex flex-col gap-2 mt-1 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/GERAL___REQUERIMENTO.pdf">
                    Requerimento Geral
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CONSULTA_PREVIA___DOCUMENTACAO_ESPECIFICA.pdf">
                    Consulta Prévia - Documentação Específica
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/COMPLEMENTACAO___REQUERIMENTO.pdf">
                    Complementação - Requerimento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/DIAGNOSTICO_AMBIENTAL___ROTEIRO.pdf">
                    Diagnóstico Ambiental - Roteiro
                </a>
            </li>
        </ul>
        <p class="mt-3 text-xl font-extrabold">Documentação Específica:</p>
        <ul class="flex flex-col gap-2 mt-1 mb-6 pl-7 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/05.00___ATIVIDADES_FLORESTAIS___DOCUMENTACAO_ESPECIFICA.pdf">
                    Supressão de Vegetação
                </a>
            </li>
        </ul>

        <x-title img="" h2="Razão social ou Titularidade"
            p="Alteração de razão social ou titularidade"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/ARST___REQUERIMENTO.pdf">
                    Requerimento de alteração de razão social ou titularidade
                </a>
            </li>
        </ul>

        <x-title img="" h2="Técnico de consultor" p="Cadastro técnico de consultor"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/licenciamento-ambiental/CONSULTOR___REQUERIMENTO.pdf">
                    Formulário de cadastro técnico de consultor
                </a>
            </li>
        </ul>
    </div>
</x-layout>
