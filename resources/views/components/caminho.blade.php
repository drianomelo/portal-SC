@props(['caminhos', 'last'])

<div class="flex items-center gap-3 px-4 py-1 text-[13px] bg-yellow-400  rounded-md text-yellow-800 w-fit">
    @foreach ($caminhos as $caminho)
        <span ><a href="{{ $caminho['url'] }}">{{ $caminho['nome'] }}</a></span>
        <i class="text-[10px] font-medium fa-solid fa-chevron-right"></i>
    @endforeach
    <span class="text-sm font-bold text-yellow-900"><a href="{{ $last['url'] }}">{{ $last['nome'] }}</a></span>
</div>
