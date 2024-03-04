<x-layout.orgaos bg="bg-segov">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal de Governo e Gestão" sigla="SEGOV" :img="asset('img/orgaos/segov.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal de Governo e Gestão"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal de Governo e Gestão – SEGOV, tem por competência coordenar a execução da
                    política de administração de recursos humanos, supervisionar a realização de compras e aquisições de
                    bens e serviços de forma centralizada, coordenar o controle de movimentação de material e patrimônio
                    do município, prestar apoio e assistência direta e imediata ao Chefe do Poder Executivo quanto às
                    atividades de articulação institucional com órgãos e entidades da Administração Pública Municipal,
                    Estadual e Federal e com outras instituições; sistematizar a captação e gerenciamento de recursos
                    extra tributários, por meio do recebimento de repassesa fundo perdido e financiamentos; executar
                    atividades e serviços de articulação política com o Poder Legislativo; supervisionar a elaboração,
                    redação e recomposição e de proposições legislativas de interesse do Poder Executivo, bem como os
                    decretos e atos normativos do Prefeito Municipal; efetuar o controle e o registro dos atos oficiais
                    do Prefeito Municipal; desempenhar a coordenação geral das ações governamentais dos diversos órgãos
                    e entidades municipais; executar todas as atividades correlatas que lhe forem regularmente
                    delegadas. Art. 34 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário" p="Secretário Municipal de Governo e Gestão"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-4rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/SEGOV.JPG)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Edson Fontes dos Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretário</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Edson Fontes dos Santos é bacharel em Ciências Contábeis – FANESE, pós-graduado em direito
                        constitucional e controle externo – UNIT, funcionário público aposentado pela SEFAZ-SE, esteve a
                        disposição do Tribunal de Contas do Estado pelo período aproximado de 8 anos na função de
                        técnico de controle externo. No município de São Cristóvão é ex-vereador, ex-controlador geral e
                        ex-secretário chefe de assuntos parlamentares.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias" p="Secretaria Municipal de Governo e Gestão"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-promove-capacitacao-de-servidores-para-utilizacao-de-novo-sistema-eletronico-que-vai-otimizar-a-tramitacao-de-processos-administrativos-2024-01-19-65aaf8219b9eb.JPG"
                        alt="teste" href=""
                        title="Prefeitura promove capacitação de servidores para utilização de novo sistema eletrônico que vai otimizar a tramitação de processos administrativos"
                        tag="governo" data="20/02/2024"
                        desc="A Superintendência Municipal de Trânsito e Transportes (SMTT) informa que nos dias 24 e 25 de fevereiro algumas ruas do Centro Histórico de São Cristóvão serão bloqueadas devido a realização da Romaria de Senhor dos Passos. "
                        fotografo="" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-republica-edital-de-credenciamento-para-o-transporte-universitario-2024-01-11-659fe4437127d.jpeg"
                        alt="teste" href=""
                        title="Prefeitura de São Cristóvão republica edital de credenciamento para o transporte universitário "
                        tag="governo" data="07/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal de Governo e Gestão"
        address="Largo da Praça do São Francisco, S/N, Centro Histórico" horario="08:00 ás 14:00h"
        phone="(79) 3045-4938" cellphone="(79) 99815-7116" email="segov@saocristovao.se.gov.br" />
</x-layout.orgaos>
