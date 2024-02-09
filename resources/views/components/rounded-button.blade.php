@if ($link === 'true')
    <div class="relative flex items-center justify-center group">
        <a href="#"
            {{ $attributes->merge([
                'class' => 'relative overflow-hidden flex items-center justify-center w-12 h-12 border-2 border-white rounded-full text-white transtion-all duration-300
                                                                                                                                                                                                                                    group hover:bg-yellow-400 hover:text-yellow-500 hover:border-yellow-500',
            ]) }}>
            <i class="fa-solid fa-{{ $icon }} text-xs"></i>

            <span
                class="absolute w-40 h-1 rotate-45 bg-yellow-100 blur-[3px] -left-10 -top-2 group-hover:animate-drop"></span>
        </a>

        <span
            class="absolute p-2 text-[10px] font-semibold opacity-0 text-yellow-600 bg-yellow-400 rounded-lg -bottom-12 whitespace-nowrap transition-all
                        after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-top-1 after:rotate-45 after:left-2/4 after:-translate-x-2/4 after:bg-yellow-400
                        group-hover:animate-arrow-bounce group-hover:opacity-100">{{ $title }}</span>
    </div>
@elseif ($link === 'false')
    @if ($icon === 'menu')
        <div class="relative flex items-center justify-center group">
            <button
                {{ $attributes->merge([
                    'class' =>
                        'relative z-30 overflow-hidden flex flex-col items-center gap-[3px] justify-center w-12 h-12 border-2 border-white rounded-full text-white',
                ]) }}>
                <span class="w-2/5 h-[3px] bg-yellow-500 "></span>
                <span class="w-2/5 h-[3px] bg-yellow-500 "></span>
                <span class="w-2/5 h-[3px] bg-yellow-500 "></span>

                <span class="absolute w-40 h-1 rotate-45 bg-yellow-100 blur-[3px] -left-10 -top-2 animate-drop"></span>
            </button>

            <span
                class="absolute p-2 text-[10px] font-semibold opacity-0 text-yellow-600 bg-yellow-400 rounded-lg -bottom-12 whitespace-nowrap transition-all
                        after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-top-1 after:rotate-45 after:left-2/4 after:-translate-x-2/4 after:bg-yellow-400
                        group-hover:animate-arrow-bounce group-hover:opacity-100">{{ $title }}</span>
        </div>
    @else
        <div class="relative flex items-center justify-center group">
            <button
                {{ $attributes->merge([
                    'class' => 'relative overflow-hidden flex items-center justify-center w-12 h-12 border-2 border-white rounded-full text-white transtion-all duration-300
                                                                                                                                                                                                                                                                        group hover:bg-yellow-400 hover:text-yellow-500 hover:border-yellow-500',
                ]) }}>
                <i class="fa-solid fa-{{ $icon }} text-xs"></i>

                <span
                    class="absolute w-40 h-1 rotate-45 bg-yellow-100 blur-[3px] -left-10 -top-2 group-hover:animate-drop"></span>
            </button>

            <span
                class="absolute p-2 text-[10px] font-semibold opacity-0 text-yellow-600 bg-yellow-400 rounded-lg -bottom-12 whitespace-nowrap transition-all
                        after:content-[''] after:absolute after:-z-10 after:w-4 after:h-4 after:-top-1 after:rotate-45 after:left-2/4 after:-translate-x-2/4 after:bg-yellow-400
                        group-hover:animate-arrow-bounce group-hover:opacity-100">{{ $title }}</span>
        </div>
    @endif
@endif
