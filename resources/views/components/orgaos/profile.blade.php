<div class="flex items-center  mb-6 -mt-[110px]">
    <div class="flex items-center gap-4">
        <img src="{{ $img }}" alt="{{ $name }}" class="w-20 rotate-6">
        <div class="flex flex-col text-white ">
            <span class="text-lg font-semibold uppercase text">{{ $sigla }}</span>
            <span class="mb-1 -mt-1 text-xs font-light text">{{ $name }}</span>
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Orgãos', 'url' => '/orgaos']]" :last="['nome' => $sigla, 'url' => '']" />
            </div>
        </div>
    </div>
</div>
