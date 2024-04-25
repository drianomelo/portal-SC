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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Projeto Reconhecendo', 'url' => '']" />

                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:max-w-full">
        <x-title img="" h2="LOA e PPA" p="Audiência Pública LOA(2022) e PPA(2022 a 2025)"></x-title>
        <p
            class="my-4 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
            A Constituição Federal em seu art. 165 estabelece que o ente governamental deverá elaborar anualmente a Lei
            de Diretrizes Orçamentárias (LDO) e a Lei Orçamentária Anual (LOA), e a cada 4 (quatro) anos, o Plano
            Plurianual (PPA). O planejamento governamental é uma atividade permanente da administração pública e função
            essencial do Estado. O processo de planejamento compreende a escolha de políticas públicas capazes de
            combater os problemas enfrentados pela sociedade em um ambiente no qual os recursos (financeiros,
            organizacionais, informacionais e tecnológicos) são limitados. O Plano Plurianual (PPA) é o instrumento de
            planejamento governamental de médio prazo, que estabelece as diretrizes, objetivos e metas da Administração
            Pública organizados em programas e estruturados em ações que resultem em bens e serviços para a população. O
            PPA tem duração de quatro anos, começando no início do segundo ano do mandato do chefe do poder executivo e
            terminando no fim do primeiro ano de seu sucessor, de modo que haja continuidade do processo de
            planejamento. Nele constam, detalhadamente, os atributos das políticas públicas executadas, tais como metas
            físicas e financeiras, públicos-alvo, produtos a serem entregues à sociedade, etc. Nele consta o
            planejamento de como serão executadas as políticas públicas para alcançar os resultados esperados ao
            bem-estar da população nas diversas áreas. A Lei Orçamentária Anual (LOA) é o orçamento anual propriamente
            dito. Prevê os orçamentos fiscal, da seguridade social e de investimentos. Todos os gastos do governo para o
            próximo ano são previstos em detalhe na LOA. Você encontrará na LOA a estimativa da receita e a fixação das
            despesas do governo. Prevê também quanto o governo deve arrecadar para que os gastos programados possam de
            fato ser executados. Essa arrecadação se dá por meio dos tributos (impostos, taxas e contribuições). Se bem
            elaborada, a LOA estará em harmonia com os grandes objetivos e metas estabelecidos pelo PPA. Com o objetivo
            de qualificar os serviços ofertados à população, dando voz e protagonismo aos cidadãos, e ainda,
            demonstrando o compromisso da gestão com a transparência e boa aplicação dos recursos públicos, São
            Cristóvão vem adotando mecanismos para conhecer e compreender as necessidades dos moradores da cidade. Por
            meio de ferramentas que efetivam a participação da comunidade, a atual gestão está fortalecendo a escuta
            popular. Esse é o objetivo da realização dessa Audiência Pública Eletrônica sobre o PPA 2022-2025 e LOA
            2022. A referida audiência consiste na disponibilização de um “formulário de consulta”, para que qualquer
            cidadão interessado no encaminhamento de propostas e sugestões que possam ser inseridas no planejamento
            orçamentário deste município e foi instituída por meio do Decreto nº 30030/2021, que atende ao art. 48 da
            Lei Complementar nº 101/2000 (LRF). Desta forma, o Poder Executivo por meio da Secretaria de Planejamento,
            Orçamento e Gestão, tem a satisfação de convidar toda a sociedade a participar da presente consulta popular,
            preenchendo o formulário abaixo.
        </p>

        <x-title img="" h2="Decreto" p="Decreto LOA e PPA"></x-title>
        <a class="block my-4 text-blue-400"
            href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/loa-ppa/decreto-loa-ppa.pdf">Decreto
            LOA e PPA</a>

        <x-title img="" h2="Formulário" p="Formulário LOA e PPA"></x-title>
        <a class="block mt-4 text-blue-400"
            href="https://docs.google.com/forms/d/e/1FAIpQLSf-ZHGKwI7DgaweZDBn02PK8UOVGXODK84jymEZ7Rp4A-sNJg/closedform">Formulário
            LOA e PPA</a>
    </div>
</x-layout>
