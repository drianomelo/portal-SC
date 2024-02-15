<x-header.search />

<header id="header"
    class="fixed top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300">
    <div>
        <a href="/">
            <img class="w-[400px]" src="{{ asset('img/logo.png') }}" alt="Logo prefeitura de SC">
        </a>
    </div>

    <div class="flex items-center gap-10">
        <nav>
            <ul class="flex gap-8">
                <x-header.item nome="Município" />
                <x-header.item nome="Órgãos" />
                <x-header.item nome="Transparência" />
                <x-header.item nome="Contribuinte" />
                <x-header.item nome="Servidor" />
                <x-header.item nome="Sistemas" />
                <x-header.item nome="Ouvidoria" />
            </ul>
        </nav>

        <div class="w-[1px] h-5 bg-white opacity-40"></div>

        <div class="flex items-center gap-3">
            <x-rounded-button link="false" icon="magnifying-glass" id="search-button" title="Pesquisar" />
            <div class="relative group">
                <x-rounded-button link="false" icon="menu" id="quick-access" title="Acesso Rápido"
                    class="bg-yellow-400 border-yellow-500 " />

                <div
                    class="absolute top-0 flex flex-col gap-4 transition-all duration-500 opacity-0 group-hover:top-14 group-hover:opacity-100 ">
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-0">
                        <i class="fa-solid fa-truck-medical"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[55px]">
                        <i class="fa-solid fa-tree-city"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[110px]">
                        <i class="fa-solid fa-newspaper"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[165px]">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[220px]">
                        <i class="fa-solid fa-file-signature"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[275px]">
                        <i class="fa-solid fa-gavel"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[330px]">
                        <i class="fa-solid fa-folder-tree"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[385px]">
                        <i class="fa-solid fa-pen-fancy"></i>
                    </a>
                    <a href="#"
                        class ="absolute top-0 flex items-center justify-center w-12 h-12 overflow-hidden text-blue-700 transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[440px]">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </a>
                </div>
            </div>
            <x-rounded-button link="true" icon="question" title="FAQ" />
        </div>
    </div>
</header>
