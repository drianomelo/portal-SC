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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Credenciamento', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Credenciamentos" p="Credenciamentos"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" href="{{ route('credenciamento.meis') }}">
                    Cadastro de Microempreendedores Individuais
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/credenciamentoMedicos/EDITAL_CHAMAMENTO_PUBLICO_03_2020_CREDENCIAMENTO_DE_MEDICOS.pdf">
                    Credenciamento de Pessoa Jurídica para Prestação de Serviços Médicos
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" href="{{ route('credenciamento.saude') }}">
                    Credenciamento de Pessoas Jurídicas para Prestação de Serviços Assistenciais de Saúde
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/informacoes/credenciamentoFasc/EDITAL_FASC_2022_PUBLICACAO.pdf">
                    Credenciamento FASC
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/Edital_Credenciamento_Radio_e_TV_-_PUBLICAR.pdf">
                    Credenciamento Rádio e TV
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" href="{{ route('credenciamento.recursos') }}">
                    Chamamento público contratação de empresa para captação de recursos
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" href="{{ route('credenciamento.festa-de-passos-2024') }}">
                    Credenciamento Festa de Passos 2024
                </a>
            </li>
        </ul>
    </div>
</x-layout>