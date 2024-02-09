@extends('master')

@section('content')
    <!-- HOME -->
    <section
        class="home w-full h-[70vh] flex items-center justify-center
                before:content-[''] before:block before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-80 before:transition-all before:duration-300
                ">
        <div class="min-w-[1200px] relative z-10">
            <h1 class="mb-10 text-5xl font-bold text-white"><span class="block text-7xl">São Cristóvão</span> espera por você
            </h1>
            <a href=""
                class="group flex items-center gap-10 p-4 overflow-hidden  font-semibold border-2 border-white rounded-md w-fit relative
            before:content-[''] before:absolute before:w-full before:h-full before:bg-blue-900 before:-left-48 before:transition-all before:duration-300
           ">
                <span class="text-xs text-white uppercase">clicando
                    aqui</span>
                <i class="text-white fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- CAROUSEL -->
    <section class="carousel w-[1200px] relative -mt-40 mb-4 mx-auto">
        <div class="flex gap-4 mb-6">
            <div class="flex items-start">
                <button
                    class="flex items-center justify-center h-full px-4 border-2 border-r-0 rounded rounded-r-none glider__prev"
                    aria-label="Anterior">
                    <i class="text-xs text-white fa-solid fa-chevron-left"></i>
                </button>
                <button class="flex items-center justify-center h-full px-4 border-2 rounded rounded-l-none glider__next"
                    aria-label="Próximo">
                    <i class="text-xs text-white fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="flex flex-col">
                <p class="text-sm font-extrabold text-white">Últimas publicações</p>
                <span class="text-xs font-light text-white opacity-60">As notícias mais recentes de São Cristóvão</span>
            </div>
        </div>
        <div class="w-full glider">
            <x-carousel-item
                img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item
                img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item
                img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item
                img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item
                img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item
                img="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-decreta-ponto-facultativo-no-carnaval-2024-02-07-65c3943ccd28a.jpeg"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
        </div>
    </section>

    <!-- BANNERS -->
    <section>
        <div class="relative flex w-full">
            <div
                class="absolute rounded-tr-lg rounded-br-lg min-w-[190px] informacoes left-0 h-full
                    before:content-[''] before:block before:w-full before:h-full before:rounded-tr-lg before:rounded-br-lg before:absolute before:top-0 before:left-0 before:bg-blue-950 before:opacity-[.85]">
            </div>
            <div class="pt-10 pb-24 max-w-[1200px] mx-auto">
                <x-title h2="Informações" p="Clique no banner que contém as informações que deseja" img="" />
                <div class="grid grid-cols-3 gap-5 mt-4">
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                    <x-banner href="#" img="img/banner/governança publica.png" />
                </div>
            </div>
        </div>
        <div class="flex items-center -mt-36 -ml-7">
            <div
                class="border-4 border-blue-950 rotate-12 bg-blue-500 rounded-full h-60 w-60 bg-[url('http://publicacao.saocristovao.se.gov.br/storage/post/fasc-2023-palco-mestre-neca-vai-receber-grupos-de-cultura-popular-2023-11-27-6564dd4869166.jpg')] bg-cover bg-center">
            </div>
            <div class="flex items-center gap-8">
                <div class="h-[1.5px] w-[500px] bg-gray-200"></div>
                <x-button href="#" name="Ver Mais Informações" icon="arrow-right" />
            </div>
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
    {{-- <section class="w-full">
        <div class="max-w-[1200px] mx-auto">
            <iframe class="w-full" src="https://www.youtube.com/embed/{{$videos[0]['id']['videoId']}}" frameborder="0"></iframe>
        </div>
        <div class="w-full glider">
            @foreach ($videos as $video)
                <x-carousel-item-video src="{{$video['snippet']['thumbnails']['default']['url']}}"/>
            @endforeach
        </div>
    </section> --}}
@endsection

@section('scripts')
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: '3',
            slidesToScroll: '1',

            arrows: {
                prev: '.glider__prev',
                next: '.glider__next'
            }
        });
    </script>
@endsection
