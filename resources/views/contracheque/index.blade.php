<x-layout>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%] sm:lg:w-[140%] sm:bg-home-sm">
        </section>

        <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-3">
            <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
                <div class="">
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Contracheque', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 lg:px-3">
        <x-title img="" h2="Guia" p="Use este guia passo a passo para emitir o seu contracheque"></x-title>
        <div class="pl-4 mt-4">
            <p class="mb-1 text-xs font-bold">1 - No campo CPF, insira o seu número de CPF.</p>
            <p class="mb-1 text-xs font-bold">2 - No campo Senha: se este for o seu primeiro acesso ou caso não tenha
                alterado sua senha, utilize a sua
                data de nascimento sem espaços, no seguinte formato: DDMMYYYY. Por exemplo, se a sua data de nascimento
                for 26/01/1967, sua senha será 26011967.
                Se este não for o seu primeiro acesso ou caso já tenha alterado sua senha, utilize a senha que você
                definiu anteriormente.</p>
            <p class="mb-4 text-xs font-bold text-red-500">Obs.: Se este for o seu primeiro acesso, é importante que você utilize a opção "ALTERAR MINHA SENHA"
                localizada no canto esquerdo, para modificar a sua senha.</p>
        </div>
        <iframe class="w-full  min-h-[700px]" src="https://servicos.govnet.com.br/#/login?ug=280670199999"
            frameborder="0"></iframe>
    </div>

</x-layout>
