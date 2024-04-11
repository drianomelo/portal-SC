<x-layout.pesquisa>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[145px] bg-home rounded-b-[35%] relative flex justify-center items-end
            before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]
            xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-lg sm:w-[140%] sm:bg-home-sm lg:justify-start">
        </section>
    </div>

    <div class="max-w-[1200px] mb-10">
        <div id="search">
            <form action="#" class="w-full mt-6">
                @csrf
                <div class="relative flex items-center justify-between bg-white rounded">
                    <i class="absolute text-2xl text-gray-400 left-3 fa-solid fa-magnifying-glass"></i>
                    <input class="w-full py-3 pl-12 text-gray-400 border rounded outline-none dark:bg-zinc-900 dark:border-black placeholder:text-gray-400"
                        type="text" name="pesquisa" id="pesquisa" required value="{{ $input }}">
                    <button class="p-2 text-[10px] font-bold text-white uppercase absolute right-3 bg-blue-900 rounded"
                        type="submit">Pesquisar</button>
                </div>
                <button type="button" id="search-close" class="hidden">
                    <i class="font-bold text-blue-900 fa-solid fa-xmark"></i>
                </button>
            </form>
        </div>

        <div id="resultados" class="p-2 my-4 text-xl font-bold dark:text-white">
            {{ $resultadoPesquisa }} resultados para "{{ $input }}"
        </div>

        <div id="container-search" class="flex flex-col w-full gap-4">
            @foreach ($paginasInternasFiltradas as $pagina)
                <a href="http://10.36.14.94:8000{{ $pagina->url }}"
                    class="flex items-start justify-between w-full p-4 transition-all bg-white border rounded-md shadow-lg border-zinc-200 dark:shadow-xl dark:bg-zinc-900 dark:shadow-black dark:border-zinc-800">
                    <div class="flex items-start mr-8">
                        @if ($pagina->tipo === 'municipio')
                            <div class="w-48 h-[127px] mr-4 rounded-md bg-cover bg-[url({{ $pagina->img }})]">
                            </div>
                        @elseif ($pagina->tipo === 'icon')
                            <div class="w-48 h-[127px] mr-4 rounded-md flex items-center justify-center">
                                <i class="dark:text-yellow-400 fa-solid {{ $pagina->img }} text-8xl text-blue-950"></i>
                            </div>
                        @elseif ($pagina->tipo === 'banner')
                            <div class="h-[127px] mr-4 rounded-md flex items-center justify-center">
                                <img class="min-w-[350px] max-w-[350px] rounded-md" src="{{ $pagina->img }}"
                                    alt="Imagem Notícia">
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
                        class="px-4 py-1 font-bold uppercase whitespace-nowrap bg-zinc-300 text-blue-950 dark:bg-zinc-800 dark:text-yellow-400">
                        Pagina Interna
                    </div>
                </a>
            @endforeach
            @foreach ($paginasExternasFiltradas as $pagina)
                <a href="{{ $pagina->url }}" target="_blank"
                    class="flex items-start justify-between w-full p-4 transition-all bg-white border rounded-md shadow-lg border-zinc-200 dark:shadow-xl dark:bg-zinc-900 dark:shadow-black dark:border-zinc-800">
                    <div class="flex items-start mr-8">
                        <div class="w-48 h-[127px] mr-4 rounded-md flex items-center justify-center">
                            <i class="dark:text-yellow-400 fa-solid {{ $pagina->img }} text-8xl text-blue-950"></i>
                        </div>
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
                        class="px-4 py-1 font-bold uppercase whitespace-nowrap bg-zinc-300 text-blue-950 dark:bg-zinc-800 dark:text-yellow-400">
                        Pagina Externa
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
    </div>
    </x-layout.pesqui>
