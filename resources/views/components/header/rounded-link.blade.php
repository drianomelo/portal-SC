<a href="{{ $href }}" class="flex items-center gap-2.5 absolute group-hover:relative">
    <div
        class ="flex items-center justify-center w-12 h-12 gap-16 p-3 text-white transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:relative ">
        <i class="absolute fa-solid fa-{{ $icon }}"></i>
    </div>

    <span
        class="relative block p-2 text-[10px] font-semibold text-white bg-blue-500 rounded-lg whitespace-nowrap
    after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-left-1 after:rotate-45 after:top-2/4 after:-translate-y-2/4 after:bg-blue-500">{{ $label }}</span>
</a>
