<x-layout.index>
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
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Notícias', 'url' => '/noticias']]" :last="['nome' => $categoria, 'url' => '']" />
            </div>
        </div>
    </div>
    <section class="max-w-[1200px] mb-10 xl:mb-10 sm:mt-0 lg:max-w-full">
        <div class="grid grid-cols-3 gap-8 sm:gap-4 list">
            @foreach ($noticias as $noticia)
                @php
                    $conteudoSemTags = strip_tags($noticia['corpo']);

                    $paragrafos = explode("\n", $conteudoSemTags);

                    $descricao = isset($paragrafos[0]) ? $paragrafos[0] : '';
                    $descricaoCorreta = html_entity_decode($descricao);

                    preg_match('/Fotos?:\s*(\w+\s+\w+)/', $noticia['corpo'], $matches);
                    $fotografo = isset($matches[1]) ? trim($matches[1]) : '';
                @endphp
                <x-card-publicacao src="https://publicacao.saocristovao.se.gov.br/storage/post/{{ $noticia['imagem'] }}"
                    alt="Notícia São Cristóvão" :href="route('noticia', ['slug' => $noticia['slug']])" title="{{ $noticia['titulo'] }}"
                    tag="{{ $categoria }}" data="{{ \Carbon\Carbon::parse($noticia['criada'])->format('m/d/Y') }}"
                    desc="{{ $descricaoCorreta }}" fotografo="{{ $fotografo }}"
                    visualizacoes="{{ $noticia['visualizacoes'] }}" />
            @endforeach
        </div>
        <div class="mt-6 listPage text-end">
        </div>
    </section>

    @push('scripts')
        @vite('resources/js/pagination.js')
    @endpush
</x-layout.index>
