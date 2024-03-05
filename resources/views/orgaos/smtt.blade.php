<x-layout.orgaos bg="bg-smtt">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Superintêndencia Municipal de Trânsito e Transporte" sigla="SMTT" :img="asset('img/orgaos/smtt.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Superintêndencia Municipal de Trânsito e Transporte"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    Promover a mobilidade urbana e segurança no trânsito através do desenvolvimento e gerenciamento
                    eficiente dos serviços de transporte público, estudos estatísticos, fiscalização e educação para o
                    trânsito. Tendo como valores; a transparência, ética, respeito, eficiência e o compromisso com a
                    população, com vistas a ser um órgão de excelência em trânsito a nível estadual. Serviços de
                    Transportes e Trânsito.
                </p>

                <x-title img="" h2="Superintendente"
                    p="Superintendente Municipal de Trânsito e Transporte"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-3rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/SMTT.jpeg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Nilton José dos Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Superintendente</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Nilton José dos Santos - Graduado em História pela Universidade Federal de Sergipe (UFS),
                        Graduando em Enfermagem – Bacharelado, 8° período, também pela Universidade Federal de Sergipe
                        (UFS), Policial Militar desde 1998, possui curso de formação de Soldado, Cabo e Sargento pelo
                        Centro de Formação de Praças da Polícia Militar do Estado de Sergipe, possui curso de
                        capacitação de Diretos Humanos, aspectos jurídicos de abordagem policial, mulher vítima de
                        violência doméstica, curso de agente de trânsito, curso de educação para o trânsito para
                        profissionais de segurança pública, curso de combate de tráfico de seres humanos Pela Secretaria
                        Nacional de Segurança Pública. Trabalhou na cavalaria da Polícia, como diretor de Trânsito e
                        Transportes Públicos e atualmente atua como superintendente de trânsito e transporte do
                        município de São Cristóvão.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias"
                    p="Superintêndencia Municipal de Trânsito e Transporte"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/consulte-as-ruas-que-serao-bloqueadas-para-a-festa-de-senhor-dos-passos-2024-02-20-65d4c609e148f.JPG"
                        alt="teste" href=""
                        title="Consulte as ruas que serão bloqueadas para a Festa de Senhor dos Passos" tag="trânsito"
                        data="20/02/2024"
                        desc="A Superintendência Municipal de Trânsito e Transportes (SMTT) informa que nos dias 24 e 25 de fevereiro algumas ruas do Centro Histórico de São Cristóvão serão bloqueadas devido a realização da Romaria de Senhor dos Passos. "
                        fotografo="" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/blitz-educativa-em-sao-cristovao-conscientiza-sobre-os-perigos-de-dirigir-sob-efeito-de-alcool-durante-o-carnaval-2024-02-07-65c4133ce6251.JPG"
                        alt="teste" href=""
                        title="Blitz educativa em São Cristóvão conscientiza sobre os perigos de dirigir sob efeito de álcool durante o Carnaval"
                        tag="trânsito" data="07/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Superintêndencia Municipal de Trânsito e Transporte"
        address="Rua 63, S/N – Conjunto Eduardo Gomes" horario="08:00 ás 14:00h" phone="(79) 3045-4923" cellphone=""
        email="smtt@saocristovao.se.gov.br" />
</x-layout.orgaos>
