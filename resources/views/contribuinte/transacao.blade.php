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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Transação', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Âncoras" p="Links para Transação"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-10 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/contribuinte/termo_adesao_transacao/LEI%20491-2021-TRANSACAO.pdf">
                    Lei
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/IN%20001.2023%20PGM-TRANSAÇÃO%20INDIVIDUAL-BAIXA%20RENDA.pdf">
                    Transação Individual Iniciativa da Procuradoria
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/Instrução%20Normativa%20Nº%20001-2023.pdf">
                    Proposta de Transação Individual Iniciativa da Procuradoria
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/IN%20002.2023-PGM_Transacao%20Individual-INICIATIVA%20DO%20DEVEDOR.pdf">
                    Transação Individual Iniciativa do Devedor
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/Proposta%20de%20Transacao/Instrução%20Normativa%20Nº%20002-2023.pdf">
                    Proposta de Transação Individual Iniciativa do Devedor
                </a>
            </li>
        </ul>
    </div>
</x-layout>
