<x-header.search/>

<header id="header" class="fixed top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300">
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
            <x-rounded-button link="false" icon="menu" id="quick-access" title="Acesso Rápido"
                class="bg-yellow-400 border-yellow-500 " />
            <x-rounded-button link="true" icon="question" title="FAQ" />
        </div>
    </div>
</header>
