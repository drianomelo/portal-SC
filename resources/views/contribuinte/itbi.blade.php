<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Imposto sobre Transmissão de Bens Imóveis Inter Vivos', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto xl:mb-10 lg:px-5">
        <x-title img="" h2="Sobre"
            p="Sobre o Imposto sobre Transmissão de Bens Imóveis Inter Vivos"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-8 dark:text-white text">
            <li class="text-justify list-disc">O imposto sobre transmissão de bens imóveis inter vivos – ITBI tem como
                fato gerador a transmissão a
                qualquer titulo por ato oneroso, de bens imóveis, incidirá sobre a transmissão e cessão, a qualquer
                titulo,
                da propriedade ou domínio útil de bens imóveis, por natureza ou acessão física e direitos reais sobre
                imóveis.</li>

            <li class="text-justify list-disc">Considera-se ocorrido o fato gerador do ITBI no momento do registro ou
                averbação no cartório de registro
                de
                imóveis das mutações patrimoniais e transmissões tributáveis.</li>

            <li class="text-justify list-disc">O fato gerador do imposto ocorrerá no território do município de São
                Cristóvão.</li>

            <li class="text-justify list-disc">A base de cálculo do imposto é o valor corrente de mercado do bem ou
                direito objeto da alienação, no
                momento
                da transmissão.
            </li>

            <li class="text-justify list-disc">A autoridade fazendária poderá arbitrar a base de cálculo sempre quando
                constatar que o valor declarado
                pelo
                contribuinte é menor do que o valor corrente de mercado do bem ou direito objeto da alienação.</li>


            <li class="text-justify list-disc">O cálculo do imposto será feito com a aplicação da alíquota de 2% (dois
                por cento) sobre o valor fixado
                para
                a base de cálculo.</li>

            <li class="text-justify list-disc">Contribuinte do imposto é o adquirente do bem ou direito sobre imóvel,
                assim entendida a pessoa em favor
                da
                qual se fará a transmissão inter vivos.</li>

        </ul>

        <x-title img="" h2="Anexos"
            p="Guias e anexos do Imposto sobre Transmissão de Bens Imóveis Inter Vivos"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-10 dark:text-white text">
            <li class="text-justify list-disc">
                O lançamento do ITBI será realizado por declaração do contribuinte através do preenchimento da <a
                    class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/GUIA_IMPOSTO_TRANSMISSAO_INTER_VIVOS.pdf">Guia
                    de
                    imposto sobre transmissão inter vivos – GTBI
                </a> encaminhada por
                e-mail: <a class="text-blue-400" href="">semfaz.itbi@saocristovao.se.gov.br</a>, anexando a
                Certidão de Inteiro teor do imóvel (emitida nos
                últimos 30 (trinta) dias); RG e CPF do adquirente e do transmitente; e documentos comprobatórios da
                natureza da transação (ex.: contrato, carta de adjudicação, etc.).
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/2/Requerimentos%20SEMFOP/GUIA_IMPOSTO_TRANSMISSAO_INTER_VIVOS1.pdf">GUIA
                    DE IMPOSTO SOBRE TRANSMISSÃO INTER VIVOS – GITBI
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://gestor.tributosmunicipais.com.br/redesim/views/publico/portaldocontribuinte/privado/imobiliario/extratoDebitos/extratoDebito.xhtml">GUIA
                    DE DÉBITO
                </a>
            </li>
        </ul>
    </div>
</x-layout>
