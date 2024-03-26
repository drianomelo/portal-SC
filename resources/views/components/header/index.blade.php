<x-header.search />

<header id="header"
    class=" top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300 fixed sm:px-3">

    <div class="relative">
        <a href="/">
            <img class="w-[450px] xl:w-[400px] lg:w-[500px] sm:w-[400px]"
                src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/logo.png" alt="Logo prefeitura de SC">
        </a>
    </div>

    {{-- RESPONSIVE MENU --}}
    <div
        class="fixed top-0 right-full w-full h-screen bg-[#080b1f] opacity-90 z-[9999] transition-all duration-300 background-menu-responsive">
    </div>
    <div class="fixed top-0 -right-full w-4/5 h-screen bg-[#111C5A] z-[99999] transition-all duration-300" id="menu">
        <nav class="w-full h-full gap-12 ">
            <ul class="flex flex-col items-center pt-32 border-b">
                <x-header.item-responsive :href="route('municipio.saocristovao')" nome="Município" />
                <x-header.item-responsive href="" nome="Órgãos" />
                <x-header.item-responsive href="" nome="Conselhos " />
                <x-header.item-solo-responsive href="https://transparencia.saocristovao.se.gov.br/municipio"
                    nome="Transparência" />
                <x-header.item-responsive href="" nome="Contribuinte" />
                <x-header.item-responsive href="" nome="Servidor" />
                <x-header.item-responsive href="" nome="Sistemas" />
                <x-header.item-solo-responsive :href="route('ouvidoria')" nome="Ouvidoria / FAQ" />
            </ul>

            {{-- <div class="w-3/4 mx-auto text-center">
                <span class="text-3xl font-bold text-yellow-400 ">Acesso Rápido</span>

                <div class="flex flex-wrap items-center justify-center gap-6 pt-4 mt-10">
                    <x-header.rounded-link-responsive
                        href="https://transparencia.saocristovao.se.gov.br/municipio/covid19" label="Covid-19"
                        icon="truck-medical" />
                    <x-header.rounded-link-responsive
                        href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml"
                        label="IPTU 2024" icon="tree-city" />
                    <x-header.rounded-link-responsive
                        href="https://transparencia.saocristovao.se.gov.br/municipio/diario_oficial"
                        label="Diário Oficial" icon="newspaper" />
                    <x-header.rounded-link-responsive
                        href="https://transparencia.saocristovao.se.gov.br/municipio/editais" label="Editais"
                        icon="pen-to-square" />
                    <x-header.rounded-link-responsive href="" label="Licenças" icon="file-signature" />
                    <x-header.rounded-link-responsive
                        href="https://transparencia.saocristovao.se.gov.br/municipio/licitacoes" label="Licitações"
                        icon="gavel" />
                    <x-header.rounded-link-responsive href="" label="Credenciamneto" icon="folder-tree" />
                    <x-header.rounded-link-responsive href="" label="Planos Municipais" icon="pen-fancy" />
                    <x-header.rounded-link-responsive
                        href="https://transparencia.saocristovao.se.gov.br/municipio/atos_normativos"
                        label="Processos e Atos" icon="scale-balanced" />
                </div>
            </div> --}}
        </nav>
    </div>

    {{-- DESKTOP MENU --}}
    <div class="flex items-center gap-5">
        <nav class="lg:hidden">
            <ul class="flex items-center gap-5">
                <x-header.item :href="route('municipio.saocristovao')" nome="Município" />
                <x-header.item href="" nome="Órgãos" />
                <x-header.item href="" nome="Conselhos" />
                <x-header.item-solo href="https://transparencia.saocristovao.se.gov.br/municipio"
                    nome="Transparência" />
                <x-header.item href="" nome="Contribuinte" />
                <x-header.item href="" nome="Servidor" />
                <x-header.item href="" nome="Sistemas" />
                <x-header.item-solo :href="route('ouvidoria')" nome="Ouvidoria / FAQ" />
            </ul>
        </nav>

        <div class="w-[1px] h-5 bg-white opacity-40 lg:hidden"></div>

        <div class="relative flex items-center gap-3">
            <div class="relative hidden lg:block z-[99999]">
                <x-rounded-button icon="bars" id="btn-menu" title="Menu"
                    class="bg-yellow-400 border-yellow-500 rounded-button" href="" />
            </div>

            <div class="relative group lg:hidden">
                <x-rounded-button icon="bars" id="quick-access" title="Acesso Rápido"
                    class="bg-yellow-400 border-yellow-500 rounded-button" href="" />

                <div
                    class="absolute top-0 flex flex-col gap-2 pt-2 transition-all duration-500 opacity-0 group-hover:top-12 group-hover:opacity-100 ">
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

            <div class="sm:hidden">
                <x-rounded-button icon="magnifying-glass" id="search-button" title="Pesquisar"
                    class="group-hover:bg-yellow-400 group-hover:border-yellow-500 rounded-button" href="" />
            </div>

            <div class="sm:hidden">
                <x-rounded-button icon="location-dot" title="CEP" id="cep-button" :href="route('cep')"
                    class="rounded-button" />
            </div>
        </div>
    </div>
</header>
