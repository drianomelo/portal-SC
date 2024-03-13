<li class="relative cursor-pointer item-responsive">
    <div class="flex items-center justify-center gap-4">
        <a href="{{ $href }}"
            class="py-0 text-2xl font-bold text-white">{{ $nome }}</a>
        <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300 lg:text-sm"></i>
    </div>
    <div class="flex-col menu-interno mt-2 hidden-item-menu bg-blue-950 rounded-md bg-opacity-90 p-3 gap-4 transition-all duration-300 top-[75px] xl:top-[55px] xl:py-2 xl:gap-2.5 lg:gap-3 lg:py-3"
        data-state="false">
        @if ($nome === 'Órgãos')
            <a href="{{ route('orgaos.semas') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Assistência
                Social - SEMAS</a>
            <a href="{{ route('orgaos.cgm') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Controladoria
                Geral do Município
                - CGM</a>
            <a href="{{ route('orgaos.semdes') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Defesa
                Social - SEMDES</a>
            <a href="{{ route('orgaos.semdet') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Desenvolvimento
                Econômico e do
                Trabalho - SEMDET</a>
            <a href="{{ route('orgaos.semed') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Educação
                - SEMED</a>
            <a href="{{ route('orgaos.semel') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Esporte
                e Lazer - SEMEL</a>
            <a href="{{ route('orgaos.semfop') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Fazenda,
                Orçamento e
                Planejamento - SEMFOP</a>
            <a href="{{ route('orgaos.gapre') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Gabinete
                do Prefeito -
                GAPRE</a>
            <a href="{{ route('orgaos.gabvp') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Gabinete
                do Vice-Prefeito -
                GABVP</a>
            <a href="{{ route('orgaos.segov') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Governo
                e Gestão - SEGOV</a>
            <a href="{{ route('orgaos.seminfra') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Infraestrutura
                - SEMINFRA</a>
            <a href="{{ route('orgaos.semma') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Meio
                Ambiente - SEMMA</a>
            <a href="{{ route('orgaos.pgm') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Procuradoria
                Geral do
                Município- PGM</a>
            <a href="{{ route('orgaos.sms') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Saúde
                - SMS</a>
            <a href="{{ route('orgaos.semsurb') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Serviços
                Urbanos - SEMSURB</a>
            <a href="{{ route('orgaos.fumctur') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Fundação
                Minicipal de Cultura
                e Turismo - FUMCTUR</a>
            <a href="{{ route('orgaos.saae') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Serviço
                Autônomo de Água e
                Esgoto - SAAE</a>
            <a href="{{ route('orgaos.smtt') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Superintêndencia
                Municipal de
                Trânsito e Transporte - SMTT</a>
        @elseif ($nome === 'Município')
            <a href="{{ route('municipio.saocristovao') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                São Cristóvão</a>
            <a href="{{ route('municipio.prefeito') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                O Prefeito</a>
            <a href="{{ route('municipio.viceprefeito') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                Vice-Prefeito</a>
            <a href="{{ route('municipio.prefeitura') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">
                Prefeitura</a>
        @elseif($nome === 'Transparência')
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">MUNICÍPIO</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">FMDCA</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">FUMCTUR</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SAAE</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SEMAS</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SEMED</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SEMMA</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SMS</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">SMTT</a>
        @elseif($nome === 'Contribuinte')
            <a target="_blank"
                href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">IPTU</a>
            <a href="{{ route('contribuinte.itbi') }}"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">ITBI</a>
            <a target="_blank" href="https://saocristovaose.webiss.com.br"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">ISS</a>
            <a target="_blank" href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">TLF</a>
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">UFM</a>
            <a target="_blank"
                href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/prefWeb/mercantil/cartaoInscricaoMunicipal/cartaoInscricaoMunicipal.xhtml"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Cartão
                de Inscrição Municipal</a>
            <a target="_blank"
                href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/ISENÇÃODE_IPTU.pdf"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Isenção
                de IPTU</a>
            <div
                class="relative flex items-center justify-between text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 item-extra text hover:opacity-100 whitespace-nowrap">
                Reemissão
                de IPTU <i class="fa-solid fa-caret-right"></i>

                <div
                    class="absolute hidden flex-col bg-blue-950 rounded-r-md bg-opacity-90 extra p-3 ml-5 gap-4 transition-all left-[151px] -top-[10px] xl:left-[119px]  lg:left-[150px]">
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/ReemissaoIPTU/LC%20Nº%2075-2023-REMISSÃO%20DE%20IPTU.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Lei</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/ReemissaoIPTU/REMISSÃO_IPTU_26062023.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Requerimento</a>
                </div>
            </div>
            <div
                class="relative flex items-center justify-between text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 item-extra text hover:opacity-100 whitespace-nowrap">
                Transação
                <i class="fa-solid fa-caret-right"></i>

                <div
                    class="absolute hidden flex-col bg-blue-950 rounded-r-md bg-opacity-90 extra p-3 ml-5 gap-4 transition-all left-[151px] -top-[10px] xl:left-[119px] lg:left-[150px]">
                    <a href="https://anexos.saocristovao.se.gov.br/arquivos/portal/contribuinte/termo_adesao_transacao/LEI%20491-2021-TRANSACAO.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Lei</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/IN%20001.2023%20PGM-TRANSAÇÃO%20INDIVIDUAL-BAIXA%20RENDA.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Transação
                        Individual Iniciativa da Procuradoria</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/Instrução%20Normativa%20Nº%20001-2023.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Proposta
                        de Transação Individual Iniciativa da Procuradoria</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/IN%20002.2023-PGM_Transacao%20Individual-INICIATIVA%20DO%20DEVEDOR.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Transação
                        Individual Iniciativa do Devedor</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/Instrução%20Normativa%20Nº%20002-2023.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Proposta
                        de Transação Individual Iniciativa do Devedor</a>
                </div>
            </div>
            <div
                class="relative flex items-center justify-between text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text item-extra hover:opacity-100 whitespace-nowrap">
                Requerimentos
                <i class="fa-solid fa-caret-right"></i>

                <div
                    class="absolute hidden flex-col bg-blue-950 rounded-r-md bg-opacity-90 extra p-3 ml-5 gap-4 transition-all left-[151px] -top-[10px] xl:left-[119px] lg:left-[150px]">
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/COMPENSACAO_DE_TRIBUTOS_MUNICIPAIS.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Compensação
                        de Tributos Municipais</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/REQUERIMENTO_PARCELAMENTO_ORDINARIO.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Parcelamento
                        Ordinário</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/IMUNIDADE_TRIBUTARIA.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Imunidade
                        Tributária</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/REQUERIMENTO_PRESCRICAO_DEBITOS_TRIBUTARIOS.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Prescrição
                        de Débitos Tributários</a>
                    <a href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/REQUERIMENTO_ATUALIZACAO_CADASTRAL_IMOBILIARIA.pdf"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Atualização
                        Cadastral Imobiliária</a>
                </div>
            </div>
            <div
                class="relative flex items-center justify-between text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text item-extra hover:opacity-100 whitespace-nowrap">
                Certidões
                <i class="fa-solid fa-caret-right"></i>

                <div
                    class="absolute hidden flex-col bg-blue-950 rounded-r-md bg-opacity-90 extra p-3 ml-5 gap-4 transition-all left-[151px] -top-[10px] xl:left-[119px] lg:left-[150px]">
                    <a href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/prefWeb/modulos/mercantil/certidaoNegativaCgm/certidaoNegativa.xhtml"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Negativa
                        de Débitos</a>
                    <a href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Positiva
                        com Efeito Negativa de Débitos</a>
                    <a href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Negativa
                        Imobiliaria de Débitos</a>
                    <a href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/certidaoPositivaComEfeitoNegativa/certidaoPositiva.xhtml"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Positiva
                        com Efeito Negativa
                        Imobiliaria de Débitos</a>
                    <a href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/certidaoIsencaoIptu/certidaoIsencaoIptu.xhtml"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Certidão
                        de Isenção de IPTU</a>
                    <a href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/publico/autenticacao/autenticacao.xhtml"
                        target="_blank"
                        class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Autenticidade
                        de Certidões</a>
                </div>
            </div>
        @elseif ($nome === 'Servidor')
            <a href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Contracheque</a>
            <a href="https://anexos.saocristovao.se.gov.br/arquivos/portal/servidor/Decreto_Municipal_PDV.pdf"
                target="_blank"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Programa
                de Desligamento
                Voluntário - PDV</a>
            <a target="_blank"
                href="https://anexos.saocristovao.se.gov.br/storage/files/2/Servidor/REQUERIMENTO_FUNCIONARIO.pdf"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Requerimento</a>
        @elseif ($nome === 'Sistemas')
            {{-- <a target="_blank" href=""
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Portal
                de Aplicação</a>
            <a target="_blank" href="https://ditin.saocristovao.se.gov.br"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Portal
                da DITIN</a> --}}
            <a target="_blank" href="https://portalsei.saocristovao.se.gov.br"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Portal
                SEI</a>
            <a target="_blank" href="http://helpdesk.saocristovao.se.gov.br"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Help
                Desk</a>
            <a target="_blank" href="https://prefeituras.se.gov.br"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">E-mail
                Institucional</a>
            <a target="_blank" href="https://govnet.com.br/login"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">Govnet
                SIAFIC</a>
            <a target="_blank" href="http://esus.saocristovao.se.gov.br"
                class="text-xs xl:text-[10px] xl:font-light lg:text-sm lg:font-medium text-white transition-all duration-300 opacity-50 text hover:opacity-100 whitespace-nowrap">eSUS</a>
        @endif
    </div>
</li>
