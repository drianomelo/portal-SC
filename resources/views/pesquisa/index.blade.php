<x-layout>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[145px] bg-home rounded-b-[35%] relative flex justify-center items-end
            before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]
            xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-lg sm:w-[140%] sm:bg-home-sm lg:justify-start">
        </section>
    </div>

    <div class="max-w-[1200px] mb-10">
        <div id="resultados" class="p-2 my-4 text-xl font-bold dark:text-white">
            {{ $resultadoPesquisa }} resultados para "{{ $input }}"
        </div>

        <div id="container-search" class="flex flex-col w-full gap-4">
            @foreach ($paginasInternasFiltradas as $pagina)
                <a href="http://10.36.14.94:8000{{ $pagina->url }}"
                    class="flex items-start justify-between p-4 transition-all bg-white border rounded-md shadow-lg border-zinc-200 dark:shadow-xl dark:bg-zinc-900 dark:shadow-black dark:border-zinc-800">
                    <div class="flex items-start mr-8">
                        @if ($pagina->tipo === 'municipio')
                            <div class="w-48 h-[127px] mr-4 rounded-md bg-cover bg-[url({{ $pagina->img }})]">
                            </div>
                        @else
                            <div class="w-48 h-[127px] mr-4 rounded-md flex justify-center">
                                <img class="h-full" src="{{ $pagina->img }}" alt="Imagem Notícia">
                            </div>
                        @endif
                        <div class="flex flex-col gap-2">
                            <h2 class="text-xl font-extrabold text-blue-950 dark:text-yellow-400">
                                {{ $pagina->titulo }}</h2>
                            <div class="flex items-center gap-4">
                                <span class="text-sm text-gray-400 dark:text-white">
                                    <i class="fa-solid fa-link"></i>
                                    Clique aqui para ir a {{ $pagina->titulo }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="px-4 py-1 font-bold uppercase bg-zinc-300 text-blue-950 dark:bg-zinc-800 dark:text-yellow-400">
                        Pagina Interna
                    </div>
                </a>
            @endforeach
            <div class="flex flex-col-reverse w-full gap-4">
                @foreach ($noticiasFiltradas as $noticia)
                    <a href="{{ route('noticia', ['slug' => $noticia['slug']]) }}"
                        class="flex items-start justify-between p-4 transition-all bg-white border rounded-md shadow-lg border-zinc-200 dark:shadow-xl dark:bg-zinc-900 dark:shadow-black dark:border-zinc-800">
                        <div class="flex items-start mr-8">
                            <img class="w-48 mr-4 rounded-md"
                                src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                                alt="Imagem Notícia">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-xl font-extrabold text-blue-950 dark:text-yellow-400">
                                    {{ $noticia['titulo'] }}</h2>
                                <div class="flex items-center gap-4">
                                    <span class="text-sm text-gray-400 dark:text-white">
                                        <i class="fa-solid fa-eye"></i>
                                        {{ $noticia['visualizacoes'] }}
                                    </span>
                                    <span class="text-sm text-gray-400 dark:text-white">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        {{ \Carbon\Carbon::parse($noticia['criada'])->format('m/d/Y') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="px-4 py-1 font-bold uppercase bg-zinc-300 text-blue-950 dark:bg-zinc-800 dark:text-yellow-400">
                            Notícia
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- <a href="#"
            class="flex items-start p-4 transition-all bg-white border rounded-md shadow-lg border-zinc-200 dark:shadow-xl dark:bg-zinc-900 dark:shadow-black dark:border-zinc-800">
            <img class="w-48 mr-4 rounded-md"
                src="https://publicacao.saocristovao.se.gov.br/storage/post/moradores-de-sao-cristovao-podem-contribuir-para-o-consorcio-de-transporte-publico-coletivo-da-grande-aracaju-saiba-como-2024-03-26-6603112c5f877.jpg"
                alt="Imagem Notícia">
            <div class="flex flex-col gap-2 mr-8">
                <h2 class="text-xl font-extrabold text-blue-950 dark:text-yellow-400">Moradores de São Cristóvão podem contribuir para o
                    Consórcio de Transporte Público Coletivo da
                    Grande Aracaju; saiba como</h2>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-400 dark:text-white">
                        <i class="fa-solid fa-eye"></i>
                        220
                    </span>
                    <span class="text-sm text-gray-400 dark:text-white">
                        <i class="fa-solid fa-calendar-days"></i>
                        03/26/2024
                    </span>
                </div>
            </div>
            <div class="px-4 py-1 font-bold uppercase bg-zinc-300 text-blue-950 dark:bg-zinc-800 dark:text-yellow-400">
                Notícia
            </div>
        </a> --}}

    </div>
</x-layout>
