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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Concursos e Seleções', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3">
        <x-title img="" h2="Concursos e Seleções" p="Concursos e Processos Seletivos Simplificados"></x-title>
        <div class="grid grid-cols-3 gap-6 mt-6 grid-banner lg:grid-cols-2">
            <x-banner :href="route('banners.concursoseselecoes.concursos')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-concursos.png" />
            <x-banner :href="route('banners.concursoseselecoes.pss')"
                img="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-selecoes.png" />
        </div>
    </div>
</x-layout>
