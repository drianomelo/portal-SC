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
                <h3 class="relative mb-4 font-bold uppercase w-fit dark:text-white">
                    Mais de Infraestrutura:
                </h3>
                <div class="flex flex-col gap-2">
                    <x-card-publicacao-small
                        src="https://publicacao.saocristovao.se.gov.br/storage/post/prefeitura-de-sao-cristovao-investe-mais-de-r-500-mil-em-obras-no-bairro-irineu-neri-2023-11-24-6560ba209df6e.JPG"
                        alt="teste" href=""
                        title="Prefeitura de São Cristóvão investe mais de R$ 500 mil em obras no bairro Irineu Neri"
                        tag="infraestrutura" data="24/11/2023"
                        desc="Através da Secretaria Municipal de Infraestrutura (Seminfra), a Prefeitura de São Cristóvão está realizando importante obras que mudam a realidade dos moradores do bairro Irineu Neri. Com a recuperação da pavimentação da rua São Domingos e a obra de drenagem e pavimentação asfáltica da Av. Irineu Neri, a Prefeitura investe mais de 500 mil reais, oriundos de recursos próprios do município, em ações que valorizam o cidadão e melhoram a mobilidade urbana da cidade."
                        fotografo="Dani Santos" />
                    <x-card-publicacao-small
                        src="http://publicacao.saocristovao.se.gov.br/storage/post/equipe-da-seminfra-apresenta-projetos-de-requalificacao-de-pracas-e-revitalizacao-de-atracadouro-2024-02-07-65c3c0239e501.JPG"
                        alt="teste" href=""
                        title="Equipe da Seminfra apresenta projetos de requalificação de praças e revitalização de atracadouro "
                        tag="infraestrutura" data="07/02/2024"
                        desc='Durante reunião entre o prefeito Marcos Santana e o secretário Municipal de Infraestrutura (Seminfra), Júlio Júnior, foram apresentados projetos que visam revitalizar o atracadouro do "Catamarã", no Centro Histórico e promover a requalificação de duas praças na cidade: a Praça da Alameda no Eduardo Gomes e a Praça Horácio Souza Lima, localizada no bairro Rosa Elze, em São Cristóvão.'
                        fotografo="Heitor Xavier" />

                </div>
            </div>
        </section>
    @endforeach
</x-layout.index>
