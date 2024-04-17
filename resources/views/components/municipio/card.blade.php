<div class="w-[280px] h-[350px] prefeito relative overflow-hidden group flex justify-center items-center shadow-lg">
    <img class="min-w-[110%] transition-all duration-300 group-hover:min-w-[120%]" src="{{ $bg }}"
        alt="Prefeito de São Cristóvão">
    <div
        class="absolute flex flex-col items-center justify-center w-full pt-40 pb-4 font-bold text-white uppercase transition-all duration-300 -bottom-52 gradient-post-bottom bg-opacity-60 group-hover:-bottom-0">
        <span class="name-galeria">{{ $name }}</span>
        <span class="text-sm text-zinc-400 mandato-galeria">{{ $mandato }}</span>
        <span class="hidden descricao-galeria">{{ $desc }}</span>
    </div>
</div>
