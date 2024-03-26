<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Sala do Empreendedor', 'url' => '']" />

            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Sobre" p="Sobre a Sala do Empreendedor"></x-title>
        <div class="mb-6">
            <p
                class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                A Sala do Empreendedor é um serviço oferecido pela Prefeitura Municipal de São Cristóvão em parceria com
                o Serviço Brasileiro de Apoio às Micro e Pequenas Empresas (SEBRAE), que tem como objetivo ajudar o
                empreendedor a formalizar e gerir o seu negócio de maneira mais eficiente e competitiva.
            </p>
        </div>

        <x-title img="" h2="Localização" p="Localização da Sala do Empreendedor"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                SALA 01 - Nas Dependências da Secretaria do Desenvolvimento Econômico e do Trabalho, situada na Rua
                Pereira Lobo, 72 – Centro Histórico.
            </li>
            <li class="text-justify list-disc">
                SALA 02 - Nas dependências do FACILITA SÃO CRISTÓVÃO, na Rua Sessenta e Três, S/N - Conj. Eduardo Gomes.
            </li>
        </ul>

        <x-title img="" h2="Serviços" p="Serviços da Sala do Empreendedor"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                Formalização Gratuita e Simplificada do MEI
            </li>
            <li class="text-justify list-disc">
                Orientações sobre obrigações do MEI
            </li>
            <li class="text-justify list-disc">
                Baixa do MEI
            </li>
            <li class="text-justify list-disc">
                Impressão de CCMEI ( Certificado da Condição de MEI)
            </li>
            <li class="text-justify list-disc">
                Atualização de Dados do MEI
            </li>
            <li class="text-justify list-disc">
                Inscrição Estadual
            </li>
            <li class="text-justify list-disc">
                Impressão CNPJ (Cadastro Nacional de Pessoa Jurídica)
            </li>
            <li class="text-justify list-disc">
                Impressão DAS (Boleto Mensal)
            </li>
            <li class="text-justify list-disc">
                Parcelamento de Débitos do MEI
            </li>
            <li class="text-justify list-disc">
                Orientação sobre a impressão DAS MEI
            </li>
            <li class="text-justify list-disc">
                Aumento de nível do Selo de Confiabilidade (Gov.Br)
            </li>
            <li class="text-justify list-disc">
                Impressão Relatório de Receita Bruta para o MEI
            </li>
            <li class="text-justify list-disc">
                Declaração Anual do MEI (DASN-SIMEI)
            </li>
            <li class="text-justify list-disc">
                Emissão de Nota Fiscal do MEI ( Municipal e Estadual)
            </li>
            <li class="text-justify list-disc">
                Impressão de CND (Certidões Negativas)
            </li>
            <li class="text-justify list-disc">
                Orientações e fomento sobre acesso ao crédito
            </li>
            <li class="text-justify list-disc">
                Orientações sobre compras municipais e o Cadastro de Fornecedor.
            </li>
            <li class="text-justify list-disc">
                Palestras, Oficinas, Cursos e Consultorias para ME, EPP e MEI
            </li>
            <li class="text-justify list-disc">
                Consulta Prévia de Registro de Marca (INPI)
            </li>
            <li class="text-justify list-disc">
                Orientação e cadastro no Credenciamento municipal de MEI
            </li>
            <li class="text-justify list-disc">
                Dentre outros serviços de apoio e suporte aos pequenos negócios.
            </li>
        </ul>

        <x-title img="" h2="Projetos e Eventos" p="Projetos e Eventos da Sala do Empreendedor"></x-title>
        <div class="grid grid-cols-3 gap-5 mt-5 grid-banner lg:grid-cols-2">
            <x-banner
                href="https://anexos.saocristovao.se.gov.br/storage/files/45/Sala%20do%20Empreendedor/Credenciamento%20MEI/EDITAL_CREDENCIAMENTO_DE_MEI_MINUTA_2023_SEM_COR_nova_OS_Consumo_Interno.pdf"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-mei.jpeg" />

            <x-banner
                href="https://anexos.saocristovao.se.gov.br/storage/files/9/planejamento/pca/Plano%20de%20Contratac%CC%A7a%CC%83o%20Anual_Sa%CC%83o%20Cristo%CC%81va%CC%83o_Se.pdf"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pca-2024.jpeg" />
        </div>
    </div>
</x-layout>
