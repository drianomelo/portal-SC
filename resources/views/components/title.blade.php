<div class="relative flex flex-col">
    <img class="absolute w-16 -left-20 opacity-90 rotate-6 top-2/4 -translate-y-2/4" @if($img === "") src="" alt="" @else src="{{ $img }}" alt="alto falante" @endif>
    <h2
        class="text-4xl font-extrabold flex whitespace-nowrap gap-4 items-center text
    after:content-[''] after:block after:h-1.5 after:w-[80px] after:bg-blue-900">
        {{ $h2 }}
    </h2>
    <p class="text-sm font-light text-gray-500 w-fit text">{{ $p }}</p>
</div>
