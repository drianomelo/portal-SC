@props(['caminhos', 'last'])

<div class="flex flex-wrap items-center gap-3 px-4 py-1 text-[13px] sm:text-[10px] sm:gap-1.5 sm:px-3 sm:py-[2px] bg-yellow-400 rounded-md text-yellow-800 w-fit">
    @foreach ($caminhos as $caminho)
        <span ><a href="{{ $caminho['url'] }}">{{ $caminho['nome'] }}</a></span>
        <i class="text-[10px] font-medium fa-solid fa-chevron-right sm:text-[8px]"></i>
    @endforeach
    <span class="text-sm font-bold text-yellow-900 sm:text-[10px]"><a href="{{ $last['url'] }}">{{ $last['nome'] }}</a></span>
</div>
