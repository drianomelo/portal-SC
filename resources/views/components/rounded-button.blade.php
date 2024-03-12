<div class="relative flex items-center justify-center group">
    @if ($href !== '')
        <a href="{{ $href }}"
            {{ $attributes->merge([
                'class' =>
                    'relative flex items-center justify-center w-12 h-12 overflow-hidden text-white duration-300 border-2 border-white rounded-full transtion-all group
                    hover:bg-yellow-400 hover:text-yellow-800 hover:border-yellow-500
                    xl:w-10 xl:h-10',
            ]) }}>
            <i class="fa-solid fa-{{ $icon }} text-xs xl:text-[10px]"></i>

            <span
                class="absolute w-40 h-1 rotate-45 bg-yellow-100 blur-[3px] -left-10 -top-2 group-hover:animate-drop"></span>
        </a>

        <span
            class="rounded-button-title absolute p-2 text-[10px] animate-arrow-bounce font-semibold opacity-100 text-yellow-800 bg-yellow-400 rounded-lg -bottom-12 whitespace-nowrap transition-all duration-500
                after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-top-1 after:rotate-45 after:left-2/4 after:-translate-x-2/4 after:bg-yellow-400
                xl:text-[8px]">
            {{ $title }}
        </span>
    @else
        <button
            {{ $attributes->merge([
                'class' =>
                    'relative z-30 overflow-hidden flex flex-col items-center gap-[3px] justify-center w-12 h-12 border-2 border-white rounded-full text-white
                    xl:w-10 xl:h-10',
            ]) }}>
            <i
                class="fa-solid fa-{{ $icon }}  @if ($icon === 'bars') text-yellow-800 xl:text-sm @else text-white text-xs group-hover:text-yellow-800 xl:text-[10px] @endif"></i>

            <span
                class="absolute w-40 h-1 rotate-45 bg-yellow-100 blur-[3px] -left-10 -top-2 @if ($icon === 'bars') animate-drop @else group-hover:animate-drop @endif"></span>
        </button>

        <span
            class="rounded-button-title absolute p-2 text-[10px] animate-arrow-bounce font-semibold text-yellow-800 bg-yellow-400 rounded-lg -bottom-12 whitespace-nowrap transition-all duration-500
            after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-top-1 after:rotate-45 after:left-2/4 after:-translate-x-2/4 after:bg-yellow-400 xl:text-[8px]
            @if ($icon === 'bars') opacity-100
                group-hover:opacity-0
            @else
                opacity-0
                group-hover:opacity-100 @endif">
            {{ $title }}
        </span>
    @endif
</div>
