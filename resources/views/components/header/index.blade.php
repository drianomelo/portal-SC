<x-header.search />

<header id="header"
    class=" top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300
            fixed">

    <div class="relative ">
        <a href="/">
            <img class="w-[400px]" src="{{ asset('img/logo.png') }}" alt="Logo prefeitura de SC">
        </a>
    </div>

    <div class="flex items-center gap-6">
        <nav>
            <ul class="flex gap-8">
                <x-header.item :href="route('municipio.saocristovao')" nome="Município" />
                <x-header.item href="" nome="Órgãos" />
                <x-header.item href="" nome="Conselhos " />
                <x-header.item-solo href="https://transparencia.saocristovao.se.gov.br/municipio" nome="Transparência" />
                <x-header.item href="" nome="Contribuinte" />
                <x-header.item href="" nome="Servidor" />
                <x-header.item href="" nome="Sistemas" />
                <x-header.item-solo :href="route('ouvidoria')" nome="Ouvidoria" />
            </ul>
        </nav>

        <div class="w-[1px] h-5 bg-white opacity-40"></div>

        <div class="flex items-center gap-3">
            <div class="relative group">
                <x-rounded-button link="false" icon="menu" id="quick-access" title="Acesso Rápido"
                    class="bg-yellow-400 border-yellow-500 " />

                <div
                    class="absolute top-0 flex flex-col gap-2 pt-2 transition-all duration-500 opacity-0 group-hover:top-12 group-hover:opacity-100 ">
                    <x-header.rounded-link href="" label="Covid-19" icon="truck-medical" />
                    <x-header.rounded-link href="" label="IPTU 2024" icon="tree-city" />
                    <x-header.rounded-link href="" label="Diário Oficial" icon="newspaper" />
                    <x-header.rounded-link href="" label="Editais" icon="pen-to-square" />
                    <x-header.rounded-link href="" label="Licenças" icon="file-signature" />
                    <x-header.rounded-link href="" label="Licitações" icon="gavel" />
                    <x-header.rounded-link href="" label="Credenciamneto" icon="folder-tree" />
                    <x-header.rounded-link href="" label="Planos Municipais" icon="pen-fancy" />
                    <x-header.rounded-link href="" label="Processos e Atos" icon="scale-balanced" />
                </div>
            </div>
            <x-rounded-button link="false" icon="magnifying-glass" id="search-button" title="Pesquisar" />
            <x-rounded-button link="true" icon="question" title="FAQ" />
        </div>
    </div>
</header>
