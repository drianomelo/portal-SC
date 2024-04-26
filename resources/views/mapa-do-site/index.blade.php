<x-layout>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%] sm:lg:w-[140%] sm:bg-home-sm">
        </section>

        <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-3">
            <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
                <div class="">
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Mapa do Site', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Mapa do Site" p="Veja abaixo o Mapa do Site e se localize"></x-title>

        <div class="flex flex-wrap justify-between mt-6 gap-y-6">
            <x-mapa-do-site.bloco title="Município" :ancoras="[
                ['nome' => 'São Cristóvão', 'url' => '/municipio/saocristovao'],
                ['nome' => 'Prefeito', 'url' => '/municipio/prefeito'],
                ['nome' => 'Prefeitura', 'url' => '/municipio/prefeitura'],
            ]" />

            <x-mapa-do-site.bloco title="Órgãos" :ancoras="[
                ['nome' => 'SEMAS', 'url' => '/orgaos/semas'],
                ['nome' => 'SEMDES', 'url' => '/orgaos/semdes'],
                ['nome' => 'SEMDET', 'url' => '/orgaos/semdet'],
                ['nome' => 'SEMED', 'url' => '/orgaos/semed'],
                ['nome' => 'SEMEL', 'url' => '/orgaos/semel'],
                ['nome' => 'SEMFOP', 'url' => '/orgaos/semfop'],
                ['nome' => 'SEGOV', 'url' => '/orgaos/segov'],
                ['nome' => 'SEMINFRA', 'url' => '/orgaos/seminfra'],
                ['nome' => 'SEMMA', 'url' => '/orgaos/semma'],
                ['nome' => 'SMS', 'url' => '/orgaos/sms'],
                ['nome' => 'SEMSURB', 'url' => '/orgaos/semsurb'],
                ['nome' => 'GAPRE', 'url' => '/orgaos/gapre'],
                ['nome' => 'CGM', 'url' => '/orgaos/cgm'],
                ['nome' => 'PGM', 'url' => '/orgaos/pgm'],
                ['nome' => 'FUMCTUR', 'url' => '/orgaos/fumctur'],
                ['nome' => 'SAAE', 'url' => '/orgaos/saae'],
                ['nome' => 'SMTT', 'url' => '/orgaos/smtt'],
            ]" />

            <x-mapa-do-site.bloco title="Conselhos" :ancoras="[
                ['nome' => 'CMGT', 'url' => '/conselhos/cmgt'],
                ['nome' => 'CRAFI', 'url' => '/conselhos/crafi'],
            ]" />

            <x-mapa-do-site.bloco title="Transparência" :ancoras="[['nome' => 'Transparência', 'url' => 'https://transparencia.saocristovao.se.gov.br/']]" />

            <x-mapa-do-site.bloco title="Contribuinte" :ancoras="[
                [
                    'nome' => 'IPTU',
                    'url' =>
                        'https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml',
                ],
                ['nome' => 'ITBI', 'url' => '/contribuinte/itbi'],
                ['nome' => 'ISS', 'url' => 'https://saocristovaose.webiss.com.br/'],
                [
                    'nome' => 'TLF',
                    'url' => 'https://gestor.tributosmunicipais.com.br/redesim/views/publico/index.xhtml',
                ],
                ['nome' => 'UFM', 'url' => '/contribuinte/ufm'],
                [
                    'nome' => 'Cartão de Inscrição Municipal',
                    'url' =>
                        'https://gestor.tributosmunicipais.com.br/redesim/views/publico/prefWeb/mercantil/cartaoInscricaoMunicipal/cartaoInscricaoMunicipal.xhtml',
                ],
                [
                    'nome' => 'Isenção de IPTU',
                    'url' =>
                        'https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/ISEN%C3%87%C3%83ODE_IPTU.pdf',
                ],
                ['nome' => 'Reemissão de IPTU', 'url' => '/contribuinte/reemissao-de-iptu'],
                ['nome' => 'Transação', 'url' => '/contribuinte/transacao'],
                ['nome' => 'Requerimentos', 'url' => '/contribuinte/requerimentos'],
                ['nome' => 'Certidões', 'url' => '/contribuinte/certidoes'],
            ]" />

            <x-mapa-do-site.bloco title="Servidor" :ancoras="[
                ['nome' => 'Contracheque', 'url' => '/contracheque'],
                [
                    'nome' => 'PDV',
                    'url' => 'https://anexos.saocristovao.se.gov.br/arquivos/portal/servidor/Decreto_Municipal_PDV.pdf',
                ],
                [
                    'nome' => 'Requerimento',
                    'url' =>
                        'https://anexos.saocristovao.se.gov.br/storage/files/2/Servidor/REQUERIMENTO_FUNCIONARIO.pdf',
                ],
            ]" />

            <x-mapa-do-site.bloco title="Sistemas" :ancoras="[
                ['nome' => 'Portal SEI', 'url' => 'https://portalsei.saocristovao.se.gov.br/'],
                [
                    'nome' => 'Help Desk',
                    'url' => 'http://helpdesk.saocristovao.se.gov.br/',
                ],
                [
                    'nome' => 'E-mail Institucional',
                    'url' => 'https://prefeituras.se.gov.br/',
                ],
                [
                    'nome' => 'Govnet SIAFIC',
                    'url' => 'https://govnet.com.br/login',
                ],
                [
                    'nome' => 'eSUS',
                    'url' => 'http://esus.saocristovao.se.gov.br/',
                ],
            ]" />

            <x-mapa-do-site.bloco title="Ouvidoria/FAQ" :ancoras="[['nome' => 'Ouvidoria/FAQ', 'url' => '/ouvidoria']]" />

            <x-mapa-do-site.bloco title="CEP" :ancoras="[['nome' => 'CEP', 'url' => '/cep']]" />
        </div>
    </div>
</x-layout>
