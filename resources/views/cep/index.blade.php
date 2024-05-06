<x-layout.cep>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[390px] bg-home rounded-b-[35%] relative flex justify-center items-center
     before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30] xl:w-[120%] xl:bg-home-xl lg:w-[130%] lg:bg-home-sm lg:justify-start sm:h-[290px]">

            <div class="min-w-[1200px] relative z-10 mt-16 lg:px-5 lg:min-w-fit lg:pl-[180px] sm:pl-[85px]">
                <h2 class="mb-6 text-6xl font-extrabold text-white sm:text-4xl">Encontre seu CEP</h2>

                <p class="w-2/5 text-lg text-white lg:w-4/5 sm:text-base">
                    Consulte rapidamente o <span class="font-bold text-yellow-400">CEP</span> das ruas da <span
                        class="font-bold text-yellow-400">Cidade Mãe</span> e facilite sua vida!
                </p>
            </div>
        </section>

        <div class="relative flex items-center gap-4 mt-6 btn-cep">
            <button id="btn-rua"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">Pesquisar
                por Rua</button>
            <button id="btn-bairro"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">Pesquisar
                por Bairro</button>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mt-6 sm:mt-6">
        <div>
            <form class="flex flex-col items-center w-full" id="cep-form" action="{{ route('getRuas') }}">
                <div class="relative flex items-center justify-center mx-auto mb-6 w-fit">
                    <label
                        class="absolute px-3 font-bold text-blue-900 transition-all bg-white dark:bg-zinc-900 dark:text-yellow-500 left-8 bottom-12"
                        for="input-cep" id="label-rua">Nome da Rua</label>
                    <input type="text" required name="input-cep"
                        class="w-[400px] px-8 py-4 bg-white border-2 border-blue-900 rounded-full outline-none dark:border-yellow-500  dark:bg-zinc-900 dark:text-white"
                        id="input-cep">
                </div>

                <input type="submit" value="Pesquisar CEP"
                    class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">
            </form>
        </div>

        <p id="resultado-cep" class="mt-6 text-lg font-bold text-center text-blue-950">
            @isset($qntdDados)
                {{ $qntdDados }} resultados para "{{ $endereco }}"
            @endisset
        </p>


        <div id="ruas" class="flex flex-wrap items-start justify-center w-full gap-4 my-6">
            @empty($dados['itens'])
                <div class="flex items-center bg-blue-900 gap-2 w-[350px] p-3 pl-5 rounded-full">
                    <img class="w-16 ml-2"
                        src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/location.png"
                        alt="">
                    <div class="flex flex-col ml-4">
                        <span class="font-bold text-white">Nome da Rua</span>
                        <span class="mb-1 -mt-[2px] text-xs font-light text-white">Bairro - Complemento</span>
                        <span class="font-bold text-yellow-400">CEP</span>
                    </div>
                </div>
            @else
                @foreach ($dados['itens'] as $rua)
                    <button onclick="getMap({{ $rua['cep'] }})"
                        class="flex items-center bg-blue-900 gap-2 w-[350px] h-[115px] p-3 pl-5 rounded-full">
                        <img class="w-16 ml-2"
                            src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/location.png"
                            alt="">
                        <div class="flex flex-col items-start ml-4">
                            <span class="font-bold text-white capitalize text-start">{{ $rua['logradouro'] }}</span>
                            <span class="mb-1 -mt-[2px] text-xs font-light text-white text-start">{{ $rua['bairro'] }}
                                @isset($rua['complemento'])
                                    - {{ $rua['complemento'] }}
                                @endisset
                            </span>
                            <span class="font-bold text-yellow-400">{{ $rua['cep'] }}</span>
                        </div>
                    </button>
                @endforeach
            @endisset
        </div>
    </div>

    @push('scripts')
        @vite('resources/js/cep.js')
    @endpush
</x-layout.cep>
