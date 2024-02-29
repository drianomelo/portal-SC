<a href="{{ $href }}" class="flex-1">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-full mb-2 rounded">
    <h3 class="mb-1.5 text-xl font-extrabold h-[85px] truncate-title dark:text-white">{{ $title }}</h3>
    <div class="flex items-center justify-between mb-4">
        <span
            class="p-1.5 font-semibold text-white rounded-sm text-[9px] uppercase
        @if ($tag === 'gabinete') bg-blue-600
        @elseif ($tag === 'saúde')
            bg-red-500
        @elseif ($tag === 'fumctur')
            bg-yellow-400
        @elseif ($tag === 'infraestrutura')
            bg-green-500
        @elseif ($tag === 'assistência')
            bg-purple-500 @endif
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
