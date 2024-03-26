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
                    ['nome' => 'Concursos', 'url' => '/banners/concursos-selecoes/concursos'],
                ]" :last="['nome' => 'Concurso Agente Comunitário de Saúde e Agente de Endemias', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Editais"
            p="Editais do Concurso Agente Comunitário de Saúde e Agente de Endemias"></x-title>
        <table class="w-full mt-6 sm:text-xs">
            <thead>
                <tr class="text-blue-900 bg-zinc-100 dark:bg-zinc-900">
                    <th class="p-2 pl-4 border text text-start">Ano</th>
                    <th class="p-2 pl-4 border text text-start">Nome</th>
                    <th class="p-2 pl-4 border text text-start">Exportar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($editais as $edital)
                <tr class="dark:text-white">
                    <td class="p-2 pl-4 text-[11px] font-light border text">{{ $edital[0] }}</td>
                    <td class="p-2 pl-4 text-[11px] font-light border text">{{ $edital[1] }}</td>
                    <td class="p-2 pl-4 text-[11px] font-light border text">
                        <a href="{{ $edital[2] }}" class="flex items-center justify-center gap-2 text-blue-400">
                            baixar
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
