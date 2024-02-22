<div class="fixed z-[9999] bottom-24 left-6">
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
            abaixo para atender o site às suas necessidades de acessibilidade.</h6>
    </header>

    <div class="flex flex-wrap gap-3 p-3 mx-auto mb-4 -mt-8 bg-white rounded-sm shadow-md w-[90%]">
        <button id="fonte" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-font"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500 name">Fonte</h5>
        </button>

        <button id="aumentar" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-magnifying-glass"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500 percentage">Tamanho Fonte</h5>
        </button>
        <button id="espacamento" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-text-width"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500 letter">Espaçamento Fonte</h5>
        </button>
        <button id="cursor" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-arrow-pointer"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500 name-cursor">Alterar Cursor</h5>
        </button>
        <button id="tema" class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-circle-half-stroke"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500">Alterar Tema</h5>
        </button>
        <button class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <h5 class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-rotate-right"></i></h5>
            <h5 class="text-[10px] font-semibold text-zinc-500">Restaurar</h5>
        </button>

        <button class="flex items-center justify-center w-full gap-2 py-3 bg-gray-100 rounded">
            <i class="text-sm fa-solid fa-circle-info text-zinc-500"></i>
            <h5 class="text-[10px] font-semibold text-zinc-500">Navegar</h5>
        </button>
    </div>
</div>
