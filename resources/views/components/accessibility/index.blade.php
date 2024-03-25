<div class="fixed z-[999] bottom-24 left-6 sm:hidden">
    <div class="absolute flex w-52 -z-50 group">
        <div id="btn-accessibility"
            class="absolute flex items-center justify-center w-16 h-16 bg-blue-900 border-2 border-transparent rounded-full cursor-pointer left-3 top-2/4 -translate-y-2/4 group-hover:border-white">
            <i class="p-1 text-3xl text-white border-2 border-white rounded-full fa-solid fa-universal-access"></i>
        </div>
        <h5
            class="relative opacity-0 pr-1 py-4 pl-[90px] text-xs font-semibold -z-50 text-white rounded-md group-hover:bg-blue-900 group-hover:opacity-100">
            Personalize suas opções de acessibilidade
        </h5>
    </div>
</div>

<div id="menu-accessibility"
    class="fixed hidden-menu-accessibility left-12 w-[350px] bg-white rounded-md  shadow-md transition-all duration-300">
    <header class="w-full p-4 bg-blue-900 rounded-t-md">
        <div class="flex justify-between mb-4">
            <img class="w-20" src="https://transparencia.saocristovao.se.gov.br/imagens/logo_rodape.png"
                alt="Logo Prefeitura de São Cristóvão">

            <button id="close-accessibility">
                <i class="text-lg text-white fa-solid fa-xmark"></i>
            </button>
        </div>

        <h5 class="mb-4 text-xl text-white">Opções personalizadas</h5>

        <h6 class="mb-10 text-xs font-light text-white">Bem-vindo à barra de ferramentas! Ajuste as opções
            abaixo para atender às suas necessidades de acessibilidade.</h6>
    </header>

    <div class="flex flex-wrap gap-3 p-3 mx-auto mb-4 -mt-8 bg-white rounded-sm shadow-md w-[90%]"
        id="body-menu">
        <button id="fonte" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-font"></i></h5>
            <h5 class="text-[10px] font-bold text-zinc-900">Fonte:</h5>
            <h5 class="text-[10px] font-semibold text-zinc-500 name">Fonte</h5>
        </button>

        <button id="aumentar" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-magnifying-glass"></i></h5>
            <h5 class="text-[10px] font-bold text-zinc-900">Tamanho Fonte:</h5>

            <h5 class="text-[10px] font-semibold text-zinc-500 percentage">Tamanho Fonte</h5>
        </button>
        <button id="espacamento" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-text-width"></i></h5>
            <h5 class="text-[10px] font-bold text-zinc-900">Espaçamento Fonte:</h5>

            <h5 class="text-[10px] font-semibold text-zinc-500 letter">Espaçamento Fonte</h5>
        </button>
        <button id="cursor" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-arrow-pointer"></i></h5>
            <h5 class="text-[10px] font-bold text-zinc-900">Alterar Cursor:</h5>

            <h5 class="text-[10px] font-semibold text-zinc-500 name-cursor">Alterar Cursor</h5>
        </button>
        <button id="tema" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-circle-half-stroke"></i></h5>
            <h5 class="text-[10px] font-bold text-zinc-900">Alterar Tema:</h5>

            <h5 class="text-[10px] font-semibold text-zinc-500 theme">Alterar Tema</h5>
        </button>
        <button id="restaurar" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-rotate-right"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500">Restaurar</h5>
        </button>
    </div>

    <div class="flex flex-col p-3 mx-auto mb-4 -mt-8 bg-white rounded-sm shadow-md w-[90%] hidden" id="nav-menu">

        <a href="#inicio" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                <i class="fa-solid fa-code"></i>
            </div>
            Início
        </a>
        <a href="#ultimas-publicacoes" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Últimas publicações
        </a>
        <a href="#informacoes" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Informações
        </a>
        <a href="#pub-gabinete" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Publicações Gabinete
        </a>
        <a href="#pub-saude" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Publicações Saúde
        </a>
        <a href="#pub-fumctur" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Publicações Fumctur
        </a>
        <a href="#pub-infraestrutura" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Publicações Infraestrutura
        </a>
        <a href="#videos" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Vídeos
        </a>
        <a href="#videos" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                H1</div>
            Vídeos
        </a>
        <a href="#rodape" class="flex items-center gap-3 pb-3 text-sm">
            <div
                class="flex items-center font-bold justify-center w-6 h-6 p-1.5 text-[11px] bg-blue-900 rounded-full text-white">
                <i class="fa-solid fa-code"></i>
            </div>
            Rodapé
        </a>
    </div>

    <button class="flex w-[90%] items-center justify-center gap-2 p-3 mx-auto mb-4 bg-gray-100 rounded"
        id="change-body">
        <i class="text-sm fa-solid fa-circle-info text-zinc-500"></i>
        <h5 class="text-[10px] font-semibold text-zinc-500">Navegar</h5>
    </button>
</div>
