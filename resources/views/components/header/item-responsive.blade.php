<li class="w-full overflow-auto border-t cursor-pointer item-responsive first:border-0">
    <div class="flex items-center justify-between gap-3 px-5 pt-4 pb-4">
        <i class="text-sm text-white transition-all duration-300 icon-responsive fa-solid fa-angles-left"></i>
        <h3 class="py-0 text-lg font-semibold text-white outline-none">{{ $nome }}</h3>
    </div>
    <div class="hidden">
        @if ($nome === 'Órgãos')
            <a href="{{ route('orgaos.semas') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Assistência
                Social - SEMAS</a>
            <a href="{{ route('orgaos.cgm') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Controladoria
                Geral do Município
                - CGM</a>
            <a href="{{ route('orgaos.semdes') }}" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Defesa
                Social - SEMDES</a>
            <a href="{{ route('orgaos.semdet') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Desenvolvimento
                Econômico e do
                Trabalho - SEMDET</a>
            <a href="{{ route('orgaos.semed') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Educação
                - SEMED</a>
            <a href="{{ route('orgaos.semel') }}" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Esporte
                e Lazer - SEMEL</a>
            <a href="{{ route('orgaos.semfop') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Fazenda,
                Orçamento e
                Planejamento - SEMFOP</a>
            <a href="{{ route('orgaos.gapre') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Gabinete
                do Prefeito -
                GAPRE</a>
            <a href="{{ route('orgaos.gabvp') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Gabinete
                do Vice-Prefeito -
                GABVP</a>
            <a href="{{ route('orgaos.segov') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Governo
                e Gestão - SEGOV</a>
            <a href="{{ route('orgaos.seminfra') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Infraestrutura
                - SEMINFRA</a>
            <a href="{{ route('orgaos.semma') }}" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Meio
                Ambiente - SEMMA</a>
            <a href="{{ route('orgaos.pgm') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Procuradoria
                Geral do
                Município- PGM</a>
            <a href="{{ route('orgaos.sms') }}" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Saúde
                - SMS</a>
            <a href="{{ route('orgaos.semsurb') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Serviços
                Urbanos - SEMSURB</a>
            <a href="{{ route('orgaos.fumctur') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Fundação
                Minicipal de Cultura
                e Turismo - FUMCTUR</a>
            <a href="{{ route('orgaos.saae') }}" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Serviço
                Autônomo de Água e
                Esgoto - SAAE</a>
            <a href="{{ route('orgaos.smtt') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Superintêndencia
                Municipal de
                Trânsito e Transporte - SMTT</a>
        @elseif ($nome === 'Município')
            <a href="{{ route('municipio.saocristovao') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">
                São Cristóvão</a>
            <a href="{{ route('municipio.prefeito') }}" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">
                O Prefeito</a>
            <a href="{{ route('municipio.viceprefeito') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">
                Vice-Prefeito</a>
            <a href="{{ route('municipio.prefeitura') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">
                Prefeitura</a>
        @elseif($nome === 'Contribuinte')
            <a target="_blank"
                href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">IPTU</a>
            <a href="{{ route('contribuinte.itbi') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">ITBI</a>
            <a target="_blank" href="https://saocristovaose.webiss.com.br"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">ISS</a>
            <a target="_blank" href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">TLF</a>
            <a href="" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">UFM</a>
            <a target="_blank"
                href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/prefWeb/mercantil/cartaoInscricaoMunicipal/cartaoInscricaoMunicipal.xhtml"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Cartão
                de Inscrição Municipal</a>
            <a target="_blank"
                href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/ISENÇÃODE_IPTU.pdf"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Isenção
                de IPTU</a>
            <a target="_blank" href="{{ route('contribuinte.reemissao-de-iptu') }}"
                class="relative flex items-center justify-between text-sm text-white transition-all duration-300 opacity-100 whitespace-nowrap subitem">
                Reemissão
                de IPTU
            </a>
            <a target="_blank" href="{{ route('contribuinte.transacao') }}"
                class="relative flex items-center justify-between text-sm text-white transition-all duration-300opacity-100 whitespace-nowrap subitem">
                Transação
            </a>
            <a target="_blank" href="{{ route('contribuinte.requerimentos') }}"
                class="relative flex items-center justify-between text-sm text-white transition-all duration-300opacity-100 whitespace-nowrap subitem">
                Requerimentos
            </a>
            <a target="_blank" href="{{ route('contribuinte.certidoes') }}"
                class="relative flex items-center justify-between text-sm text-white transition-all duration-300opacity-100 whitespace-nowrap subitem">
                Certidões
            </a>
        @elseif ($nome === 'Servidor')
            <a href="https://servicos.govnet.com.br/#/login?ug=280670199999" target="_blank"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Contracheque</a>
            <a href="https://anexos.saocristovao.se.gov.br/arquivos/portal/servidor/Decreto_Municipal_PDV.pdf"
                target="_blank" class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Programa
                de Desligamento
                Voluntário - PDV</a>
            <a target="_blank"
                href="https://anexos.saocristovao.se.gov.br/storage/files/2/Servidor/REQUERIMENTO_FUNCIONARIO.pdf"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Requerimento</a>
        @elseif ($nome === 'Sistemas')
            {{-- <a target="_blank" href=""
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Portal
                de Aplicação</a>
            <a target="_blank" href="https://ditin.saocristovao.se.gov.br"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Portal
                da DITIN</a> --}}
            <a target="_blank" href="https://portalsei.saocristovao.se.gov.br"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Portal
                SEI</a>
            <a target="_blank" href="http://helpdesk.saocristovao.se.gov.br"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Help
                Desk</a>
            <a target="_blank" href="https://prefeituras.se.gov.br"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">E-mail
                Institucional</a>
            <a target="_blank" href="https://govnet.com.br/login"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Govnet
                SIAFIC</a>
            <a target="_blank" href="http://esus.saocristovao.se.gov.br"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">eSUS</a>
        @elseif ($nome === 'Conselhos')
            <a href="{{ route('conselhos.cmgt') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Conselho
                Municipal de Gestão Territorial - CMGT</a>
            <a href="{{ route('conselhos.crafi') }}"
                class="px-5 py-3 text-sm text-white whitespace-nowrap subitem">Conselho
                de Reestruturação e Ajuste Fiscal - CRAFI</a>
        @endif
    </div>
</li>
