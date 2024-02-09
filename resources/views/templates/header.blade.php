<header class="fixed top-0 z-[9999] flex items-center justify-between w-full px-10 py-4 transition-all duration-300">
    <img class="w-[400px]" src="{{ asset('img/logo.png') }}" alt="Logo prefeitura de SC">
    <div class="flex items-center gap-12">
        <nav>
            <ul class="flex gap-9">
                <x-list-item nome="Órgãos" />
                <x-list-item nome="Transparência" />
                <x-list-item nome="Contribuinte" />
                <x-list-item nome="Servidor" />
                <x-list-item nome="Servidor" />
                <x-list-item nome="Ouvidoria" />
            </ul>
        </nav>
        <div class="w-[1px] h-5 bg-white opacity-40"></div>
        <div class="flex items-center gap-3">
            <x-rounded-button link="false" icon="magnifying-glass" id="search-button" title=""/>
            <x-rounded-button link="true" icon="question" title=""/>
        </div>
    </div>
</header>
