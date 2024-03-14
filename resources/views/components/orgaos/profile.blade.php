<div class="flex items-center justify-between mb-6 -mt-[110px] sm:-mt-[100px] sm:flex-col sm:items-start sm:mb-14">
    <div class="flex items-center gap-4 sm:mb-4">
        <img src="{{ $img }}" alt="{{ $name }}" class="h-[90px] rotate-6 sm:h-[70px]">
        <div class="flex flex-col text-white ">
            <span class="text-lg font-semibold uppercase text">{{ $sigla }}</span>
            <span class="mb-1 -mt-1 text-xs font-light text">{{ $name }}</span>
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Orgãos', 'url' => '/orgaos']]" :last="['nome' => $sigla, 'url' => '']" />
            </div>
        </div>
    </div>

    <button id="open-modal"
        class="px-4 py-2 -mb-10 font-semibold text-white bg-yellow-400 rounded-md shadow-md outline-none tex-sm text">Contatos
    </button>
</div>
