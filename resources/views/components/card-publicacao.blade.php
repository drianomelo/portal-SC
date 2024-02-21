<a href="{{ $href }}" class="flex-1">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full mb-4 rounded">
    <h3 class="mb-4 text-xl font-extrabold h-[112px] text">{{ $title }}</h3>
    <div class="flex items-center justify-between pb-4 mb-4 border-b">
        <span class="p-1.5 font-semibold text-white rounded-sm  text-[9px] uppercase text
        @if ($tag === 'gabinete')
            bg-blue-600
        @elseif ($tag === 'saúde')
            bg-red-500
        @elseif ($tag === 'fumctur')
            bg-yellow-400
        @elseif ($tag === 'infraestrutura')
            bg-green-500
        @endif">
            {{ $tag }}
        </span>
        <span class="flex items-center gap-1.5 text-xs font-light text-gray-400 text">
            <i class="text-sm fa-regular fa-calendar-days"></i>
            {{ $data }}
        </span>
    </div>
    <p class="mb-8 text-xs font-light text-gray-400 h-[112px] truncate-p text">{{ $desc }}</p>
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <i class="p-2.5 text-xs text-gray-400 border rounded-full fa-solid fa-camera-retro"></i>
            <div class="flex flex-col">
                <span class="text-[10px] italic font-light text">Fotos por</span>
                <span class="text-xs font-extrabold text">{{ $fotografo }}</span>
            </div>
        </div>
        <button href="#"
            class="flex items-center gap-6 px-6 py-3 text-xs font-extrabold uppercase border border-gray-300 rounded-full text">
            Leia mais
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</a>
