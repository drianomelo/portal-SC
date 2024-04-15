<a href="{{ $href }}" class="flex-1 basis-[370px]">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full mb-4 rounded">
    <h3 class="mb-4 text-xl font-extrabold h-[112px] text dark:text-white truncate-title">{{ $title }}</h3>
    <div class="flex items-center justify-between pb-4 mb-4 border-b">
        <span
            class="p-1.5 font-semibold text-white rounded-sm  text-[9px] uppercase text
            @if ($tag === 'gabinete' || $tag === 'Gabinete' || $tag === 'governo' || $tag === 'Governo') bg-blue-600
            @elseif ($tag === 'saúde' || $tag === 'serviços urbanos' || $tag === 'Saúde' || $tag === 'Serviços Urbanos')
                bg-red-500
            @elseif ($tag === 'cultura e turismo' || $tag === 'Cultura')
                bg-yellow-400
            @elseif ($tag === 'infraestrutura' || $tag === 'meio ambiente' || $tag === 'Infraestrutura' || $tag === 'Meio Ambiente')
                bg-green-500
            @elseif ($tag === 'assistência' || $tag === 'Assistencia')
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
        <div class="flex items-center gap-4">
            <span class="flex items-center gap-1.5 text-xs font-light text-gray-400 text">
                <i class="text-sm fa-regular fa-eye"></i>
                {{ $visualizacoes }}
            </span>
            <span class="flex items-center gap-1.5 text-xs font-light text-gray-400 text">
                <i class="text-sm fa-regular fa-calendar-days"></i>
                {{ $data }}
            </span>
        </div>
    </div>
    <p class="mb-8 text-xs font-light text-gray-400 h-[112px] truncate-p text lg:mb-4">{{ $desc }}</p>
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <i class="p-2.5 text-xs text-gray-400 border rounded-full fa-solid fa-camera-retro"></i>
            <div class="flex flex-col">
                <span class="text-[10px] italic font-light text dark:text-white">Fotos por</span>
                <span class="text-xs font-extrabold text dark:text-white">{{ $fotografo }}</span>
            </div>
        </div>
        <button href="#"
            class="flex items-center gap-6 px-6 py-3 text-xs font-extrabold uppercase border border-gray-300 rounded-full dark:text-white text">
            Leia mais
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</a>
