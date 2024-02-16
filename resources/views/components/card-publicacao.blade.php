<a href="#" class="flex-1">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full mb-4 rounded">
    <h3 class="mb-4 text-xl font-extrabold h-[112px]">{{ $title }}</h3>
    <div class="flex items-center justify-between pb-4 mb-4 border-b">
        <span class="p-1.5 font-semibold text-white rounded-sm bg-blue-600 text-[9px] uppercase">
            {{ $tag }}
        </span>
        <span class="flex items-center gap-1.5 text-xs font-light text-gray-400">
            <i class="text-sm fa-regular fa-calendar-days"></i>
            {{ $data }}
        </span>
    </div>
    <p class="mb-8 text-xs font-light text-gray-400 h-[112px] truncatee">{{ $desc }}</p>
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <i class="p-2.5 text-xs text-gray-400 border rounded-full fa-solid fa-camera-retro"></i>
            <div class="flex flex-col">
                <span class="text-[10px] italic font-light">Fotos por</span>
                <span class="text-xs font-extrabold">{{ $fotografo }}</span>
            </div>
        </div>
        <button href="#"
            class="flex items-center gap-6 px-6 py-3 text-xs font-extrabold uppercase border border-gray-300 rounded-full">
            Leia mais
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</a>
