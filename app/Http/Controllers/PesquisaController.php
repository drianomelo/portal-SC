<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\PaginaInterna;
use Illuminate\Support\Str;
use Normalizer;

class PesquisaController extends Controller
{

    public function pesquisa($input) {
        $noticiasFiltradas = $this->noticias($input);
        $paginasInternasFiltradas = $this->paginaInterna($input);
        $paginasExternasFiltradas = $this->paginaExterna($input);

        $resultadoPesquisa = count($noticiasFiltradas) + count($paginasInternasFiltradas) + count($paginasExternasFiltradas);

        return view('pesquisa.index', compact('noticiasFiltradas','paginasInternasFiltradas', 'paginasExternasFiltradas', 'resultadoPesquisa', 'input'));
    }

    public function noticias($input) {
        $apiController = new ApiController();
        $noticiasFiltradas = $apiController->getApi('noticias/input/' . $input);

        return $noticiasFiltradas;
    }

    public function paginaInterna($input) {
        $paginasInternas = array(
            new PaginaInterna("/municipio/saocristovao", "Município - São Cristóvão", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/saocristovao.jpg", 'municipio'),
            new PaginaInterna("/municipio/prefeito", "Município - O Prefeito", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeito.jpeg", 'municipio'),
            new PaginaInterna("/municipio/vici-prefeito", "Município - O Vice-Prefeito", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeito.jpeg", 'municipio'),
            new PaginaInterna("/municipio/prefeitura", "Município - Prefeitura", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/profile/prefeitura.jpg", 'municipio'),
            new PaginaInterna("/orgaos/semas", "Órgãos - Secretaria Municipal da Assistência Social - semas", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semas.png", 'orgao'),
            new PaginaInterna("/orgaos/cgm", "Órgãos - Controladoria Geral do Município - cgm", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/cgm.png", 'orgao'),
            new PaginaInterna("/orgaos/semdes", "Órgãos - Secretaria Municipal da Defesa Social - semdes", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semdes.png", 'orgao'),
            new PaginaInterna("/orgaos/semdet", "Órgãos - Secretaria Municipal do Desenvolvimento Econômico e do Trabalho - semdet", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semdet.png", 'orgao'),
            new PaginaInterna("/orgaos/semed", "Órgãos - Secretaria Municipal da Educação - semed", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semed.png", 'orgao'),
            new PaginaInterna("/orgaos/semel", "Órgãos - Secretaria Municipal do Esporte e Lazer - semel", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semel.png", 'orgao'),
            new PaginaInterna("/orgaos/semfop", "Órgãos - Secretaria Municipal da Fazendo, Orçamento e Planejamento - semfop", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semfop.png", 'orgao'),
            new PaginaInterna("/orgaos/gapre", "Órgãos - Gabinete do Prefeito - gapre", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/gapre.png", 'orgao'),
            new PaginaInterna("/orgaos/gabvp", "Órgãos - Gabinete do Vice-Prefeito - gabvp", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/gapre.png", 'orgao'),
            new PaginaInterna("/orgaos/segov", "Órgãos - Secretaria Municipal do Governo e Gestão - segov", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/segov.png", 'orgao'),
            new PaginaInterna("/orgaos/seminfra", "Órgãos - Secretaria Municipal da Infraestrutura - seminfra", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/seminfra.png", 'orgao'),
            new PaginaInterna("/orgaos/semma", "Órgãos - Secretaria Municipal do Meio Ambiente - semma", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semma.png", 'orgao'),
            new PaginaInterna("/orgaos/pgm", "Órgãos - Procuradoria Geral do Município - pgm", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/pgm.png", 'orgao'),
            new PaginaInterna("/orgaos/sms", "Órgãos - Secretaria Municipal da Saúde - sms", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/sms.png", 'orgao'),
            new PaginaInterna("/orgaos/semsurb", "Órgãos - Secretaria Municipal dos Serviços Urbanos - semsurb", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/semsurb.png", 'orgao'),
            new PaginaInterna("/orgaos/fumctur", "Órgãos - Fundação Municipal de Cultura e Turismo - fumctur", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/fumctur.png", 'orgao'),
            new PaginaInterna("/orgaos/saae", "Órgãos - Serviço Autônomo de Água e Esgoto - saae", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/saae.png", 'orgao'),
            new PaginaInterna("/orgaos/smtt", "Órgãos - Superintêndencia Municipal de Trânsito e Transporte - smtt", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/orgaos/smtt.png", 'orgao'),
            new PaginaInterna("/conselhos/cmgt", "Conselhos - Conselho Municipal de Gestão Territorial - cmgt", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/conselhos/cmgt.png", 'conselho'),
            new PaginaInterna("/conselhos/crafi", "Conselhos - Conselho de Reestruturação e Ajuste Fiscal - crafi", "https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/conselhos/crafi.png", 'conselho'),
            new PaginaInterna("/contribuinte/itbi", "Contribuinte - Imposto sobre Transmissão de Bens Imóveis Inter Vivos - ITBI", "fa-person-shelter", 'icon'),
            new PaginaInterna("/contribuinte/ufm", "Contribuinte - Unidade Fiscal do Município - UFM", "fa-coins", 'icon'),
        );

        $paginasInternasFiltradas = array_filter($paginasInternas, function($pagina) use ($input) {
            return str_contains(strtolower($pagina->titulo), strtolower($input));
        });

        return $paginasInternasFiltradas;
    }

    public function paginaExterna($input) {
        $paginasInternas = array(
            new PaginaInterna("https://transparencia.saocristovao.se.gov.br/municipio", "Transparência Municipal", "fa-magnifying-glass", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml", "Contribuinte - Imposto sobre a Propriedade Predial e Territorial Urbana - IPTU", "fa-house-circle-check", 'icon'),
            new PaginaInterna("https://saocristovaose.webiss.com.br", "Contribuinte - Imposto sobre Serviços de Qualquer Natureza - ISS", "fa-money-bill-transfer", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/prefWeb/mercantil/cartaoInscricaoMunicipal/cartaoInscricaoMunicipal.xhtml", "Contribuinte - Cartão de Inscrição Municipal", "fa-address-card", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/ISEN%C3%87%C3%83ODE_IPTU.pdf", "Contribuinte - Isenção de IPTU", "fa-hand-holding-dollar", 'icon'),

            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/ReemissaoIPTU/LC%20N%C2%BA%2075-2023-REMISS%C3%83O%20DE%20IPTU.pdf", "Contribuinte - Reemissão de IPTU - Lei", "fa-section", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/ReemissaoIPTU/REMISS%C3%83O_IPTU_26062023.pdf", "Contribuinte - Reemissão de IPTU - Requerimento", "fa-file-lines", 'icon'),

            new PaginaInterna("https://anexos.saocristovao.se.gov.br/arquivos/portal/contribuinte/termo_adesao_transacao/LEI%20491-2021-TRANSACAO.pdf", "Contribuinte - Transação - Lei", "fa-section", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/IN%20001.2023%20PGM-TRANSA%C3%87%C3%83O%20INDIVIDUAL-BAIXA%20RENDA.pdf", "Contribuinte - Transação - Transação Individual Iniciativa da Procuradoria", "fa-right-left", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/Instru%C3%A7%C3%A3o%20Normativa%20N%C2%BA%20001-2023.pdf", "Contribuinte - Transação - Proposta de Transação Individual Iniciativa da Procuradoria", "fa-right-left", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/IN%20002.2023-PGM_Transacao%20Individual-INICIATIVA%20DO%20DEVEDOR.pdf", "Contribuinte - Transação - Transação Individual Iniciativa do Devedor", "fa-right-left", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/Instru%C3%A7%C3%A3o%20Normativa%20N%C2%BA%20002-2023.pdf", "Contribuinte - Transação - Proposta de Transação Individual Iniciativa do Devedor", "fa-right-left", 'icon'),

            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/COMPENSACAO_DE_TRIBUTOS_MUNICIPAIS.pdf", "Contribuinte - Requerimentos - Compensação de Tributos Municipais", "fa-file-lines", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/REQUERIMENTO_PARCELAMENTO_ORDINARIO.pdf", "Contribuinte - Requerimentos - Parcelamento Ordinário", "fa-percent", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/IMUNIDADE_TRIBUTARIA.pdf", "Contribuinte - Requerimentos - Imunidade Tributária", "fa-file-lines", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/REQUERIMENTO_PRESCRICAO_DEBITOS_TRIBUTARIOS.pdf", "Contribuinte - Requerimentos - Prescrição de Débitos Tributários", "fa-money-bill-trend-up", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/REQUERIMENTO_ATUALIZACAO_CADASTRAL_IMOBILIARIA.pdf", "Contribuinte - Requerimentos - Atualização Cadastral Imobiliária", "fa-building-user", 'icon'),

            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/prefWeb/modulos/mercantil/certidaoNegativaCgm/certidaoNegativa.xhtml", "Contribuinte - Certidões - Negativa de Débitos", "fa-sack-xmark", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml", "Contribuinte - Certidões - Positiva com Efeito Negativa de Débitos", "fa-sack-dollar", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml", "Contribuinte - Certidões - Negativa Imobiliaria de Débitos", "fa-house-circle-xmark", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/certidaoPositivaComEfeitoNegativa/certidaoPositiva.xhtml", "Contribuinte - Certidões - Positiva com Efeito Negativa Imobiliaria de Débitos", "fa-house-circle-check", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/certidaoIsencaoIptu/certidaoIsencaoIptu.xhtml", "Contribuinte - Certidões - Certidão de Isenção de IPTU", "fa-house-circle-exclamation", 'icon'),
            new PaginaInterna("https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/publico/autenticacao/autenticacao.xhtml", "Contribuinte - Certidões - Autenticidade de Certidões", "fa-house-lock", 'icon'),

            new PaginaInterna("https://anexos.saocristovao.se.gov.br/arquivos/portal/servidor/Decreto_Municipal_PDV.pdf", "Servidor - Programa de Desligamento Voluntário - PDV", "fa-user-large-slash", 'icon'),
            new PaginaInterna("https://anexos.saocristovao.se.gov.br/storage/files/2/Servidor/REQUERIMENTO_FUNCIONARIO.pdf", "Servidor - Requerimento", "fa-file-lines", 'icon'),
        );

        $paginasInternasFiltradas = array_filter($paginasInternas, function($pagina) use ($input) {
            return str_contains(strtolower($pagina->titulo), strtolower($input));
        });

        return $paginasInternasFiltradas;
    }
}
