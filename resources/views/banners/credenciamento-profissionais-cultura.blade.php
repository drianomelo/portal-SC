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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Credenciamento dos Profissonais da Cultura', 'url' => '']" />

                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Anexos" p="Anexos do Credenciamento dos Profissonais da Cultura"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-10 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Credenciamento%20dos%20Profissionais%20da%20Cultura/Edital%20Credenciamento%20de%20Artista%202023%20-%20FINAL.pdf">
                    EDITAL DE CREDENCIAMENTO DE ARTISTAS
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/Credenciamento%20dos%20Profissionais/ANEXO%20III%20DECLARA%C3%87%C3%83O%20DE%20AUTORIZA%C3%87%C3%83O%20DE%20EXECU%C3%87%C3%83O.docx">
                    ANEXO III DECLARAÇÃO DE AUTORIZAÇÃO DE EXECUÇÃO
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/Credenciamento%20dos%20Profissionais/ANEXO%20IV%20REPRESENTA%C3%87%C3%83O%20DE%20GRUPO%20COLETIVO.docx">
                    ANEXO IV CARTA DE REPRESENTAÇÃO DE GRUPO COLETIVO
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/Credenciamento%20dos%20Profissionais/ANEXO%20V%20DECLARA%C3%87%C3%83O%20DE%20RESID%C3%8ANCIA%20EM%20NOME%20DE%20TERCEIROS.docx">
                    ANEXO V DECLARAÇÃO DE RESIDÊNCIA EM NOME DE TERCEIROS
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/9/Credenciamento%20dos%20Profissionais/ANEXO%20VI%20FORMUL%C3%81RIO%20DE%20RECURSO.docx">
                    ANEXO VI FORMULÁRIO DE RECURSO
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank" href="https://catalogocultural.saocristovao.se.gov.br/login">
                    INSCRIÇÕES
                </a>
            </li>
        </ul>
    </div>
</x-layout>
