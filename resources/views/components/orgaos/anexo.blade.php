<a href="{{ $href }}" target="_blank"
    class="flex items-center w-full gap-4 rounded-lg shadow-lg h-[105px] bg-zinc-100">
    <div class="h-[105px] px-5 flex justify-center items-center rounded-l-lg bg-zinc-200">
        <i class="text-6xl fa-solid {{ $icon }} text-blue-950"></i>
    </div>
    <div class="flex flex-col gap-1 py-2 pr-4">
        <span class="text-xl font-bold text-blue-950">{{ $title }}</span>
        <span class="text-xs text-zinc-600 truncate-anexo">{{ $desc }}</span>
    </div>
</a>
