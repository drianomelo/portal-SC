<x-layout.index>
    @foreach ($noticiaEspecifica as $noticia)
        <div class="flex flex-col items-center w-full overflow-x-hidden">
            <section
                class="w-[110%] h-[145px] bg-home rounded-b-[35%] relative flex justify-center items-end
         before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]
         xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-lg sm:w-[140%] sm:bg-home-sm lg:justify-start">
            </section>
        </div>

        <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-2">
            <div class="relative z-50 flex items-center justify-between mb-6 -mt-5 lg:-mt-4">
                <div class="">
                    {{-- <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Notícias', 'url' => '/noticias']]" :last="['nome' => $noticia['categorias'][0], 'url' => '/noticias/' . $noticia['categorias'][0]]" /> --}}
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Notícias', 'url' => '/noticias']]" :last="['nome' => 'Notícia', 'url' => '']" />
                </div>
            </div>
        </div>

        <section
            class="max-w-[1200px] mt-5 mb-10 flex items-start gap-12 xl:mb-10 sm:flex-col sm:gap-4  sm:mt-0 lg:max-w-full">
            <div class="flex flex-col w-full sm:px-2">
                <div class="relative">
                    <div
                        class="absolute z-50 w-fit right-0 top-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                        <span
                            class="flex items-center gap-1.5 mt-1 text-[11px] font-bold text-yellow-400 text sm:text-[9px] sm:mt-0">
                            <i class="text-xs text-yellow-400 fa-solid fa-calendar-days sm:text-[10px]"></i>
                            {{ \Carbon\Carbon::parse($noticia['criada'])->format('m/d/Y') }}
                        </span>
                    </div>

                    <div
                        class="absolute z-50 bottom-0 px-3 text-center rounded-b-md h-[100%] flex items-end gradient-post-bottom">
                        <h2 class="mb-6 text-2xl font-semibold text-white uppercase text sm:text-sm sm:mb-3">
                            {{ $noticia['titulo'] }}
                        </h2>
                    </div>

                    <div class="absolute bottom-0 rounded-b-md w-full h-[40%] gradient-post-bottom">
                    </div>

                    <img class="w-full rounded-md shadow-md"
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                        alt="">
                </div>

                <div class="px-3 mt-5 dark:text-white text sm:text-xs">
                    @php
                        $doc = new DOMDocument();
                        $doc->loadHTML($noticia['corpo']);

                        $paragraphs = $doc->getElementsByTagName('p');
                        $validParagraphs = [];

                        foreach ($paragraphs as $paragraph) {
                            $content = strip_tags($doc->saveHTML($paragraph), '<img>');
                            if (strpos($content, '&nbsp;') === false) {
                                $content = str_replace('<span>', '', $content);
                                $content = str_replace('</span>', '', $content);
                                $validParagraphs[] = $content;
                            }
                        }
                    @endphp

                    @foreach ($validParagraphs as $paragrafo)
                        @if ($paragrafo !== "\u{A0}")
                            @if (strpos($paragrafo, '<img') === false)
                                <p class="mb-5 sm:mb-3">
                                    {{ $paragrafo }}
                                </p>
                            @else
                                @php
                                    preg_match('/src="([^"]+)"/', $paragrafo, $matches);
                                    $src = isset($matches[1]) ? $matches[1] : '';

                                    $conteudo = strip_tags($paragrafo);
                                    $posicaoImg = strpos($conteudo, '<img');
                                    if ($posicaoImg !== false) {
                                        $conteudo = substr($conteudo, $posicaoImg + strlen('<img'));
                                    }
                                    $conteudoSemFoto = preg_replace('/\s*\(Foto:[^\)]+\)/', '', $conteudo);
                                @endphp
                                <div class="relative mt-0 mb-5 sm:mt-4 sm:mb-3">
                                    <div
                                        class="absolute z-50 w-fit right-0 bottom-3 px-3 text-center rounded-s h-[5%] flex items-center bg-blue-950 bg-opacity-70 sm:h-[8%]">
                                        <span
                                            class="flex items-center gap-1.5 text-[11px] font-bold text-yellow-400 sm:text-[9px]">
                                            @if ($conteudoSemFoto === '')
                                                <i class="text-base fa-solid fa-camera-retro"></i>
                                            @else
                                                {{ $conteudoSemFoto }}
                                            @endif
                                        </span>
                                    </div>

                                    <img class="rounded-md shadow-md"
                                        src="https://publicacao.saocristovao.se.gov.br/{{ $src }}"
                                        alt="">
                                </div>
                            @endif
                        @endif
                    @endforeach

                    <div class="flex items-center gap-2">
                        <i class="p-2.5 text-base text-gray-400 border rounded-full fa-solid fa-camera-retro"></i>
                        <div class="flex flex-col">
                            <span class="text-[10px] italic font-light">Fotos por</span>
                            @php
                                preg_match('/Fotos?:\s*(\w+\s+\w+)/', $noticia['corpo'], $matches);
                                $fotografo = isset($matches[1]) ? trim($matches[1]) : '';
                            @endphp
                            <span class="text-sm font-extrabold sm:text-xs">{{ $fotografo }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-[350px] sm:max-w-full sm:px-3">
                <x-title img="" h2="Recentes"
                    p="Notícias recentes de {{ $noticia['categorias'][0] }}"></x-title>

                <div class="flex flex-col gap-2 mt-4">
                    @foreach ($noticiasRecentes as $noticia)
                        <x-card-publicacao-small
                            src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                            alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                            tag="{{ $noticia['categorias'][0] }}" />
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach
</x-layout.index>
