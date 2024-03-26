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
                ]" :last="['nome' => 'Concursos', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Concursos" p="Concursos da Prefeitura Municipal de São Cristóvão "></x-title>
        <div class="grid grid-cols-3 gap-5 mt-5 grid-banner lg:grid-cols-2">
            <x-banner :href="route('banners.concursoseselecoes.concursos.guarda')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-concurso-guarda-outros.jpg" />
            <x-banner :href="route('banners.concursoseselecoes.concursos.agentecomunitario')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-concurso-agente-comunitario.png" />
            <x-banner :href="route('banners.concursoseselecoes.concursos.semed2019')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-concurso-semed-2019.png" />
        </div>
    </div>
</x-layout>
