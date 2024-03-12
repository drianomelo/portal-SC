<x-layout.ouvidoria>
    <section
        class="w-[110%] h-[490px] bg-home rounded-b-[35%] relative flex justify-center items-center
     before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
     xl:w-[120%] xl:bg-home-xl">

        <div class="min-w-[1200px] relative z-10 mt-16 xl:mt-5">
            <h2 class="mb-6 text-6xl font-extrabold text-white">Ouvidoria Municipal</h2>

            <p class="w-2/4 mb-8 text-lg text-white">Dê <span class="font-bold text-yellow-400">voz</span> às suas
                sugestões, críticas e elogios. Contribua para uma cidade <span
                    class="font-bold text-yellow-400">melhor!</span></p>

            <button onclick="openModal(1)"
                class="relative  group peer flex items-center justify-center gap-20 overflow-hidden p-4 text-sm font-semibold text-white uppercase border-2 rounded w-fit
                        before:content-[''] before:absolute before:w-4 before:h-4 before:rounded-full before:bg-yellow-400 before:scale-0 before:transition-all before:duration-300
                        hover:border-yellow-500 hover:before:scale-[21]">

                <span class="opacity-0 text xl:text-xs">
                    Faça sua manifestação agora
                    <i class="ml-4 fa-solid fa-arrow-right-long"></i>
                </span>
                <span
                    class="absolute text text-yellow-600 z-50 transition-all duration-300 -bottom-7 group-hover:bottom-[15px] xl:text-xs">
                    Faça sua manifestação agora
                    <i class="ml-4 fa-solid fa-arrow-right-long group-hover:animate-pulse"></i>
                </span>
                <span class="absolute z-50 transition-all duration-300 text group-hover:-translate-y-10 xl:text-xs">
                    Faça sua manifestação agora
                    <i class="ml-4 fa-solid fa-arrow-right-long"></i>
                </span>
            </button>
        </div>
    </section>

    <div class="max-w-[1200px] mx-auto relative -translate-y-[70px] xl:-translate-y-[90px]">
        <div class="relative w-full pt-8 swiper swiperOuvidoria">
            <div class="absolute flex justify-between w-full mb-0 top-[21%]">
                <button
                    class="relative left-3  mt-0 flex items-center justify-center w-10 h-10 rounded-ee-2xl rounded-se-xl rotate-12 rounded-es-xl rounded-ss-2xl bg-yellow-400 swiper-button-prev after:content-['']">
                    <i class="text-xs text-white fa-solid fa-chevron-left -rotate-12"></i>
                </button>
                <button
                    class="relative mt-0 right-3 flex items-center justify-center w-10 h-10 rounded-ee-xl rounded-se-2xl -rotate-12 rounded-es-2xl rounded-ss-xl bg-yellow-400 swiper-button-next after:content-['']">
                    <i class="text-xs text-white fa-solid fa-chevron-right rotate-12"></i>
                </button>
            </div>

            <div class="swiper-wrapper">
                <x-ouvidoria.item id="" href="https://falabr.cgu.gov.br/web/home" icon="fa-solid fa-comments"
                    title="e-ouv"
                    desc="Canal integrado para encaminhamento de manifestações à Prefeitura Municipal de São Cristóvão e a órgãos e entidades do Poder Executivo Federal." />
                <x-ouvidoria.item id=""
                    href="https://municipioonline.com.br/se/prefeitura/saocristovao/cidadao/informacoes%27"
                    icon="fa-solid fa-circle-exclamation" title="e-sic"
                    desc="Permite que qualquer pessoa,
                    física ou jurídica, encaminhe pedidos de acesso à informação, acompanhe o prazo e receba a
                    resposta da solicitação realizada para órgãos e entidades do Executivo Federal." />
                <x-ouvidoria.item id="2" href="" icon="fa-solid fa-person-walking" title="sic"
                    desc="Para mais informações sobre o atendimento presencial clique aqui." />
                <x-ouvidoria.item id="3" href="" icon="fa-solid fa-file-lines" title="lai"
                    desc=" Regulamenta o direito fundamental, previsto na Constituição, de qualquer pessoa física ou
                    jurídica solicitar e receber informações públicas produzidas ou custodiadas pelos órgãos e entidades
                    públicos." />
                <x-ouvidoria.item id=""
                    href="https://anexos.saocristovao.se.gov.br/storage/files/1/CARTA_DE_SERVICOS-pref.pdf"
                    icon="fa-solid fa-envelope" title="Carta de Serviços"
                    desc="Repositório de todos os serviços realizados pela Prefeitura e foi criado pela Lei Federal nº 13.460,
                    de 26 de junho de 2017" />
                <x-ouvidoria.item id="" href="https://api.whatsapp.com/send?phone=5579998731806"
                    icon="fa-brands fa-whatsapp" title="Whatsapp"
                    desc="Entre em contato com a ouvidoria via Whatsapp." />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto -mt-6 mb-12 xl:mb-20 xl:-mt-10" id="perguntas">
        <div class="w-full mb-5">
            <x-title h2="Perguntas frequentes" p="Abaixo veja a resposta para algumas dúvidas frequentes"
                img="" />
        </div>
        <div class="flex flex-col items-center justify-center w-full gap-4">
            <x-ouvidoria.accordion-item question="Como proceder para emitir meu boleto de IPTU?"
                response="Para emitir o boleto de IPTU acesse o portal IPTU SÃO
                CRISTÓVÃO insira a inscrição imobiliária,
                os 3(três) primeiros dígitos do CPF e clique em entrar."
                link="https://gestor.tributosmunicipais.com.br/saocristovao/iptuexercicio.html" />
            <x-ouvidoria.accordion-item question="Como emitir Guias de ISS?"
                response="Para emitir a guia de ISS acesse saocristovaose.webiss.com.br/
                clique em cobrança, débitos, emissão de guias,
                seleciona o tipo de documento (CPF, CNPJ ou Inscrição Municipal),
                digite o número do documento selecionado,
                clique em buscar, selecione o débito e clique em gerar guias."
                link="https://saocristovaose.webiss.com.br/" />
            <x-ouvidoria.accordion-item question="Onde posso me cadastrar no Programa Bolsa Família?"
                response="Os pais ou responsáveis por aluno menor deverão se dirigir à unidade de
                ensino de sua preferência, munidos dos documentos necessários, e efetuar
                a matrícula. Caso o aluno seja maior de 18 anos ele mesmo poderá realizar
                sua matrícula. São documentos necessários à matrícula escolar:
                certidão de nascimento, comprovante de residência, carteira de vacinação
                (para alunos da educação infantil), guia de transferência ou declaração
                comprobatória de escolaridade para alunos egressos de outra unidade de
                ensino."
                link="" />
            <x-ouvidoria.accordion-item question="Como proceder para adquirir medicação pelo SUS?"
                response="O usuário é atendido pelo médico da rede básica, recebe sua prescrição e
                encaminha-se a Farmácia Básica."
                link="" />
            <x-ouvidoria.accordion-item question="O povoado Cardoso possui unidade básica de saúde?"
                response="Sim. A Unidade Manoel Jovino Cardoso dos Santos." link="" />
        </div>
    </div>

    <x-ouvidoria.modal name="Pesquisa de satisfação da Ouvidoria" id="1">
        <div class="p-4 pb-0">
            <p class="text-sm font-light text-gray-500 w-fit text dark:text-gray-400">Deixe aqui sua nota sobre o
                atendimento da ouvidoria:</p>

            <div id="input">
                <input name="nota" type=range min=0 max=10 value=0 step=1>
                <span>0</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span>8</span>
                <span>9</span>
                <span>10</span>
            </div>

            <p class="text-sm font-light text-gray-500 w-fit text dark:text-gray-400">Deixe aqui uma mensagem sobre o
                atendimento da ouvidoria:</p>

            <textarea class="w-full mt-2 border rounded-md border-zinc-300 placeholder:text-zinc-300" name="mensagem"
                class="form-control" cols="30" rows="4" placeholder="Digite aqui a mensagem... "> </textarea>

            <button type="submit" class="p-3 mt-2 text-xs font-bold text-white bg-blue-900 rounded-xl">Enviar</button>
        </div>
    </x-ouvidoria.modal>

    <x-ouvidoria.modal name="Serviço de Atendimento ao cidadão" id="2">
        <div class="flex flex-col gap-2 py-2 border-b hover:bg-zinc-100 border-zinc-200">
            <span
                class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Endereço</span>
            <span class="mx-5 text-zinc-400">Localização: Rua Pereira Lobo, 114 - Centro Histórico - 49.100-000</span>
        </div>
        <div class="flex flex-col gap-2 py-2 border-b hover:bg-zinc-100 border-zinc-200">
            <span class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Horário de
                Atendimento</span>
            <span class="mx-5 text-zinc-400">08:00 às 14:00h</span>
        </div>
        <div class="flex flex-col gap-2 py-2 border-b hover:bg-zinc-100 border-zinc-200">
            <span
                class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Telefones</span>
            <span class="mx-5 text-zinc-400">(79) 3045-4917</span>
        </div>
        <div class="flex flex-col gap-2 py-2 border-b hover:bg-zinc-100 border-zinc-200">
            <span
                class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Celular</span>
            <span class="mx-5 text-zinc-400">(79) 99873-1806</span>
        </div>
        <div class="flex flex-col gap-2 py-2 border-b hover:bg-zinc-100 border-zinc-200">
            <span
                class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Email</span>
            <span class="mx-5 text-zinc-400">ouvidoria@saocristovao.se.gov.br</span>
        </div>
        <div class="flex flex-col gap-2 py-2 border-b hover:bg-zinc-100 border-zinc-200">
            <span
                class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Responsável</span>
            <span class="mx-5 text-zinc-400">Manoel Messias de Andrade Gonçalves</span>
        </div>
    </x-ouvidoria.modal>

    <x-ouvidoria.modal name="Lei de Acesso à Informação" id="3">
        <div class="p-4">
            <p class="mb-3 text-sm font-light text-gray-500 w-fit text dark:text-gray-400">Escolha uma opção:</p>

            <div class="flex justify-center w-full gap-4">
                <button id="regulamentacao"
                    class="px-4 py-2 text-[10px] font-bold btn-lai text-white bg-blue-900 rounded-full">Regulamentação</button>
                <button id="classificados"
                    class="px-4 py-2 text-[10px] font-bold btn-lai text-white bg-blue-900 rounded-full">Classificados</button>
                <button id="desclassificados"
                    class="px-4 py-2 text-[10px] font-bold btn-lai text-white bg-blue-900 rounded-full">Desclassificados</button>
            </div>

            <table class="w-full mt-4">
                <thead>
                    <tr class="text-blue-900 bg-zinc-100 dark:bg-zinc-900">
                        <th class="p-1 pl-4 text-xs border text-start">
                            Ano
                        </th>
                        <th class="p-2 pl-4 text-xs border text-start">
                            Nome
                        </th>
                        <th class="p-2 pl-4 text-xs border text-start">
                            Exportar
                        </th>
                    </tr>
                </thead>
                <tbody class="corpo-modal-lai">

                </tbody>
            </table>
        </div>
    </x-ouvidoria.modal>

    <div class="fixed w-screen h-screen transition-all bg-black hidden-back-modal back-modal bg-opacity-80"></div>
</x-layout.ouvidoria>
