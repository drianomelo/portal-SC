<x-layout.index>

    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[145px] bg-home rounded-b-[35%] relative flex justify-center items-end
         before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]
         xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-lg sm:w-[140%] sm:bg-home-sm lg:justify-start">

        </section>
    </div>

    <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-3 lg:min-w-full sm:px-2">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5 lg:-mt-4">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Notícias', 'url' => '/notícias']]" :last="['nome' => 'Infraestrutura', 'url' => '']" />
            </div>
        </div>
    </div>

    <section
        class="max-w-[1200px] mt-10 mb-10 flex items-start gap-12 xl:mb-10 sm:flex-col sm:gap-4  sm:mt-0 lg:max-w-full">
        <div class="flex flex-col w-full sm:px-2">
            <div class="relative">
                <div
                    class="absolute z-50 w-fit right-0 top-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                    <span
                        class="flex items-center gap-1.5 mt-1 text-[11px] font-bold text-yellow-400 text sm:text-[9px] sm:mt-0">
                        <i class="text-xs text-yellow-400 fa-solid fa-calendar-days sm:text-[10px]"></i>
                        04/02/2024
                    </span>
                </div>

                <div
                    class="absolute z-50 bottom-0 px-3 text-center rounded-b-md h-[100%] flex items-end gradient-post-bottom">
                    <h2 class="mb-6 text-xl font-semibold text-white uppercase text sm:text-sm sm:mb-3">Com quase 75% de
                        execução, obra de
                        construção
                        da
                        nova sede da
                        Ditin chega à parte final</h2>
                </div>

                <div class="absolute bottom-0 rounded-b-md w-full h-[40%] gradient-post-bottom">
                </div>

                <img class="w-full rounded-md shadow-md"
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/com-quase-75-de-execucao-obra-de-construcao-da-nova-sede-da-ditin-chega-a-parte-final-2024-02-04-65bff6bd649f3.JPG"
                    alt="">
            </div>

            <div class="px-3 mt-5 dark:text-white text sm:text-xs">
                <p class="mb-5 sm:mb-3">
                    A Diretoria de Tecnologia da Informação da Prefeitura de São Cristóvão (Ditin) vai contar com uma
                    nova
                    sede em breve. A construção do prédio que vai abrigar o órgão já se aproxima do percentual de
                    conclusão
                    de 75% e a previsão é de que o local seja inaugurado até março deste ano.
                </p>

                <p class="mb-5 sm:mb-3">
                    Com a nova sede da Ditin, a administração municipal vai garantir gestão e segurança da tecnologia de
                    informação, promovendo avanços na implantação de sistemas de controle e proteção de dados públicos.
                </p>

                <p class="mb-5 sm:mb-3">
                    Para o secretário de infraestrutura, Júlio Nascimento Júnior, a obra reforça o compromisso da gestão
                    municipal com uma administração eficiente e inovadora:
                </p>

                <p class="mb-5 sm:mb-3">
                    “Vamos construir um prédio completamente novo e uma diretoria que vai cuidar do nosso futuro, com
                    uma
                    gestão mais inovadora, tecnológica e capaz de melhorar a qualidade dos nossos serviços”.
                </p>

                <div class="relative mt-10 mb-5 sm:mt-4 sm:mb-3">
                    <div
                        class="absolute z-50 w-fit right-0 bottom-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                        <span class="flex items-center gap-1.5 text-[11px] font-bold text-yellow-400 sm:text-[9px]">
                            Júlio Nascimento Júnior, secretário de infraestrutura
                        </span>
                    </div>

                    <img class="rounded-md shadow-md"
                        src="https://publicacao.saocristovao.se.gov.br/laravel-filemanager/photos/17/23-04-10%2014-08-05%209583.jpg"
                        alt="">
                </div>

                <p class="mb-5 sm:mb-3">
                    A engenheira fiscal da Seminfra, Ana Paula Marques de Andrade explica que o imóvel contará com dois
                    pavimentos, sendo o térreo composto de recepção, arquivo, duas salas técnicas, banheiro acessível e
                    copa para funcionários. Já o pavimento superior contemplará três salas técnicas, depósito de
                    material de limpeza e banheiro acessível. Ela também destaca a preocupação da gestão em garantir uma
                    estrutura com acessibilidade para facilitar o acesso de todos:
                </p>

                <p class="mb-5 sm:mb-3">
                    “O prédio está projetado em atendimento às normas de acessibilidade, no que diz respeito ao passeio
                    público, escada interna e externa, plataforma elevatória, rampas de acesso e banheiros acessíveis”.
                </p>

                <div class="relative mt-10 mb-5 sm:mt-4 sm:mb-3">
                    <div
                        class="absolute z-50 w-fit right-0 bottom-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                        <span class="flex items-center gap-1.5 text-[11px] font-bold text-yellow-400 sm:text-[9px]">
                            Ana Paula Marques de Andrade, engenheira fiscal da Seminfra
                        </span>
                    </div>

                    <img class="rounded-md shadow-md"
                        src="https://publicacao.saocristovao.se.gov.br/laravel-filemanager/photos/17/HXSJ1015.JPG"
                        alt="">
                </div>

                <div class="relative mt-10 mb-5 sm:mt-4 sm:mb-3">
                    <div
                        class="absolute z-50 w-fit right-0 bottom-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                        <span class="flex items-center gap-1.5 text-[11px] font-bold text-yellow-400 sm:text-[9px]">
                            Foto interna do novo prédio da DITIN
                        </span>
                    </div>

                    <img class="rounded-md shadow-md"
                        src="https://publicacao.saocristovao.se.gov.br/laravel-filemanager/photos/17/IMG_5246.JPG"
                        alt="">
                </div>

                <p class="mb-5 sm:mb-3">
                    Josenilson Silva Santos, diretor de tecnologia da informação da Prefeitura, ressalta que o novo
                    prédio
                    vai abrigar o DATACENTER que opera com armazenamento, segurança, confidencialidade e autenticidade
                    de
                    todos os dados que são trafegados internamente na rede do município.
                </p>

                <p class="mb-5 sm:mb-3">
                    O diretor também pontua a importância da obra para o ganho de eficiência na execução de serviços
                    prestados pela gestão, através de uma evolução da estrutura disponível para a tecnologia de
                    informação.
                </p>

                <p class="mb-5 sm:mb-3">
                    A obra não é apenas uma estrutura física, mas um espaço próprio para que a diretoria possa
                    desempenhar
                    suas atividades, além de oferecer aos servidores o conforto e a qualificação, o município vai
                    promover a
                    implantação da tecnologia em sentido avançado, com mais qualidade na prestação de serviços para
                    alcançar
                    toda sociedade”, concluiu.
                </p>

                <div class="relative mt-10 mb-5 sm:mt-4 sm:mb-3">
                    <div
                        class="absolute z-50 w-fit right-0 bottom-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                        <span class="flex items-center gap-1.5 text-[11px] font-bold text-yellow-400 sm:text-[9px]">
                            Josenilson Silva Santos, diretor de tecnologia da informação da Prefeitura
                        </span>
                    </div>

                    <img class="w-full rounded-md shadow-md"
                        src="https://publicacao.saocristovao.se.gov.br/laravel-filemanager/photos/17/WhatsApp%20Image%202024-02-04%20at%2014.37.06.jpeg"
                        alt="">
                </div>

                <div class="relative mt-10 mb-5 sm:mt-4 sm:mb-3">
                    <div
                        class="absolute z-50 w-fit right-0 bottom-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                        <span class="flex items-center gap-1.5 text-[11px] font-bold text-yellow-400 sm:text-[9px]">
                            Construção do novo prédio da DITIN
                        </span>
                    </div>

                    <img class="w-full rounded-md shadow-md"
                        src="https://publicacao.saocristovao.se.gov.br/laravel-filemanager/photos/17/IMG_5259.JPG"
                        alt="">
                </div>

                <div class="flex items-center gap-2">
                    <i class="p-2.5 text-base text-gray-400 border rounded-full fa-solid fa-camera-retro"></i>
                    <div class="flex flex-col">
                        <span class="text-[10px] italic font-light">Fotos por</span>
                        <span class="text-sm font-extrabold sm:text-xs">Dani Santos</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[350px] sm:max-w-full sm:px-3">
            <h3 class="relative mb-4 font-bold uppercase w-fit dark:text-white">
                Mais de Infraestrutura:
            </h3>
            <div class="flex flex-col gap-2">
                <x-card-publicacao-small
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-investe-mais-de-r-500-mil-em-obras-no-bairro-irineu-neri-2023-11-24-6560ba209df6e.JPG"
                    alt="teste" href=""
                    title="Prefeitura de São Cristóvão investe mais de R$ 500 mil em obras no bairro Irineu Neri"
                    tag="infraestrutura" data="24/11/2023"
                    desc="Através da Secretaria Municipal de Infraestrutura (Seminfra), a Prefeitura de São Cristóvão está realizando importante obras que mudam a realidade dos moradores do bairro Irineu Neri. Com a recuperação da pavimentação da rua São Domingos e a obra de drenagem e pavimentação asfáltica da Av. Irineu Neri, a Prefeitura investe mais de 500 mil reais, oriundos de recursos próprios do município, em ações que valorizam o cidadão e melhoram a mobilidade urbana da cidade."
                    fotografo="Dani Santos" />
                <x-card-publicacao-small
                    src="http://publicacao.saocristovao.se.gov.br/storage/post/equipe-da-seminfra-apresenta-projetos-de-requalificacao-de-pracas-e-revitalizacao-de-atracadouro-2024-02-07-65c3c0239e501.JPG"
                    alt="teste" href=""
                    title="Equipe da Seminfra apresenta projetos de requalificação de praças e revitalização de atracadouro "
                    tag="infraestrutura" data="07/02/2024"
                    desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                    fotografo="Heitor Xavier" />

            </div>
        </div>
    </section>
</x-layout.index>
