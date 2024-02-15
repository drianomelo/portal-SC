<x-layout.index title="Início">
    <!-- SECTION HOME -->
    <section
        class="w-[110%] h-[80vh] homee rounded-b-[35%] relative flex justify-center items-center
    before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]">

        <div class="min-w-[1200px] relative z-10 -mt-20">
            <h1 class="mb-12 text-5xl font-bold text-white"><span class="block text-7xl">São Cristóvão</span> espera por
                você
            </h1>
            <a href="https://turismosaocristovao-se.com.br"
                class="relative group flex items-center justify-center gap-20 overflow-hidden p-4 text-sm font-semibold text-white uppercase border-2 rounded w-fit
                        before:content-[''] before:absolute before:w-4 before:h-4 before:rounded-full before:bg-yellow-400 before:scale-0 before:transition-all before:duration-300
                        hover:border-yellow-500 hover:before:scale-[15]">

                <span class="opacity-0">
                    Clique aqui
                    <i class="ml-20 fa-solid fa-arrow-right-long"></i>
                </span>
                <span
                    class="absolute text-yellow-600 z-50 transition-all duration-300 -bottom-7 group-hover:bottom-[14.5px]">
                    Clique aqui
                    <i class="ml-20 fa-solid fa-arrow-right-long group-hover:animate-pulse"></i>
                </span>
                <span class="absolute z-50 transition-all duration-300 group-hover:-translate-y-10">
                    Clique aqui
                    <i class="ml-20 fa-solid fa-arrow-right-long"></i>
                </span>
            </a>
        </div>

    </section>

    <!-- CAROUSEL -->
    <div class="max-w-[1200px] mx-auto -mt-48">
        <div class="w-full mb-16 swiper">

            <div class="flex gap-4 mb-6">
                <div class="flex items-start">
                    <button
                        class="static mt-0 flex items-center justify-center h-full px-5 border-2 border-r-0 rounded rounded-r-none swiper-button-prev after:content-['']">
                        <i class="text-xs text-white fa-solid fa-chevron-left"></i>
                    </button>
                    <button
                        class="static mt-0 flex items-center justify-center h-full px-5 border-2 rounded rounded-l-none swiper-button-next after:content-['']">
                        <i class="text-xs text-white fa-solid fa-chevron-right"></i>
                    </button>
                </div>
                <div class="flex flex-col">
                    <p class="text-sm font-extrabold text-white">Últimas publicações</p>
                    <span class="text-xs font-light text-white opacity-60">As notícias mais recentes de São
                        Cristóvão</span>
                </div>
            </div>

            <div class="swiper-wrapper">
                <x-swiper-item noticia="Prefeitura decreta ponto facultativo no Carnaval" data="07/02/2024"
                    img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg" />
                <x-swiper-item
                    noticia="São Cristóvão dá início ao Carnaval dos Carnavais com muita animação nos bloquinhos da SMS e da SEMAS"
                    data="07/02/2024"
                    img="http://publicacao.saocristovao.se.gov.br/storage/post/sao-cristovao-da-inicio-ao-carnaval-dos-carnavais-com-muita-animacao-nos-bloquinhos-da-sms-e-da-semas-2024-02-10-65c7b435b8468.jpeg" />
                <x-swiper-item
                    noticia="‘Carnaval dos Carnavais’ reúne alegria e tradição no Centro Histórico de São Cristóvão"
                    data="07/02/2024"
                    img="http://publicacao.saocristovao.se.gov.br/storage/post/carnaval-dos-carnavais-reune-alegria-e-tradicao-no-centro-historico-de-sao-cristovao-2024-02-13-65cbf7e5d235f.jpeg" />
                <x-swiper-item
                    noticia="Equipe da Seminfra apresenta projetos de requalificação de praças e revitalização de atracadouro "
                    data="07/02/2024"
                    img="http://publicacao.saocristovao.se.gov.br/storage/post/equipe-da-seminfra-apresenta-projetos-de-requalificacao-de-pracas-e-revitalizacao-de-atracadouro-2024-02-07-65c3c0239e501.JPG" />
                <x-swiper-item
                    noticia="Programação dos Ofícios marca o início da celebração do Senhor dos Passos em São Cristóvão"
                    data="07/02/2024"
                    img="http://publicacao.saocristovao.se.gov.br/storage/post/programacao-dos-oficios-marca-o-inicio-da-celebracao-do-senhor-dos-passos-em-sao-cristovao-2024-02-02-65bd1a6ab007b.jpeg" />
            </div>

        </div>
    </div>

    <!-- BANNERS -->
    <section class="relative w-full mb-20 h-fit">
        <div
            class="absolute z-40 rounded-tr-[6rem] rounded-br-[6rem] min-w-[190px] informacoes left-0 h-full
                    before:content-[''] before:block before:w-full before:h-full before:rounded-tr-[6rem] before:rounded-br-[6rem] before:absolute before:top-0 before:left-0 before:bg-blue-950 before:opacity-[.85]">
        </div>

        <div class="pt-10 pb-24  max-w-[1200px] mx-auto overflow-hidden relative z-50">
            <div class="flex items-center justify-between w-full mx-auto">
                <x-title h2="Informações" p="Clique no banner que contém as informações que deseja" img="" />
                <x-button href="#" name="Ver Todos Banners" icon="eye" />
            </div>
            <div class="w-full my-8 swiperBanner">
                <div class="swiper-wrapper">
                    <a href="#">
                        <x-swiper-banner href="#" img="img/banner/governança publica long.png" />
                        <x-swiper-banner href="#" img="img/banner/castra-pet-long.png" />
                        <x-swiper-banner href="#" img="img/banner/paulo-gustavo-long.png" />
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-5 grid-banner">
                <x-banner href="#" img="img/banner/governança publica.png" />
                <x-banner href="#" img="img/banner/meio-ambiente.png" />
                <x-banner href="#" img="img/banner/LOA2024.jpeg" />
                <x-banner href="#" img="img/banner/paulo-gustavo.png" />
                <x-banner href="#" img="img/banner/bannerGuardaPet.jpg" />
                <x-banner href="#" img="img/banner/hinoMunicipal.jpeg" />
            </div>
        </div>

        <div class="absolute flex flex-col items-center gap-6 -right-4 top-2/4 -translate-y-2/4">
            <div
                class="relative before:content-[''] before:block before:w-full before:h-full before:rounded-s-full before:absolute before:top-0 before:left-0 before:bg-blue-950 before:opacity-[.85]">
                <img class="shadow-md rounded-s-full w-60 " src="{{ asset('img/informacoes.jpg') }}" alt="">
            </div>
            <div
                class="relative before:content-[''] before:block before:w-full before:h-full before:rounded-s-full before:absolute before:top-0 before:left-0 before:bg-blue-950 before:opacity-[.85]">
                <img class="shadow-md rounded-s-full w-60 " src="{{ asset('img/background.jpg') }}" alt="">
            </div>
            <div
                class="relative before:content-[''] before:block before:w-full before:h-full before:rounded-s-full before:absolute before:top-0 before:left-0 before:bg-blue-950 before:opacity-[.85]">
                <img class="shadow-md rounded-s-full w-60 "
                    src="http://publicacao.saocristovao.se.gov.br/storage/post/fasc-2023-palco-mestre-neca-vai-receber-grupos-de-cultura-popular-2023-11-27-6564dd4869166.jpg"
                    alt="">
            </div>
        </div>

        <div class="absolute flex items-center -mt-12 -ml-7">

        </div>
    </section>

    <!-- PUBLICAÇÕES GABINETE -->
    <section class="w-full mt-16 mb-24">
        <div class="flex justify-center pb-6 mb-8 border-b">
            <div class="min-w-[1200px] px-5 mx-auto flex justify-between items-center">
                <x-title img="{{ asset('img/noticia.png') }}" h2="Gabinete do Prefeito"
                    p="Veja aqui todas as novidades sobre o Gabinete do Prefeito de São Cristóvão" />
                <x-button href="#" name="Ver Todas Publicações" icon="eye" />
            </div>
        </div>
        <div class="flex justify-center w-full">
            <div class="flex gap-12 max-w-[1200px] mx-auto">
                <x-card-publicacao
                    src="http://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-assina-termos-de-cooperacao-com-a-ssp-para-fortalecer-seguranca-na-cidade-2023-11-30-65690b8e7a1ab.jpeg"
                    alt="teste"
                    title="Prefeitura de São Cristóvão assina termos de cooperação com a SSP para fortalecer segurança na cidade"
                    tag="gabinete" data="01/12/2023"
                    desc="Na manhã desta quinta-feira (30), a Prefeitura de São Cristóvão deu um passo significativo em direção à melhoria da segurança pública local ao firmar dois termos de cooperação com a Secretaria de Segurança Pública (SSP) do estado de Sergipe. Os termos assinados visam  fortalecer a integração entre a gestão municipal e as forças de segurança estadual, além da capacitação dos agentes de segurança local."
                    fotografo="Heitor Xavier" />
                <x-card-publicacao
                    src="http://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-assina-termos-de-cooperacao-com-a-ssp-para-fortalecer-seguranca-na-cidade-2023-11-30-65690b8e7a1ab.jpeg"
                    alt="teste"
                    title="Prefeitura de São Cristóvão assina termos de cooperação com a SSP para fortalecer segurança na cidade"
                    tag="gabinete" data="01/12/2023"
                    desc="Na manhã desta quinta-feira (30), a Prefeitura de São Cristóvão deu um passo significativo em direção à melhoria da segurança pública local ao firmar dois termos de cooperação com a Secretaria de Segurança Pública (SSP) do estado de Sergipe. Os termos assinados visam  fortalecer a integração entre a gestão municipal e as forças de segurança estadual, além da capacitação dos agentes de segurança local."
                    fotografo="Heitor Xavier" />
                <x-card-publicacao
                    src="http://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-assina-termos-de-cooperacao-com-a-ssp-para-fortalecer-seguranca-na-cidade-2023-11-30-65690b8e7a1ab.jpeg"
                    alt="teste"
                    title="Prefeitura de São Cristóvão assina termos de cooperação com a SSP para fortalecer segurança na cidade"
                    tag="gabinete" data="01/12/2023"
                    desc="Na manhã desta quinta-feira (30), a Prefeitura de São Cristóvão deu um passo significativo em direção à melhoria da segurança pública local ao firmar dois termos de cooperação com a Secretaria de Segurança Pública (SSP) do estado de Sergipe. Os termos assinados visam  fortalecer a integração entre a gestão municipal e as forças de segurança estadual, além da capacitação dos agentes de segurança local."
                    fotografo="Heitor Xavier" />
            </div>
        </div>
    </section>

    <!-- PUBLICAÇÕES SAÚDE -->
    <section class="w-full mb-24">
        <div class="flex justify-center pb-6 mb-8 border-b">
            <div class="min-w-[1200px] px-5 mx-auto flex justify-between items-center">
                <x-title img="{{ asset('img/saude.png') }}" h2="Saúde"
                    p="Veja aqui todas as novidades sobre a Saúde em São Cristóvão" />
                <x-button href="#" name="Ver Todas Publicações" icon="eye" />
            </div>
        </div>
        <div class="flex justify-center w-full">
            <div class="flex gap-12 max-w-[1200px] mx-auto">
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/novembro-azul-unidades-de-saude-de-sao-cristovao-realizam-acoes-de-conscientizacao-contra-cancer-de-prostata-2023-11-30-6568e03aa593b.jpeg"
                    alt="teste"
                    title="Novembro Azul: Unidades de saúde de São Cristóvão realizam ações de conscientização contra câncer de próstata"
                    tag="saúde" data="30/11/2023"
                    desc="A campanha do Novembro Azul faz deste o mês mundial de combate ao câncer de próstata. Preocupando-se com o cuidado e a saúde do homem, a Secretaria Municipal de Saúde de São Cristóvão realizou diversas ações de conscientização e prevenção nas Unidades Básicas de Saúde do município. "
                    fotografo="Heitor Xavier" />
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/novembro-azul-unidades-de-saude-de-sao-cristovao-realizam-acoes-de-conscientizacao-contra-cancer-de-prostata-2023-11-30-6568e03aa593b.jpeg"
                    alt="teste"
                    title="Novembro Azul: Unidades de saúde de São Cristóvão realizam ações de conscientização contra câncer de próstata"
                    tag="saúde" data="30/11/2023"
                    desc="A campanha do Novembro Azul faz deste o mês mundial de combate ao câncer de próstata. Preocupando-se com o cuidado e a saúde do homem, a Secretaria Municipal de Saúde de São Cristóvão realizou diversas ações de conscientização e prevenção nas Unidades Básicas de Saúde do município. "
                    fotografo="Heitor Xavier" />
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/novembro-azul-unidades-de-saude-de-sao-cristovao-realizam-acoes-de-conscientizacao-contra-cancer-de-prostata-2023-11-30-6568e03aa593b.jpeg"
                    alt="teste"
                    title="Novembro Azul: Unidades de saúde de São Cristóvão realizam ações de conscientização contra câncer de próstata"
                    tag="saúde" data="30/11/2023"
                    desc="A campanha do Novembro Azul faz deste o mês mundial de combate ao câncer de próstata. Preocupando-se com o cuidado e a saúde do homem, a Secretaria Municipal de Saúde de São Cristóvão realizou diversas ações de conscientização e prevenção nas Unidades Básicas de Saúde do município. "
                    fotografo="Heitor Xavier" />
            </div>
        </div>
    </section>

    <!-- PUBLICAÇÕES FUMCTUR -->
    <section class="w-full mb-24">
        <div class="flex justify-center pb-6 mb-8 border-b">
            <div class="min-w-[1200px] px-5 mx-auto flex justify-between items-center">
                <x-title img="{{ asset('img/fumctur.png') }}" h2="Cultura e Turismo"
                    p="Veja aqui todas as novidades sobre a FUMCTUR em São Cristóvão" />
                <x-button href="#" name="Ver Todas Publicações" icon="eye" />
            </div>
        </div>
        <div class="flex justify-center w-full">
            <div class="flex gap-12 max-w-[1200px] mx-auto">
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/deixou-saudades-ultimo-dia-do-fasc-no-palco-joao-bebe-agua-conta-com-artistas-locais-atracao-nacional-e-banda-internacional-2023-12-04-656e075a48b7c.jpg"
                    alt="teste"
                    title="Deixou saudades: último dia do Fasc no Palco João Bebe Água conta com artistas locais, atração nacional e banda internacional"
                    tag="fumctur" data="04/12/2023"
                    desc="Neste domingo aconteceu a terceira e última noite de apresentações musicais no Palco João Bebe Água. Para finalizar o Fasc em grande estilo o público pôde acompanhar uma diversidade de ritmos e artistas sergipanos, atrações nacionais e internacionais."
                    fotografo="Victor Balde" />
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/deixou-saudades-ultimo-dia-do-fasc-no-palco-joao-bebe-agua-conta-com-artistas-locais-atracao-nacional-e-banda-internacional-2023-12-04-656e075a48b7c.jpg"
                    alt="teste"
                    title="Deixou saudades: último dia do Fasc no Palco João Bebe Água conta com artistas locais, atração nacional e banda internacional"
                    tag="fumctur" data="04/12/2023"
                    desc="Neste domingo aconteceu a terceira e última noite de apresentações musicais no Palco João Bebe Água. Para finalizar o Fasc em grande estilo o público pôde acompanhar uma diversidade de ritmos e artistas sergipanos, atrações nacionais e internacionais."
                    fotografo="Victor Balde" />
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/deixou-saudades-ultimo-dia-do-fasc-no-palco-joao-bebe-agua-conta-com-artistas-locais-atracao-nacional-e-banda-internacional-2023-12-04-656e075a48b7c.jpg"
                    alt="teste"
                    title="Deixou saudades: último dia do Fasc no Palco João Bebe Água conta com artistas locais, atração nacional e banda internacional"
                    tag="fumctur" data="04/12/2023"
                    desc="Neste domingo aconteceu a terceira e última noite de apresentações musicais no Palco João Bebe Água. Para finalizar o Fasc em grande estilo o público pôde acompanhar uma diversidade de ritmos e artistas sergipanos, atrações nacionais e internacionais."
                    fotografo="Victor Balde" />
            </div>
        </div>
    </section>

    <!-- PUBLICAÇÕES INFRAESTRUTURA -->
    <section class="w-full mb-24">
        <div class="flex justify-center pb-6 mb-8 border-b">
            <div class="min-w-[1200px] px-5 mx-auto flex justify-between items-center">
                <x-title img="{{ asset('img/infraestrutura.png') }}" h2="Infraestrutura"
                    p="Veja aqui todas as novidades sobre a Infraestrutura em São Cristóvão" />
                <x-button href="#" name="Ver Todas Publicações" icon="eye" />
            </div>
        </div>
        <div class="flex justify-center w-full">
            <div class="flex gap-12 max-w-[1200px] mx-auto">
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-investe-mais-de-r-500-mil-em-obras-no-bairro-irineu-neri-2023-11-24-6560ba209df6e.JPG"
                    alt="teste"
                    title="Prefeitura de São Cristóvão investe mais de R$ 500 mil em obras no bairro Irineu Neri"
                    tag="infraestrutura" data="24/11/2023"
                    desc="Através da Secretaria Municipal de Infraestrutura (Seminfra), a Prefeitura de São Cristóvão está realizando importante obras que mudam a realidade dos moradores do bairro Irineu Neri. Com a recuperação da pavimentação da rua São Domingos e a obra de drenagem e pavimentação asfáltica da Av. Irineu Neri, a Prefeitura investe mais de 500 mil reais, oriundos de recursos próprios do município, em ações que valorizam o cidadão e melhoram a mobilidade urbana da cidade."
                    fotografo="Dani Santos" />
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-investe-mais-de-r-500-mil-em-obras-no-bairro-irineu-neri-2023-11-24-6560ba209df6e.JPG"
                    alt="teste"
                    title="Prefeitura de São Cristóvão investe mais de R$ 500 mil em obras no bairro Irineu Neri"
                    tag="infraestrutura" data="24/11/2023"
                    desc="Através da Secretaria Municipal de Infraestrutura (Seminfra), a Prefeitura de São Cristóvão está realizando importante obras que mudam a realidade dos moradores do bairro Irineu Neri. Com a recuperação da pavimentação da rua São Domingos e a obra de drenagem e pavimentação asfáltica da Av. Irineu Neri, a Prefeitura investe mais de 500 mil reais, oriundos de recursos próprios do município, em ações que valorizam o cidadão e melhoram a mobilidade urbana da cidade."
                    fotografo="Dani Santos" />
                <x-card-publicacao
                    src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-investe-mais-de-r-500-mil-em-obras-no-bairro-irineu-neri-2023-11-24-6560ba209df6e.JPG"
                    alt="teste"
                    title="Prefeitura de São Cristóvão investe mais de R$ 500 mil em obras no bairro Irineu Neri"
                    tag="infraestrutura" data="24/11/2023"
                    desc="Através da Secretaria Municipal de Infraestrutura (Seminfra), a Prefeitura de São Cristóvão está realizando importante obras que mudam a realidade dos moradores do bairro Irineu Neri. Com a recuperação da pavimentação da rua São Domingos e a obra de drenagem e pavimentação asfáltica da Av. Irineu Neri, a Prefeitura investe mais de 500 mil reais, oriundos de recursos próprios do município, em ações que valorizam o cidadão e melhoram a mobilidade urbana da cidade."
                    fotografo="Dani Santos" />
            </div>
        </div>
    </section>

    <!-- VIDEOS -->
    <section class="w-full mb-24">
        <div class="max-w-[1200px] mx-auto">
            <iframe class="w-full" height="600" src="https://www.youtube.com/embed/ADoCe-GyhNM?rel=0&showinfo=0"
                frameborder="0"></iframe>

            <div class="w-full mt-6 overflow-hidden swiperVideos">
                <div class="flex gap-4 mb-6">
                    <div class="flex items-start">
                        <button
                            class="static mt-0 flex items-center justify-center h-full px-5 border-2 border-blue-900  border-r-0 rounded rounded-r-none swiper-button-prev after:content-['']">
                            <i class="text-xs text-blue-900 fa-solid fa-chevron-left"></i>
                        </button>
                        <button
                            class="static mt-0 flex items-center justify-center h-full px-5 border-2 border-blue-900  rounded rounded-l-none swiper-button-next after:content-['']">
                            <i class="text-xs text-blue-900 fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-sm font-extrabold text-blue-900">Últimos vídeos</p>
                        <span class="text-xs font-light text-blue-900 opacity-90">Os vídeos mais recentes de São
                            Cristóvão</span>
                    </div>
                </div>

                <div id="videos" class="swiper-wrapper">

                </div>
            </div>
        </div>


    </section>
</x-layout.index>
