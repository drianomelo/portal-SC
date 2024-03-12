<x-layout.orgaos bg="bg-seminfra">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-16">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal da Infraestrutura" sigla="SEMINFRA" :img="asset('img/orgaos/seminfra.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal da Infraestrutura"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal da Infraestrutura – SEMINFRA tem por competência prestar apoio e assistência
                    direta e imediata ao Chefe do Poder Executivo quanto às políticas públicas nas áreas de
                    infraestrutura municipal; exercer a administração, acompanhamento e fiscalização da construção,
                    melhoramento e conservação de prédios públicos e outras obras de engenharia civil do Poder Público
                    Municipal; executar serviços de fiscalização de obras e serviços de engenharia civil nos termos da
                    lei; coordenar, executar e controlar as ações de defesa civil; e executar outras atividades
                    correlatas ou do âmbito de sua competência, e as que lhe forem regularmente conferidas ou
                    determinadas. Art. 143 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário" p="Secretário Municipal de Infraestrutura"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-2rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/SEMINFRA.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Júlio Nascimento Júnior
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Engenheiro Civil</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Júlio Nascimento Júnior é graduado em engenharia civil pela Universidade Federal de Sergipe
                        (UFS). Em sua área, atua no desenvolvimento de cronogramas, planejamentos, orçamentos e
                        gerenciamento de equipes na construção civil, implantando a qualidade nos serviços em busca de
                        uma produção eficiente. Desde o ano 2000 vem atuando como gerente de obra em diversas
                        construtoras do Estado de Sergipe, fazendo parte da equipe técnica responsável pela construção
                        de diversos prédios residenciais. Trabalhou, ainda, como gerente de contrato e responsável
                        técnico de obras públicas no interior do Estado.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias" p="Secretaria Municipal da Infraestrutura"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-inaugura-o-canal-da-rua-tarssio-barbosa-ramos-olanda-no-bairro-eduardo-gomes-2024-02-29-65e0bdb9bf1da.jpg"
                        alt="teste" href=""
                        title="Prefeitura de São Cristóvão inaugura o canal da Rua Társsio Barbosa Ramos Olanda no bairro Eduardo Gomes"
                        tag="infraestrutura" data="20/02/2024"
                        desc="A Superintendência Municipal de Trânsito e Transportes (SMTT) informa que nos dias 24 e 25 de fevereiro algumas ruas do Centro Histórico de São Cristóvão serão bloqueadas devido a realização da Romaria de Senhor dos Passos. "
                        fotografo="" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/com-quase-75-de-execucao-obra-de-construcao-da-nova-sede-da-ditin-chega-a-parte-final-2024-02-04-65bff6bd649f3.JPG"
                        alt="teste" href=""
                        title="Com quase 75% de execução, obra de construção da nova sede da Ditin chega à parte final"
                        tag="infraestrutura" data="07/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal da Infraestrutura" address="Av. Paulo Barreto de Menezes, 492 - Centro"
        horario="08:00 ás 14:00h" phone="(79) 3045-4934" cellphone="(79) 99964-8759"
        email="seminfra@saocristovao.se.gov.br" />
</x-layout.orgaos>
