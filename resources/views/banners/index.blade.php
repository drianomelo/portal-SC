<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Banners', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Informações"
            p="Todos editais e demais informações da Prefeitura Municipal de São Cristóvão "></x-title>
        <div class="grid grid-cols-3 gap-5 mt-5 grid-banner lg:grid-cols-2">
            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-governanca-publica.png" />

            <x-banner :href="route('banners.conselhomunicipalgestaoterritorial')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-gestao-territorial.png" />

            <x-banner
                href="https://gestor.tributosmunicipais.com.br/redesim/prefeitura/saocristovao/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-iptu.png" />

            <x-banner :href="route('contribuinte.ufm')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-ufm.png" />

            <x-banner :href="route('banners.concursoseselecoes')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-concursos-e-selecoes.png" />

            <x-banner href="https://docs.google.com/forms/d/1fkj81Ogda__KKH0Ua-iB1uJkBHiTa-HK5puDNCluUj0/edit"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-tea.jpg" />

            <x-banner :href="route('banners.leipaulogustavo')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-lei-paulo-gustavo.png" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-credenciamento-cultura.png" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-sala-do-empreendedor.jpg" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-edital-osc.jpg" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-edital-pmaaf.jpg" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-programa-estagio.png" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-paa.png" />

            <x-banner
                href="https://docs.google.com/forms/d/e/1FAIpQLSeOqFTUTM__27Au6BXivcw7UAuEf6tYNoUTOBhg3pCT5ELqvw/viewform"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-deficiencias-ocultas.jpeg" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-castra-pet.jpg" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-hino.jpeg" />

            <x-banner
                href="https://docs.google.com/forms/d/e/1FAIpQLSeCN_rvdWzDk5ATkhDTEZsMm7S5UPjiZH2VRyncgkUGT1E8kw/viewform"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-audiencia-pnab.png" />

            <x-banner :href="route('banners.governancapublica')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pnab.png" />
        </div>
    </div>
</x-layout>
