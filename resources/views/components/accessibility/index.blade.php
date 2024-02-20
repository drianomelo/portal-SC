<div class="fixed z-[9999] bottom-24 left-6">
    <div class="absolute flex w-52 -z-50 group">
        <button id="btn-accessibility"
            class="absolute w-16 h-16 bg-blue-900 border-2 border-transparent rounded-full left-3 top-2/4 -translate-y-2/4 group-hover:border-white">
            <i class="p-1 text-3xl text-white border-2 border-white rounded-full fa-solid fa-universal-access"></i>
        </button>
        <span
            class="relative opacity-0 pr-1 py-4 pl-[90px] text-xs font-semibold -z-50 text-white rounded-md group-hover:bg-blue-900 group-hover:opacity-100">
            Personalize suas opções de acessibilidade
        </span>
    </div>
</div>

<div id="menu-accessibility"
    class="fixed -z-[999] bottom-10 left-12 w-[350px] bg-white rounded-md opacity-0 shadow-md transition-all duration-300">
    <header class="w-full p-4 bg-blue-900 rounded-t-md">
        <div class="flex justify-between mb-4">
            <img class="w-20" src="https://transparencia.saocristovao.se.gov.br/imagens/logo_rodape.png"
                alt="Logo Prefeitura de São Cristóvão">

            <button id="close-accessibility">
                <i class="text-lg text-white fa-solid fa-xmark"></i>
            </button>
        </div>

        <h2 class="mb-4 text-xl text-white">Opções personalizadas</h2>

        <p class="mb-10 text-xs font-light text-white">Bem-vindo à barra de ferramentas! Ajuste as opções
            abaixo para atender o site às suas necessidades de acessibilidade.</p>
    </header>

    <div class="flex flex-wrap gap-3 p-3 mx-auto mb-4 -mt-8 bg-white rounded-sm shadow-md w-[90%]">
        <div class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <span class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-font"></i></span>
            <span class="text-[10px] font-semibold text-zinc-500">Fonte</span>
        </div>

        <div class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <span class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-magnifying-glass"></i></span>
            <span class="text-[10px] font-semibold text-zinc-500">Tamanho Fonte</span>
        </div>
        <div class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <span class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-text-width"></i></span>
            <span class="text-[10px] font-semibold text-zinc-500">Espaçamento Fonte</span>
        </div>
        <div class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <span class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-arrow-pointer"></i></span>
            <span class="text-[10px] font-semibold text-zinc-500">Alterar Cursor</span>
        </div>
        <div class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <span class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-circle-half-stroke"></i></span>
            <span class="text-[10px] font-semibold text-zinc-500">Alterar Tema</span>
        </div>
        <div class="flex flex-col items-center w-[139.5px] py-2 bg-gray-100 rounded">
            <span class="flex items-center justify-center w-10 h-10 mb-2 text-xl bg-blue-900 rounded-full"><i
                    class="text-white fa-solid fa-rotate-right"></i></span>
            <span class="text-[10px] font-semibold text-zinc-500">Restaurar</span>
        </div>

        <button class="flex items-center justify-center w-full gap-2 py-3 bg-gray-100 rounded">
            <i class="text-sm fa-solid fa-circle-info text-zinc-500"></i>
            <span class="text-[10px] font-semibold text-zinc-500">Navegar</span>
        </button>
    </div>
</div>
