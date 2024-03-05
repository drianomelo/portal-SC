<li
    class="relative transition-all duration-300 cursor-pointer group
            before:content-[''] before:w-0 before:h-[2px] before:bg-white before:block before:absolute before:bottom-3 before:transition-all
            hover:before:w-6">
    <div class="flex items-center gap-2 ">
        <a href="{{ $href }}" class="text-sm font-medium text-white py-7 text">{{ $nome }}</a>
        @if ($nome === 'Ouvidoria')
        @else
            <i
                class="icon fa-solid fa-caret-down text-[10px] text-white transition-all duration-300 group-hover:rotate-180"></i>
        @endif
    </div>
</li>
