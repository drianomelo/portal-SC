<x-header.search />

<header id="header"
    class=" top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300
            fixed">

    <div class="relative">
        <a href="/">
            <img class="w-[400px] xl:w-[350px] lg:w-[400px]" src="{{ asset('img/logo.png') }}" alt="Logo prefeitura de SC">
        </a>
    </div>

    <div class="flex items-center gap-5 lg:hidden">
        <nav>
            <ul class="flex items-center gap-5">
                <x-header.item :href="route('municipio.saocristovao')" nome="Município" />
                <x-header.item href="" nome="Órgãos" />
                {{-- <x-header.item href="" nome="Conselhos " /> --}}
                <x-header.item-solo href="https://transparencia.saocristovao.se.gov.br/municipio"
                    nome="Transparência" />
                <x-header.item href="" nome="Contribuinte" />
                <x-header.item href="" nome="Servidor" />
                <x-header.item href="" nome="Sistemas" />
                <x-header.item-solo :href="route('ouvidoria')" nome="Ouvidoria / FAQ" />
            </ul>
        </nav>

        <div class="w-[1px] h-5 bg-white opacity-40"></div>

        <div class="flex items-center gap-3">
            <div class="relative group">
                <x-rounded-button icon="bars" id="quick-access" title="Acesso Rápido"
                    class="bg-yellow-400 border-yellow-500 rounded-button" href="" />

                <div
                    class="absolute top-0 flex flex-col gap-2 pt-2 transition-all duration-500 opacity-0 group-hover:top-10 group-hover:opacity-100 ">
                    <x-header.rounded-link href="https://transparencia.saocristovao.se.gov.br/municipio/covid19"
                        label="Covid-19" icon="truck-medical" />
                    <x-header.rounded-link
                        href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml"
                        label="IPTU 2024" icon="tree-city" />
                    <x-header.rounded-link href="https://transparencia.saocristovao.se.gov.br/municipio/diario_oficial"
                        label="Diário Oficial" icon="newspaper" />
                    <x-header.rounded-link href="https://transparencia.saocristovao.se.gov.br/municipio/editais"
                        label="Editais" icon="pen-to-square" />
                    <x-header.rounded-link href="" label="Licenças" icon="file-signature" />
                    <x-header.rounded-link href="https://transparencia.saocristovao.se.gov.br/municipio/licitacoes"
                        label="Licitações" icon="gavel" />
                    <x-header.rounded-link href="" label="Credenciamneto" icon="folder-tree" />
                    <x-header.rounded-link href="" label="Planos Municipais" icon="pen-fancy" />
                    <x-header.rounded-link href="https://transparencia.saocristovao.se.gov.br/municipio/atos_normativos"
                        label="Processos e Atos" icon="scale-balanced" />
                </div>
            </div>
            <x-rounded-button icon="magnifying-glass" id="search-button" title="Pesquisar"
                class="group-hover:bg-yellow-400 group-hover:border-yellow-500 rounded-button" href="" />
            <x-rounded-button icon="location-dot" title="CEP" id="cep-button" :href="route('cep')"
                class="rounded-button" />
        </div>
    </div>

    {{-- RESPONSIVE MENU --}}
    <div class="hidden lg:block">
        <x-rounded-button icon="bars" id="menu" title="Menu"
            class="bg-blue-800 border-blue-950 rounded-button" href="" />
    </div>

    <div class="fixed top-0 left-0 hidden w-full h-screen bg-grandient-bottom lg:block">
        <nav class="flex items-center justify-center w-full h-full">
            <ul class="flex flex-col items-center gap-5">
                <x-header.item :href="route('municipio.saocristovao')" nome="Município" />
                <x-header.item href="" nome="Órgãos" />
                {{-- <x-header.item href="" nome="Conselhos " /> --}}
                <x-header.item-solo href="https://transparencia.saocristovao.se.gov.br/municipio"
                    nome="Transparência" />
                <x-header.item href="" nome="Contribuinte" />
                <x-header.item href="" nome="Servidor" />
                <x-header.item href="" nome="Sistemas" />
                <x-header.item-solo :href="route('ouvidoria')" nome="Ouvidoria / FAQ" />
            </ul>
        </nav>
    </div>
</header>
