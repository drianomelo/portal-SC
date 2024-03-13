<x-layout.orgaos bg="bg-fumctur">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10 lg:px-5">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Fundação Municipal de Cultura e Turismo" sigla="FUMCTUR" :img="asset('img/orgaos/fumctur.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Fundação Municipal de Cultura e Turismo"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Fundação Municipal de Cultura e Turismo – FUMCTUR tem por finalidade a execução das políticas
                    cultural e turística do Município, com ênfase no fomento, estímulo e proteção das manifestações
                    culturais, artísticas e históricas, e na promoção turística de São Cristóvão. Compete à FUMCTUR a
                    realização das seguintes atividades ou atribuições, sem prejuízo de outras legalmente previstas:
                </p>
                <ul class="flex flex-col gap-2 px-16 list-disc dark:text-white">
                    <li class="text-sm">Difusão e incentivo dos valores e das entidades culturais;</li>
                    <li class="text-sm">Orientação e estímulo à criatividade em instituições oficiais e
                        particulares;</li>
                    <li class="text-sm">Levantamento e Registro do acervo documental, bibliográfico e
                        cultural;</li>
                    <li class="text-sm">Conservação e preservação de monumentos Históricos, Artísticos,
                        Paisagísticos e Arqueológicos e
                        dos bens de natureza etnográfica;
                    </li>
                    <li class="text-sm">Promover a criação de Museus, Bibliotecas e Arquivos;</li>
                    <li class="text-sm">Coordenar os eventos e programas culturais promovidos pelo Poder
                        Público Municipal;</li>
                    <li class="text-sm">Firmar convênios, contratos, acordos ou ajustes com instituições
                        públicas ou privadas, nacionais
                        ou estrangeiras, visando à melhoria da execução ou do desempenho de suas atividades;</li>
                    <li class="text-sm">Exercer outras atividades ou atribuições correlatas, ou inerentes , no
                        âmbito da sua finalidade.
                    </li>
                </ul>

                <x-title img="" h2="Secretária" p="Secretária Municipal de Cultura e Turismo"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-5rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/FUMCTUR.JPG)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Paola Rodrigues de Santana
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Secretária</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Paola Rodrigues de Santana é formada em Design Gráfico com pós-graduação em Comunicação Visual
                        pela Unifasc-Ba. Trabalhou na esfera governamental e na coordenação e planejamento de campanhas
                        eleitorais. Em São Cristóvão atuou como secretária municipal de Governo e Relações Comunitárias
                        (SEGOV) entre 2017 e 2020. No ano de 2017 foi a responsável pela retomada do Festival de Artes
                        de São Cristóvão, que estava sem realizar uma edição há 12 anos.
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Notícias" p="Fundação Municipal de Cultura e Turismo"></x-title>

                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-realiza-oficina-de-aquarela-no-galeria-de-arte-vesta-viana-2024-03-01-65e20dc4795b5.JPG"
                        alt="teste" href=""
                        title="Prefeitura realiza oficina de aquarela na Galeria de Arte Vesta Viana"
                        tag="cultura e turismo" data="20/02/2024"
                        desc="A Superintendência Municipal de Trânsito e Transportes (SMTT) informa que nos dias 24 e 25 de fevereiro algumas ruas do Centro Histórico de São Cristóvão serão bloqueadas devido a realização da Romaria de Senhor dos Passos. "
                        fotografo="" />
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/multidao-de-fieis-lota-centro-historico-de-sao-cristovao-do-ultimo-dia-da-romaria-de-passos-2024-02-26-65dccc1b77830.jpeg"
                        alt="teste" href=""
                        title="Multidão de fiéis lota Centro Histórico de São Cristóvão do último dia da Romaria de Passos"
                        tag="cultura e turismo" data="07/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Fundação Municipal de Cultura e Turismo"
        address="Largo da Praça do São Francisco, S/N, Centro Histórico" horario="08:00 ás 14:00h"
        phone="(79) 3045-4937" cellphone="(79) 99877-2636" email="fumctur@saocristovao.se.gov.br" />
</x-layout.orgaos>
