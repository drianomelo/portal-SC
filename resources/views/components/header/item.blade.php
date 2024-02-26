<li
    class="relative transition-all duration-300 cursor-pointer group
            before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:bottom-3 before:transition-all
            hover:before:w-6">
    <div class="flex items-center gap-2 ">
        <a href="{{ $href }}" class="text-sm font-medium text-white py-7 text">{{ $nome }}</a>
        @if ($nome === 'Ouvidoria')
        @else
            <i
                class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300 group-hover:rotate-180"></i>
        @endif
    </div>
    <div
        class="absolute flex-col hidden bg-blue-950 rounded-md bg-opacity-90 p-3 gap-4 transition-all top-[75px] group-hover:flex ">
        @if ($nome === 'Órgãos')
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Assistência
                Social - SEMAS</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Controladoria
                Geral do Município
                - CGM</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Defesa
                Social - SEMDES</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Desenvolvimento
                Econômico e do
                Trabalho - SEMDET</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Educação
                - SEMED</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Esporte
                e Lazer - SEMEL</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Fazenda,
                Orçamento e
                Planejamento - SEMFOP</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Gabinete
                do Prefeito -
                GAPRE</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Gabinete
                do Vice-Prefeito -
                GABVP</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Governo
                e Gestão - SEGOV</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Infraestrutura
                - SEMINFRA</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Meio
                Ambiente - SEMMA</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Procuradoria
                Geral do
                Município- PGM</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Saúde
                - SMS</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Serviços
                Urbanos - SEMSURB</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Fundação
                Minicipal de Cultura
                e Turismo - FUMCTUR</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Serviço
                Autônomo de Água e
                Esgoto - SAAE</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Superintêndencia
                Municipal de
                Trânsito e Transporte - SMTT</a>
        @elseif ($nome === 'Município')
            <a href="{{ route('municipio.saocristovao') }}"
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                São Cristóvão</a>
            <a href="{{ route('municipio.prefeito') }}"
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                O Prefeito</a>
            <a href="{{ route('municipio.viceprefeito') }}"
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                Vice-Prefeito</a>
            <a href="{{ route('municipio.prefeitura') }}"
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                Prefeitura</a>
        @elseif($nome === 'Transparência')
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">MUNICÍPIO</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">FMDCA</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">FUMCTUR</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SAAE</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SEMAS</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SEMED</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SEMMA</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SMS</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SMTT</a>
        @elseif($nome === 'Contribuinte')
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">IPTU</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">ITBI</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">ITBI
                - Incentivo</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">ISS</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">TLF</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">UFM</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Cartão
                de Inscrição Municipal</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Isenção
                de IPTU</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Reemissão
                de IPTU</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Transação</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Requerimentos</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Certidões</a>
        @elseif ($nome === 'Servidor')
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Contracheque</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Programa
                de Desligamento
                Voluntário - PDV</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Requisição
                de Material+</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Imposto
                de Renda</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Requerimento</a>
        @elseif ($nome === 'Sistemas')
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Portal
                de Aplicação</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Portal
                da DITIN</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Portal
                SEI</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Help
                Desk</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">E-mail
                Institucional</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Govnet
                SIAFIC</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Sistema
                de Nota Fiscal (ISS)</a>
            <a href=""
                class="text-xs text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Sistema
                de IPTU</a>
        @endif
    </div>
</li>
