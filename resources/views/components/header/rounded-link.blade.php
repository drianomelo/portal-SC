<a href="{{ $href }}"
    class ="absolute top-0 flex items-center p-3 justify-center w-12 h-12 text-white transition-all duration-500 bg-blue-500 border-2 border-blue-600 rounded-full group-hover:top-[{{ $top }}]">
    <i class="fa-solid fa-{{ $icon }}"></i>

    <span
        class="absolute right-16 p-2 text-[10px] font-semibold text-white bg-blue-500 rounded-lg whitespace-nowrap
    after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-right-1 after:rotate-45 after:top-2/4 after:-translate-y-2/4 after:bg-blue-500">{{ $label }}</span>

</a>
