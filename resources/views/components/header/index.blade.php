<x-header.search />

<header id="header"
    class=" top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300
            @if ($name === 'index') fixed @else absolute @endif">

    <div class="relative ">
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
            <x-rounded-button link="true" icon="question" title="FAQ" />
            <div class="relative group">
                <x-rounded-button link="false" icon="menu" id="quick-access" title="Acesso Rápido"
                    class="bg-yellow-400 border-yellow-500 " />

                <div
                    class="absolute top-0 flex flex-col gap-4 transition-all duration-500 opacity-0 -z-50 group-hover:top-14 group-hover:opacity-100 group-hover:z-50">
                    <x-header.rounded-link href="" class="group-hover:top-[0px]" label="Covid-19"
                        icon="truck-medical" />
                    <x-header.rounded-link href="" class="group-hover:top-[55px]" label="IPTU 2024"
                        icon="tree-city" />
                    <x-header.rounded-link href="" class="group-hover:top-[110px]" label="Diário Oficial"
                        icon="newspaper" />
                    <x-header.rounded-link href="" class="group-hover:top-[165px]" label="Editais"
                        icon="pen-to-square" />
                    <x-header.rounded-link href="" class="group-hover:top-[220px]" label="Licenças"
                        icon="file-signature" />
                    <x-header.rounded-link href="" class="group-hover:top-[275px]" label="Licitações"
                        icon="gavel" />
                    <x-header.rounded-link href="" class="group-hover:top-[330px]" label="Credenciamneto"
                        icon="folder-tree" />
                    <x-header.rounded-link href="" class="group-hover:top-[385px]" label="Planos Municipais"
                        icon="pen-fancy" />
                    <x-header.rounded-link href="" class="group-hover:top-[440px]" label="Processos e Atos"
                        icon="scale-balanced" />
                </div>
            </div>
        </div>
    </div>
</header>
