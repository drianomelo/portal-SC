<div
    class="fixed top-0 right-full w-full h-screen bg-[#080b1f] opacity-90 z-[999] transition-all duration-300 background-menu-responsive">
</div>

<div class="fixed top-0 -right-[305px] flex gap-4 h-screen z-[9999] transition-all duration-300" id="menu">
    <div class="relative hidden lg:block z-[99999] mt-8">
        <x-rounded-button icon="bars" id="btn-menu" title="Menu"
            class="bg-yellow-400 border-yellow-500 rounded-button" href="" />
    </div>

    <nav class="w-[300px] h-full gap-12 bg-[#111C5A]">
        <ul class="flex flex-col items-center border-b">
            <x-header.item-responsive :href="route('municipio.saocristovao')" nome="Município" />
            <x-header.item-responsive href="" nome="Órgãos" />
            <x-header.item-responsive href="" nome="Conselhos" />
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

        <form action="#" class="px-4 mt-4" id="form-responsive">
            @csrf
            <div class="relative flex items-center justify-between p-1 bg-white rounded">
                <i class="p-2 text-gray-400 fa-solid fa-magnifying-glass"></i>
                <input class="w-full text-gray-400 border-0 outline-none placeholder:text-gray-400" type="text"
                    name="pesquisa" id="pesquisa" required>
                <button class="p-2 text-[10px] font-bold text-white uppercase bg-blue-900 rounded"
                    type="submit">Pesquisar</button>
            </div>
        </form>
    </nav>
</div>

<div
    class="fixed top-0 left-0 hidden w-full h-screen bg-[#080b1f] opacity-90 z-[999999] transition-all duration-300 background-modal">
</div>

<div
    class="fixed overflow-scroll max-h-[92%] flex-col rounded-lg hidden modal-menu-responsive left-2/4 top-8 -translate-x-2/4 bg-[#111C5A] z-[999999] w-[85%]">
    <div class="flex items-center gap-3 p-3 title-modal-responsive">
        <span class="font-bold text-white"></span>
        <i class="text-white fa-solid fa-angles-down text-[11px]"></i>
    </div>
</div>

@push('scripts')
    @vite('resources/js/menu-responsive.js')
@endpush
