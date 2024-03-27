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
                    ]" :last="['nome' => 'SEMED 2023', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Anexos" p="Editais e outros documentos da SEMED 2023"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" href="https://semed.saocristovao.se.gov.br/" target="_blank">
                    Fazer inscrição
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" href="https://semed.saocristovao.se.gov.br/recurso" target="_blank">
                    Formulário recurso
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semed/2023/Edital_PSS_01_2023.pdf"
                    target="_blank">
                    Edital 01 - 2023
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semed/2023/Edital_PSS_01_2023_Retificacao.pdf"
                    target="_blank">
                    Retificação do Edital 01 - 2023
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/pss/semed/2023/2a_RETIFICACAO_-_EDITAL_PSS_01-2023.pdf"
                    target="_blank">
                    2ª Retificação do Edital 01 - 2023
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/5/3a_RETIFICACAO_-_Diario_Oficial.pdf"
                    target="_blank">
                    3ª Retificação do Edital 01 - 2023
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/pss%20Semed%202023/CANDIDATOS_NAO_CLASSIFICADOS_GERAL.pdf"
                    target="_blank">
                    Candidados Não Classificados
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Apoio%20Escolar.pdf"
                    target="_blank">
                    Resultado Parcial - Apoio Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Assistente%20Social.pdf"
                    target="_blank">
                    Resultado Parcial - Assistente Social
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Cuidador%20Educador.pdf"
                    target="_blank">
                    Resultado Parcial - Cuidador Educador
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Executor%20de%20Serviços%20Básicos.pdf"
                    target="_blank">
                    Resultado Parcial - Executor de Serviços Básicos
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Executor%20de%20Serviços%20de%20Manutenção.pdf"
                    target="_blank">
                    Resultado Parcial - Executor de Serviços de Manutenção
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Intérprete%20de%20Libras.pdf"
                    target="_blank">
                    Resultado Parcial - Intérprete de Libras
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Merendeiro%20Escolar.pdf"
                    target="_blank">
                    Resultado Parcial - Merendeiro Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Monitor%20de%20Transporte%20Escolar.pdf"
                    target="_blank">
                    Resultado Parcial - Monitor de Transporte Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Oficial%20Administrativo.pdf"
                    target="_blank">
                    Resultado Parcial - Oficial Administrativo
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Arte.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Arte
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Ciências.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Ciências
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Educação%20Física.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Educação Física
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Educação%20Infantil%20e%20Anos%20Iniciais%20do%20Ensino%20Fundamental.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Educação Infantil e Anos Iniciais do Ensino Fundamental
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Geografia.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Geografia
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20História.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de História
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Inglês.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Inglês
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Matemática.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Matemática
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Professor%20de%20Português.pdf"
                    target="_blank">
                    Resultado Parcial - Professor de Português
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/8/correcaopsssemed2023/Psicólogo%20Escolar.pdf"
                    target="_blank">
                    Resultado Parcial - Psicólogo Escolar
            </li>

            {{-- Resultado definitivo --}}
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/00RESULTADO%20RECURSOS.pdf"
                    target="_blank">
                    Resultado Recursos
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/01Apoio%20Escolar.pdf"
                    target="_blank">
                    Resultado Final - Apoio Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/02Assistente%20Social.pdf"
                    target="_blank">
                    Resultado Final - Assistente Social
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/03Cuidador%20Educador.pdf"
                    target="_blank">
                    Resultado Final - Cuidador Educador
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/04Executor%20de%20Servios%20Bsicos.pdf"
                    target="_blank">
                    Resultado Final - Executor de Serviços Básicos
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/05Executor%20de%20Serviços%20de%20Manutenção.pdf"
                    target="_blank">
                    Resultado Final - Executor de Serviços de Manutenção
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/06Intérprete%20de%20Libras.pdf"
                    target="_blank">
                    Resultado Final - Intérprete de Libras
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/07Merendeiro%20Escolar.pdf"
                    target="_blank">
                    Resultado Final - Merendeiro Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/08Monitor%20de%20Transporte%20Escolar.pdf"
                    target="_blank">
                    Resultado Final - Monitor de Transporte Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/09Oficial%20Administrativo.pdf"
                    target="_blank">
                    Resultado Final - Oficial Administrativo
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/10Professor%20de%20Arte.pdf"
                    target="_blank">
                    Resultado Final - Professor de Arte
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/11Professor%20de%20Ciências.pdf"
                    target="_blank">
                    Resultado Final - Professor de Ciências
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/12Professor%20de%20Educação%20Física.pdf"
                    target="_blank">
                    Resultado Final - Professor de Educação Física
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/13Professor%20de%20Educação%20Infantil%20e%20Anos%20Iniciais%20do%20Ensino%20Fundamental.pdf"
                    target="_blank">
                    Resultado Final - Professor de Educação Infantil e Anos Iniciais do Ensino Fundamental
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/14Professor%20de%20Geografia.pdf"
                    target="_blank">
                    Resultado Final - Professor de Geografia
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/15Professor%20de%20História.pdf"
                    target="_blank">
                    Resultado Final - Professor de História
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/16Professor%20de%20Inglês.pdf"
                    target="_blank">
                    Resultado Final - Professor de Inglês
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/17Professor%20de%20Matemática.pdf"
                    target="_blank">
                    Resultado Final - Professor de Matemática
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/18Professor%20de%20Português.pdf"
                    target="_blank">
                    Resultado Final - Professor de Português
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/19Psicólogo%20Escolar.pdf"
                    target="_blank">
                    Resultado Final - Psicólogo Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/20NÃO%20CLASSIFICADOS%202%20apos%20recursos.pdf"
                    target="_blank">
                    Não classificados após recursos
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/1o_EDITAL_DE_CONVOCACAO_PSS_2023.pdf"
                    target="_blank">
                    1ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/2º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank">
                    2ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/SEMED%20-%20Retificação%202023/4a_RETIFICACAO_-_RESULTADO_DO_RECURSO.pdf"
                    target="_blank">
                    4ª Retificação - Resultado do Recurso
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/SEMED%20-%20Retificação%202023/04RETIFICACAO_-_Executor_de_Servicos_Basicos.pdf"
                    target="_blank">
                    Retificação - Resultado Final Executor de Serviços Básicos
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/SEMED%20-%20Retificação%202023/07RETIFICACAO_-_Merendeiro_Escolar.pdf"
                    target="_blank">
                    Retificação - Resultado Final Merendeiro Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/3o_EDITAL_DE_CONVOCACAO_PSS-2023_2.pdf"
                    target="_blank">
                    3ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/4/4o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    4ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/5o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    5ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/SEMED%20-%20Retificação%202023/04Executor_de_Servicos_Basicos2_-_REPUBLICACAO_1.pdf"
                    target="_blank">
                    Republicação da Retificação - Resultado Final Executor de Serviços Básicos
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/SEMED%20-%20Retificação%202023/07Merendeiro_Escolar2_-_REPUBLICACAO_1.pdf"
                    target="_blank">
                    Republicação da Retificação - Resultado Final Merendeiro Escolar
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/6o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    6ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/7o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    7ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/8o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    8ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/9o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    9ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/4/10o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    10ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/11o_EDITAL_DE_CONVOCACAO_PSS-2023-1.pdf"
                    target="_blank">
                    11ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/12o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    12ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/13o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    13ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/14o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    14ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/15o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    15ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/16o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    16ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/17º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank">
                    17ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/18o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    18ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/19o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    19ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/20o_EDITAL_DE_CONVOCACAO_PSS-2023_-_Diario_Oficial%20(1).pdf"
                    target="_blank">
                    20ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/21o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    21ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/22o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    22ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/23o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    23ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/24o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    24ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/25o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    25ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/26º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank">
                    26ª Convocação
            </li>

            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/27o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    27ª Convocação
            </li>

            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/28o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    28ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/29o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    29ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/30o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    30ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/31o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    31ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/32o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    32ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/33o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    33ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/34o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank">
                    34ª Convocação
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/35º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">35ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/36º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">36ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/37º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">37ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/ResultadoFinalPssSemed2023/38º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">38ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/39o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">39ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/40o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">40ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/41º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">41ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/42º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">42ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/43o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">43ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/44o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">44ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/45o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">45ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/46o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">46ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/47o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">47ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/47o_EDITAL_DE_CONVOCACAO_PSS-2023_-_REPUBLICACAO.pdf"
                    target="_blank" rel="noopener noreferrer">47ª Convocação - Republicação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/48o_EDITAL_DE_CONVOCACAO_PSS-2023_-_REPUBLICACAO.pdf"
                    target="_blank" rel="noopener noreferrer">48ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/49o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">49ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/50o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">50ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/51o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">51ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/52o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">52ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/53o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">53ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/54o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">54ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/55o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">55ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/56o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">56ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/57º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">57ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/58º%20EDITAL%20DE%20CONVOCAÇÃO%20PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">58ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/59o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">59ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/60o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">60ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/61o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">61ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/62o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">62ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/62o_EDITAL_DE_CONVOCACAO_PSS-2023_-_REPUBLICACAO.pdf"
                    target="_blank" rel="noopener noreferrer">62ª Convocação - Republicação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/63o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">63ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/64o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">64ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/65o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">65ª Convocação</a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/PSS/SEMED%202023/66o_EDITAL_DE_CONVOCACAO_PSS-2023.pdf"
                    target="_blank" rel="noopener noreferrer">66ª Convocação</a>
            </li>
        </ul>
    </div>
</x-layout>
