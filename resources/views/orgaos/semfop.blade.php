<x-layout.orgaos bg="bg-semfop">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5 sm:px-3">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal de Fazenda, Orçamento e Planejamento" sigla="SEMFOP"
            :img="asset('img/orgaos/semfop.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10 sm:flex-col sm:gap-4 sm:mb-0">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal de Fazenda, Orçamento e Planejamento"></x-title>
                <p
                    class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal de Fazenda, Orçamento e Planejamento – SEMFOP tem por competência prestar
                    apoio e assistência direta e imediata ao Chefe do Poder Executivo nas áreas de administração
                    financeira, contábil, orçamentária e de planejamento do município; preparar e realizar controles na
                    execução da programação orçamentária, exercer a administração tributária, e cuidar da política
                    fiscal e extra fiscal; promover a arrecadação e fiscalização quanto aos tributos de competência
                    municipal; desempenhar ações quanto aos cadastros mobiliários e imobiliários; executar serviços de
                    contabilidade geral do Município; administrar a dívida pública municipal; promover a elaboração de
                    prestações de contas do Município; promover a elaboração e a coordenação da programação de
                    desembolso financeiro, gestão de fundos e de recursos para execução do orçamento anual de
                    investimentos da Administração Direta e Indireta; e executar outras atividades correlatas ou do
                    âmbito de sua competência, e as que lhe forem regularmente conferidas ou determinadas. Art. 57 do <a
                        class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário"
                    p="Secretário Municipal da Fazenda, Orçamento e Planejamento"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[280px] h-48 rounded-lg bg-cover bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/SEMFAZ.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Eldro Cardoso da França
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretário</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                        Eldro Cardoso da França, advogado, especialista em Direito Tributário, administrador de
                        empresas. Experiência profissional na área de Gestão Pública; Planejamento Estratégico; Captação
                        de Recursos; Orçamento Público; Arquivo Público; Almoxarifado e Patrimônio; Licitações e
                        Contratos Administrativos; Contabilidade Pública; Direito Financeiro; Administração Tributária.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4 sm:max-w-full">
                <x-title img="" h2="Notícias"
                    p="Secretaria Municipal de Fazenda, Orçamento e Planejamento"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-amplia-numero-de-parcelas-do-iptu-e-estende-prazo-para-pagamento-em-cota-unica-2024-02-27-65de1f04b0117.jpg"
                        alt="teste" href=""
                        title="Prefeitura de São Cristóvão amplia número de parcelas do IPTU e estende prazo para pagamento em cota única"
                        tag="fazenda" data="27/02/2024"
                        desc="Com o objetivo de promover a socialização e viabilizar momentos de interação para o público assistido pelo Serviço de Convivência e Formação de Vínculos (SCFV) dos Centros de Referência em Assistência Social (Cras) Gilson Prado e São Cristóvão, a Secretaria Municipal de Assistência Social (Semas) promoveu nesta segunda-feira (26) o Baile Carnavalesco Intergeracional. O evento ocorreu na sede do Sindicato dos Trabalhadores Técnico-administrativos em Educação da UFS (Sintufs), no bairro Rosa Elze."
                        fotografo="Dani Santos" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/aviso-iptu2024-2024-02-16-65cfa2a9916c9.jpeg"
                        alt="teste" href="" title="AVISO: IPTU/2024" tag="fazenda" data="21/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>

                <x-title img="" h2="Projetos"
                    p="Projetos da Secretaria Municipal de Fazenda, Orçamento e Planejamento"></x-title>

                <div class="flex flex-col gap-4">
                    <x-banner href="" img="https://www.saocristovao.se.gov.br/imagens/banners/loa_ppa.jpeg" />
                    <x-banner href="" img="https://www.saocristovao.se.gov.br/imagens/banners/fazenda.jpeg" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal de Fazenda, Orçamento e Planejamento"
        address="Rua Professor José de Alencar Cardoso, 520 - Centro" horario="08:00 ás 14:00h" phone="(79) 3045-4924"
        cellphone="" email="fazenda@saocristovao.se.gov.br" />
</x-layout.orgaos>
