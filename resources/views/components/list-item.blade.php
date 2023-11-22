@if ($nome === 'Órgãos')
    <li
        class="list-item relative transition-all duration-300 cursor-pointer
            before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:-bottom-5 before:transition-all
            ">
        <div class="flex items-center gap-2">
            <a href="#" class="font-bold text-white">{{ $nome }}</a>
            <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300"></i>
        </div>
        <div class="absolute flex-col hidden gap-3 inside-list top-16">
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Assistência Social - SEMAS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Controladoria Geral do Município
                - CGM</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Defesa Social - SEMDES</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Desenvolvimento Econômico e do
                Trabalho - SEMDET</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Educação - SEMED</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Esporte e Lazer - SEMEL</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Fazenda, Orçamento e
                Planejamento - SEMFOP</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Gabinete do Prefeito -
                GAPRE</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Gabinete do Vice-Prefeito -
                GABVP</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Governo e Gestão - SEGOV</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Infraestrutura - SEMINFRA</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Meio Ambiente - SEMMA</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Procuradoria Geral do
                Município- PGM</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Saúde - SMS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Serviços Urbanos - SEMSURB</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Fundação Minicipal de Cultura
                e Turismo - FUMCTUR</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Serviço Autônomo de Água e
                Esgoto - SAAE</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Superintêndencia Municipal de
                Trânsito e Transporte - SMTT</a>
        </div>
    </li>
@elseif ($nome === 'Transparência')
    <li
        class="list-item relative transition-all duration-300 cursor-pointer
            before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:-bottom-5 before:transition-all
            ">
        <div class="flex items-center gap-2">
            <a href="#" class="font-bold text-white">{{ $nome }}</a>
            <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300"></i>
        </div>
        <div class="absolute flex-col hidden gap-3 inside-list top-16">
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">MUNICÍPIO</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">FMDCA</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">FUMCTUR</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">SAAE</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">SEMAS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">SEMED</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">SEMMA</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">SMS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">SMTT</a>
        </div>
    </li>
@elseif ($nome === 'Contribuinte')
    <li
        class="list-item relative transition-all duration-300 cursor-pointer
    before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:-bottom-5 before:transition-all
    ">
        <div class="flex items-center gap-2">
            <a href="#" class="font-bold text-white">{{ $nome }}</a>
            <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300"></i>
        </div>
        <div class="absolute flex-col hidden gap-3 inside-list top-16">
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">IPTU</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">ITBI</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">ITBI - Incentivo</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">ISS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">TLF</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">UFM</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Cartão de Inscrição Municipal</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Isenção de IPTU</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Reemissão de IPTU</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Transação</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Requerimentos</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Certidões</a>
        </div>
    </li>
@elseif ($nome === 'Servidor')
    <li
        class="list-item relative transition-all duration-300 cursor-pointer
    before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:-bottom-5 before:transition-all
    ">
        <div class="flex items-center gap-2">
            <a href="#" class="font-bold text-white">{{ $nome }}</a>
            <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300"></i>
        </div>
        <div class="absolute flex-col hidden gap-3 inside-list top-16">
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">E-mail Institucional</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Contracheque</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Programa de Desligamento
                Voluntário - PDV</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Requisição de Material+</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Imposto de Renda</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Requerimento</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Help Desk</a>
        </div>
    </li>
@elseif ($nome === 'Contatos')
    <li
        class="list-item relative transition-all duration-300 cursor-pointer
            before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:-bottom-5 before:transition-all
            ">
        <div class="flex items-center gap-2">
            <a href="#" class="font-bold text-white">{{ $nome }}</a>
            <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300"></i>
        </div>
        <div class="absolute flex-col hidden gap-3 inside-list top-16">
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Assistência Social - SEMAS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Controladoria Geral do Município
                - CGM</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Defesa Social - SEMDES</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Desenvolvimento Econômico e do
                Trabalho - SEMDET</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Educação - SEMED</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Esporte e Lazer - SEMEL</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Fazenda, Orçamento e
                Planejamento - SEMFOP</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Gabinete do Prefeito -
                GAPRE</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Gabinete do Vice-Prefeito -
                GABVP</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Governo e Gestão - SEGOV</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Infraestrutura - SEMINFRA</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Meio Ambiente - SEMMA</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Procuradoria Geral do
                Município- PGM</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Saúde - SMS</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Serviços Urbanos - SEMSURB</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Fundação Minicipal de Cultura
                e Turismo - FUMCTUR</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Serviço Autônomo de Água e
                Esgoto - SAAE</a>
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Superintêndencia Municipal de
                Trânsito e Transporte - SMTT</a>
        </div>
    </li>
@elseif ($nome === 'Ouvidoria')
    <li
        class="list-item relative transition-all duration-300 cursor-pointer
            before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:-bottom-5 before:transition-all
            ">
        <div class="flex items-center gap-2">
            <a href="#" class="font-bold text-white">{{ $nome }}</a>
            <i class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300"></i>
        </div>
        <div class="absolute flex-col hidden gap-3 inside-list top-16">
            <a href="" class="text-xs text-white transition-all duration-300 opacity-50 hover:opacity-100 whitespace-nowrap">Ir à página da Ouvidoria</a>
        </div>
    </li>
@endif
