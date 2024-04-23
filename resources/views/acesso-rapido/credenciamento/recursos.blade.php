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
                    ]" :last="['nome' => 'Recursos', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Anexos"
            p="Anexos para Chamamento público contratação de empresa para captação de recursos"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/fumctur/CHAMAMENTO%20P%C3%9ABLICO%20CONTRATA%C3%87%C3%83O%20DE%20EMPRESA%20PARA%20CAPTA%C3%87%C3%83O%20DE%20RECURSOS.pdf">
                    Chamamento público contratação de empresa para captação de recursos
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/fumctur/ANEXO%20I.pdf">
                    ANEXO I
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/fumctur/ANEXO%20II.pdf">
                    ANEXO II
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/fumctur/ANEXO%20III.pdf">
                    ANEXO III
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/fumctur/ANEXO%20IV.pdf">
                    ANEXO IV
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/credenciamento/fumctur/ANEXO%20VI.pdf">
                    ANEXO VI
                </a>
            </li>
        </ul>
    </div>
</x-layout>
