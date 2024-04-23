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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Licenças', 'url' => '/licencas']]" :last="['nome' => 'Licenças Infraestrutura', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Licenças de Infraestrutura"
            p="Licenças da Secretaria Municipal de Infraestrutura"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-6 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Cessao_Uso_Espaco_Publico.pdf">
                    Cessão de Uso do Espaço Público (Parques, Circos, Barracas de Fogos e Barracas de Ambulantes)
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Construcao_Inicial_Imoveis_Uso_Nao_Residencial.pdf">
                    Construção Inicial de Imóveis de Uso Não Residencial
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Construcao_Inicial_Imoveis_Uso_Residencial.pdf">
                    Construção Inicial de Imóveis de Uso Residencial
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Demolicao.pdf">
                    Demolição
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Habite-se.pdf">
                    Habite-se
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Parcelamento_Solo_Desmembramento.pdf">
                    Parcelamento do Solo – Desmembramento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Parcelamento_Solo_Loteamento.pdf">
                    Parcelamento do Solo – Loteamento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Reforma_Imoveis_Uso_Nao_Residencial.pdf">
                    Reforma/Ampliação de Imóveis de Uso Não Residencial
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Reforma_Imoveis_Uso_Residencial.pdf">
                    Reforma/Ampliação de Imóveis de Uso Residencial
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Regularizacao_Construcao_Imoveis_Uso_Nao_Residencial.pdf">
                    Regularização de Construção Para Imóveis de Uso Não Residencial
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Regularizacao_Construcao_Imoveis_Uso_Residencial.pdf">
                    Regularização de Construção Para Imóveis de Uso Residencial
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Remembramento.pdf">
                    Remembramento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/TVO.pdf">
                    Termo de Verificação (TVO) – Loteamentos / Parcelamento Vinculado / Arruamento de Desmembramento
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/arquivos/portal/licenciamentos/seminfra/Uso_Ocupacao_Solo.pdf">
                    Uso e Ocupação do Solo
                </a>
            </li>
        </ul>
    </div>
</x-layout>
