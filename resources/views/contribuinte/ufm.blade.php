<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'UFM', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Anexos" p="Anexos da Unidade Fiscal do Município"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-10 dark:text-white text">
            <li class="text-justify list-disc">Fica
                atualizado o valor da Unidade Fiscal do Município - UFM para R$ 6,23 (seis reais e vinte e três
                centavos) durante o exercício de 2024.
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/ufm/d_o_municipal_sao_cristovao_2024-01-03_completo.pdf">
                    DECRETO N° 01/2024
                </a>
            </li>
        </ul>
    </div>
</x-layout>
