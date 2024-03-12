<x-layout.orgaos bg="bg-gapre">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-16">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Gabinete do Prefeito" sigla="GAPRE" :img="asset('img/orgaos/gapre.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências" p="Competências do Gabinete do Prefeito"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    O Gabinete do Prefeito - GAPRE tem por competência prestar apoio e assistência ao Prefeito
                    Municipal, no desenvolvimento de suas atividades administrativas, políticas e de representação
                    social; organizar o seu expediente, controlar a pauta, a realização de suas audiências, promover a
                    recepção, estudo, triagem e encaminhamento do expediente enviado ao Prefeito Municipal, a
                    transmissão e controle da execução das ordens e determinações dele emanadas; executar serviços de
                    cerimonial público; encarregar-se de serviços de segurança pessoal do Prefeito Municipal;
                    supervisionar as atividades de comunicação social e de eventos institucionais e ações e serviços na
                    área cultural, artística e de preservação do patrimônio histórico; executar outras atividades
                    correlatas ou do âmbito de sua competência, e as que lhe forem regularmente conferidas ou
                    determinadas. Art. 7 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Prefeito" p="Prefeito de São Cristóvão"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-2rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/Prefeito.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Marcos Antonio de Azevedo
                                Santana
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Prefeito</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Marcos Antonio de Azevedo Santana está cumprindo, desde primeiro de janeiro de 2021, seu segundo
                        mandato como prefeito de São Cristóvão, cidade onde nasceu no dia 8 de novembro de 1959. É
                        formado em Administração pela FANESE e pós-graduado em Gestão Urbana e Planejamento Municipal
                        pela UFS e funcionário concursado da Caixa Econômica Federal há mais de 30 anos.
                    </p>
                    <p class="text-justify text dark:text-white">
                        Exerceu os cargos de Diretor de Gestão Ambiental da Companhia de Saneamento de Sergipe (DESO),
                        Secretário Adjunto do Meio Ambiente e dos Recursos Hídricos do Estado de Sergipe e Diretor
                        Administrativo e Financeiro da Companhia de Desenvolvimento Sustentável de Sergipe (PRONESE);
                        além do cargo não remunerado de Diretor-Presidente do Hospital e Maternidade Nosso Senhor dos
                        Passos, em São Cristóvão. Elegeu-se a primeira vez prefeito de São Cristóvão em outubro de 2016.
                    </p>
                </div>

                <x-title img="" h2="Chefe de Gabinete" p="Chefe do Gabinete do Prefeito"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-1rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/CGP.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Mário José Correia Freire
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Chefe de Gabinete</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Mário José Correia Freire - Graduado em Administração com ênfase em Marketing pela Faculdade
                        Estácio/Fase e Mestre em Sociologia pela Universidade Federal de Sergipe (UFS). Sua experiência
                        profissional compreende, na área privada, a atuação como: funcionário do Banco Itaú S/A, por 4
                        anos; e Diretor Administrativo da empresa PROJETUR – Projetos Turísticos Ltda, por 2 anos. Na
                        área pública, atuou como: Coordenador Administrativo da Diretoria de Gestão da Empresa Municipal
                        de Obras e Urbanização de Aracaju (EMURB), na gestão de João Augusto Gama (1997-2000); Chefe de
                        Gabinete da Secretaria Estadual de Turismo (SETUR/SE), na gestão de Pedrinho Valadares
                        (2003-2006); além de ter atuado em assessoria técnica parlamentar por 4 anos na Câmara Municipal
                        de Aracaju, por 12 anos na Assembleia Legislativa de Sergipe, e por 2 anos na Câmara dos
                        Deputados.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias" p="Gabinete do Prefeito"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeito-marcos-santana-destaca-avancos-de-sua-gestao-na-abertura-dos-trabalhos-legislativos-na-camara-de-sao-cristovao-2024-02-16-65cf92339fe67.JPG"
                        alt="teste" href=""
                        title="Prefeito Marcos Santana destaca avanços de sua gestão na abertura dos trabalhos legislativos na Câmara de São Cristóvão"
                        tag="gabinete" data="27/02/2024"
                        desc="Com o objetivo de promover a socialização e viabilizar momentos de interação para o público assistido pelo Serviço de Convivência e Formação de Vínculos (SCFV) dos Centros de Referência em Assistência Social (Cras) Gilson Prado e São Cristóvão, a Secretaria Municipal de Assistência Social (Semas) promoveu nesta segunda-feira (26) o Baile Carnavalesco Intergeracional. O evento ocorreu na sede do Sindicato dos Trabalhadores Técnico-administrativos em Educação da UFS (Sintufs), no bairro Rosa Elze."
                        fotografo="Dani Santos" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                        alt="teste" href="" title="Prefeitura decreta ponto facultativo no Carnaval"
                        tag="gabinete" data="21/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Gabinete do Prefeito" address="Paço Municipal, S/N, Praça São Francisco - Centro Histórico"
        horario="08:00 ás 14:00h" phone="(79) 3045-4910" cellphone="" email="gabinete@saocristovao.se.gov.br" />
</x-layout.orgaos>
