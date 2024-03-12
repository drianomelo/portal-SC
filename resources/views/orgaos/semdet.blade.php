<x-layout.orgaos bg="bg-cgm">

    <section class="max-w-[1200px] mx-auto relative z-50 my-10">
        <!-- SECTION PROFILE -->
        <x-orgaos.profile name="Secretaria Municipal de Desenvolvimento Econômico e do Trabalho" sigla="SEMDET"
            :img="asset('img/orgaos/semdet.png')" />

        <!-- SECTION DESCRIPITON -->
        <div class="max-w-[1200px] flex gap-12 xl:mb-10">
            <div class="flex flex-col w-full gap-4 mx-auto ">
                <x-title img="" h2="Competências"
                    p="Competências da Secretaria Municipal de Desenvolvimento Econômico e do Trabalho"></x-title>
                <p
                    class="text-justify dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                    A Secretaria Municipal de Desenvolvimento Econômico e do Trabalho – SEMDET tem por competência
                    prestar apoio e assistência direta e imediata ao Chefe do Poder Executivo e implementar as ações
                    estratégicas de desenvolvimento econômico autossustentável, gerenciando processos de promoção ao
                    desenvolvimento e implantação de novos negócios, envolvendo iniciativas de fortalecimento do sistema
                    produtivo formal e informal, de coordenação e execução das ações relacionadas ao trabalho e à
                    qualificação profissional e outras ações voltadas à indução do desenvolvimento econômico do
                    Município. Art. 194 do <a class="text-blue-500 underline"
                        href="https://anexos.saocristovao.se.gov.br/arquivos/transparencia/municipal/leis/Lei_Complementar_no_69_2022.pdf">Projeto
                        de Lei Complementar Nº
                        69/2022</a>.
                </p>

                <x-title img="" h2="Secretário"
                    p="Secretário Municipal de Desenvolvimento Econômico e do Trabalho"></x-title>
                <div>
                    <div
                        class="flex justify-end text-center items-center mr-2.5 flex-col float-left min-w-[280px] h-48 rounded-lg bg-cover bg-[center_top_-4rem] bg-[url(https://www.saocristovao.se.gov.br/imagens/orgaos/SEMDET.jpg)]">

                        <div class="w-full pt-8 pb-1.5 rounded-b-lg gradient-post-bottom">
                            <h5 class="text-xs font-semibold text-white whitespace-nowrap">Josenito Oliveira Santos
                            </h5>
                            <p class="whitespace-nowrap text-[11px] text-white font-light">Economista</p>
                        </div>
                    </div>
                    <p class="mb-1 text-justify text dark:text-white">
                        Josenito Oliveira Santos é Economista, Mestre em Desenvolvimento Regional e Gestão de
                        Empreendimentos Locais e Doutor em Ciência da Propriedade Intelectual, todos pela Universidade
                        Federal de Sergipe. Tem experiência em gestão no setor público e privado com destaque nas áreas
                        de planejamento estratégico, financeiro, orçamentário, estudos de viabilidade econômica e
                        financeira, ciência, tecnologia e inovação. Desenvolveu seu trabalho com ênfase na criação de um
                        índice de avaliação da governança pública. É professor universitário e já atuou em diversos
                        cargos de gestão tanto no setor público quanto no setor privado, como: Diretor de Planejamento
                        da Secretaria Municipal do Meio Ambiente de Aracaju – SEMA; Pró-Reitor Administrativo e
                        Financeiro da Universidade Tiradentes; Diretor Administrativo e Financeiro da Secretaria da
                        Indústria, Comércio e Turismo de Aracaju – SEMICT; Diretor-Presidente da Fundação de Apoio à
                        Pesquisa e à Inovação Tecnológica do Estado de Sergipe - FAPITEC/SE, sendo depois Diretor
                        Administrativo e Financeiro da mesma Fundação; Presidente do Conselho Fiscal do SERGIPETEC; foi
                        Membro do Conselho Estadual de Ciência e Tecnologia – CONCIT; Diretor de Apoio e Desenvolvimento
                        do Instituto Tecnológico e de Pesquisas do Estado de Sergipe – ITPS e Analista de Custos da
                        empresa Indaiá Transportes (Grupo Votorantim).
                    </p>
                </div>
            </div>

            <div class="max-w-[350px] flex flex-col gap-4">
                <x-title img="" h2="Projetos"
                    p="Projetos da Secretaria Municipal de Desenvolvimento Econômico e do Trabalho"></x-title>

                <div class="flex flex-col gap-4">
                    <x-banner href=""
                        img="https://www.saocristovao.se.gov.br/imagens/banners/credenciamento_MEI.jpeg" />
                    <x-banner href=""
                        img="https://www.saocristovao.se.gov.br/imagens/banners/Sala_do_Empreendedor.jpg" />
                </div>
            </div>
        </div>
    </section>

    <x-orgaos.modal name="Secretaria Municipal de Desenvolvimento Econômico e do Trabalho"
        address=" Rua Pereira Lobo. - CENTRO - CEP: 49.100-055" horario="08:00 ás 14:00h" phone="(79) 3045-4912"
        cellphone="" email="semdet@saocristovao.se.gov.br" />
</x-layout.orgaos>
