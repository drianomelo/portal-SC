<div class="flex flex-col w-full p-4 transition-all duration-300 bg-blue-900 rounded-lg cursor-pointer accordion__item">
    <div class="flex items-center justify-between font-bold text-white accordion__header">
        <p>{{ $question }}</p>
        <div class="text-lg text-yellow-400 accordion__icon">
            +
        </div>
    </div>
    <div class="h-0 overflow-hidden text-sm transition-all duration-300 text-zinc-300 accordion__content">
        {{ $response }}
        @if ($link !== '')
            <a href="{{ $link }}" class="block text-[10px] underline">clique aqui para acessar</a>
        @endif
    </div>
</div>
