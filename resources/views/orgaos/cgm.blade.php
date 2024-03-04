<x-layout.orgaos bg="bg-cgm">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Controladoria Geral do Município" sigla="CGM" :img="asset('img/orgaos/cgm.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências" p="Competências da Controladoria Geral do Município"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Controladoria Geral do Município – CGM tem por competência desempenhar o controle interno da
                    Administração Pública Municipal do Poder Executivo, exercendo a fiscalização contábil, financeira,
                    orçamentária e patrimonial, quanto à legalidade, legitimidade, economicidade, aplicação de
                    subvenções e renúncia de receitas, visando à salvaguarda dos bens; verificar a exatidão e
                    regularidade das contas e a boa execução do orçamento; realizar o controle das operações de crédito,
                    avais e garantias, bem como dos direitos e haveres do Município; apoiar o órgão de controle externo
                    no desempenho de sua missão institucional; consolidar os planos de trabalho para a realização de
                    auditorias internas; verificar a consistência dos dados contidos no Relatório de Gestão Fiscal,
                    conforme previsão da Lei Complementar nº 101, de 04 de maio de 2000 (Lei de Responsabilidade
                    Fiscal), bem como zelar pelo seu cumprimento no âmbito da Administração Pública Municipal; executar
                    outras atividades correlatas ou do âmbito de sua competência, e as que lhe forem regularmente
                    conferidas ou determinadas. Art. 24 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">
                        Projeto de Lei Complementar Nº 69/2022</a>.
                </p>

                <x-title img="" h2="Controladora" p="Controladora Geral do Municipal"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-3rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/CGM.jpg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Maria Lucimara Souza
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Controladora Geral</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Maria Lucimara Souza tem formação em contabilidade pela Fanese, possui especializações em
                        Contabilidade Pública e Auditoria Governamental, e em Controle Interno na Administração
                        Pública.
                        Já atuou profissionalmente em diversas empresas e em gestões públicas, a exemplo da
                        Prefeitura
                        de Cumbe e da Fundação Cultural Cidade de Aracaju (Funcaju).
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias" p="Controladoria Geral do Município"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-realiza-capacitacao-com-servidores-para-atuacao-como-fiscais-de-contrato-2024-01-11-65a0285e38f92.JPG"
                        alt="teste" href=""
                        title="Prefeitura de São Cristóvão realiza capacitação com servidores para atuação como fiscais de contrato"
                        tag="controladoria" data="11/01/2024"
                        desc="A Prefeitura de São Cristóvão, por meio da Controladoria Geral do Município (CGM), realizou nesta quinta-feira (11) uma reunião com servidores do município para capacitá-los para a função de fiscais de contratos. "
                        fotografo=" Heitor Xavier" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/ouvidoria-da-prefeitura-conta-com-whatsapp-para-atender-populacao-de-sao-cristovao-2023-08-25-64e89f1be9e6c.jpeg"
                        alt="teste" href=""
                        title="Ouvidoria da Prefeitura conta com WhatsApp para atender população de São Cristóvão"
                        tag="controladoria" data="25/08/2023"
                        desc='No site oficial da Prefeitura de São Cristóvão há uma aba específica de ouvidoria, na qual a população tem uma via de comunicação direta com a administração municipal. Além deste caminho, a população pode entrar em contato para apresentar sugestões, dúvidas e reclamações por meio de um número de WhatsApp no seguinte contato: (79) 99873-1806. '
                        fotografo="Heitor Xavier" />
                </div>

            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal da Assistência Social" address="Rua Pereira Lobo, 114, Centro Histórico"
        horario="08:00 ás 14:00h" phone="(79) 3045-4932" cellphone="(79) 99852-4167"
        email="controladoria@saocristovao.se.gov.br" />
</x-layout.orgaos>
