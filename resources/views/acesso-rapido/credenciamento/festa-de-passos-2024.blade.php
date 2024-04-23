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
                    <x-caminho :caminhos="[
                        ['nome' => 'Início', 'url' => '/'],
                        ['nome' => 'Credenciamento', 'url' => '/credenciamento'],
                    ]" :last="['nome' => 'Festa de Passos 2024', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Relação dos Deferidos e Indeferidos"
            p="Relação dos Deferidos e Indeferidos"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Ladeira_da_Prefeitura.pdf">
                    Ladeira da Prefeitura
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Praca_da_Biblia.pdf">
                    Praça da Bíblia
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Praca_da_Matriz.pdf">
                    Praça da Matriz
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Praca_do_Carmo.pdf">
                    Praça do Carmo
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Rua_Tobias_Barreto.pdf">
                    Rua Tobias Barreto
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Roupas_e_Artigos_em_Geral_2.pdf">
                    Roupas e Artigos em Geral
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Pastel_e_Caldo_de_Cana.pdf">
                    Pastel e Caldo de Cana
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/Artigos_Religiosos.pdf">
                    Artigos Religiosos
                </a>
            </li>
        </ul>

        <x-title img="" h2="Anexos" p="Anexos para Credenciamento Festa de Passos 2024"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://docs.google.com/forms/d/e/1FAIpQLSexM7GOAWmrWrBAEh9GlNDsF4DkHjuwd52jEoeBXnNk5C_ljQ/viewform">
                    Formulário de Inscrição para ambulantes (Festa de Passos 2024)
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/EDITAL-OFICIAL-AMBULANTE%20FESTA%20DE%20PASSOS.pdf">
                    Edital - Chamamento público para ambulantes (Festa de Passos 2024)
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/COMERCIO%20-%202024.%20arq%202017%20-%20LADEIRA%20DA%20PREFEITURA.pdf">
                    COMERCIO - 2024. arq 2017 - LADEIRA DA PREFEITURA
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/COMERCIO%20-%202024.%20arq%202017%20-%20MATRIZ%20-%20P%C3%9ABLICO.pdf">
                    COMERCIO - 2024. arq 2017 - MATRIZ - PÚBLICO
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/festaDePassos2024/COMERCIO%20-%202024.%20arq%202017%20-%20P%C3%87%20%20DA%20B%C3%8DBLIA.pdf">
                    COMERCIO - 2024. arq 2017 - PRAÇA DA BÍBLIA
                </a>
            </li>
        </ul>
    </div>
</x-layout>
