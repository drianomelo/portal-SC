<div class="flex items-center justify-between mb-6 -mt-[110px]">
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

    <button id="open-modal"
        class="px-4 py-2 -mb-10 text-sm font-semibold text-white bg-yellow-400 rounded-md shadow-md text">Contatos
    </button>
</div>
