<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[
                    ['nome' => 'Início', 'url' => '/'],
                    ['nome' => 'Banners', 'url' => '/banners'],
                    ['nome' => 'Concursos e Seleções', 'url' => '/banners/concursos-selecoes'],
                ]" :last="['nome' => 'Seleções', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Seleções" p="Seleções da Prefeitura Municipal de São Cristóvão "></x-title>
        <div class="grid grid-cols-3 gap-5 mt-5 grid-banner lg:grid-cols-2">
            <x-banner :href="route('banners.concursoseselecoes.pss.semed2023')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-semed-2023.jpg" />
            <x-banner :href="route('banners.concursoseselecoes.pss.motorista')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-motorista.png" />
            <x-banner :href="route('banners.concursoseselecoes.pss.saude')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-saude.png" />
            {{-- <x-banner :href="route('banners.concursoseselecoes.pss.semed2021')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-semed-2021.jpeg" /> --}}
            <x-banner :href="route('banners.concursoseselecoes.pss.assistenciasocial')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-semas.jpg" />
            <x-banner href="https://anexos.saocristovao.se.gov.br/storage/files/9/jovem-aprendiz-semas/EDITAL_JOVEM_APRENDIZ_.pdf"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-jovem-aprendiz.jpg" />
            <x-banner :href="route('banners.concursoseselecoes.pss.bolsistas')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-pss-bolsistas.png" />
        </div>
    </div>
</x-layout>
