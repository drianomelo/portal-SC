<a href="{{ $href }}" class="flex-1">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full mb-2 rounded">
    <h3 class="mb-1.5 text-xl font-extrabold h-[85px] truncate-title dark:text-white">{{ $title }}</h3>
    <div class="flex items-center justify-between mb-4">
        <span
            class="p-1.5 font-semibold text-white rounded-sm text-[9px] uppercase
        @if ($tag === 'gabinete' || $tag === 'Gabinete' || $tag === 'governo' || $tag === 'Governo') bg-blue-600
        @elseif ($tag === 'saúde' || $tag === 'serviços urbanos' || $tag === 'Saúde' || $tag === 'Serviços Urbanos')
            bg-red-500
        @elseif ($tag === 'cultura e turismo' || $tag === 'Cultura')
            bg-yellow-400
        @elseif ($tag === 'infraestrutura' || $tag === 'meio ambiente' || $tag === 'Infraestrutura' || $tag === 'Meio Ambiente')
            bg-green-500
        @elseif ($tag === 'assistência' || $tag === 'Assistência')
            bg-purple-500
        @elseif ($tag === 'controladoria' || $tag === 'Controladoria')
            bg-orange-500
        @elseif ($tag === 'trânsito' || $tag === 'procuradoria' || $tag === 'Transito' || $tag === 'Procuradoria')
            bg-black
        @elseif ($tag === 'educação' || $tag === 'Educacao')
            bg-lime-500
        @elseif ($tag === 'esporte' || $tag === 'Esporte')
            bg-amber-500
        @elseif ($tag === 'fazenda' || $tag === 'Fazenda')
            bg-orange-900
        @elseif ($tag === 'saae' || $tag === 'SAAE')
            bg-sky-500 @endif
        ">
            {{ $tag }}
        </span>
        <button href="#"
            class="flex items-center gap-6 px-6 py-3 text-xs font-extrabold uppercase border border-gray-300 rounded-full dark:text-white">
            Leia mais
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</a>
