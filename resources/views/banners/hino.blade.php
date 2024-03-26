<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Concurso Hino Municipal', 'url' => '']" />

            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Anexos" p="Anexos do Programa de Estágio"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-10 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Hino%20Municipal/Edital%20-%20Hino.pdf">
                    Edital
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Hino%20Municipal/Anexo%20I%20-%20Hino.pdf">
                    ANEXO I
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Hino%20Municipal/Anexo%20II%20-%20Hino%20-%20Site.pdf">
                    ANEXO II
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Hino%20Municipal/Anexo%20III%20-%20Hino.pdf">
                    ANEXO III
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://docs.google.com/forms/d/e/1FAIpQLSctUTjN39FgXVv6wz8VLYnxvZFy2aRHppBI7kPjY06kbv9dHA/viewform">
                    Formulário de Inscrição
                </a>
            </li>
        </ul>
    </div>
</x-layout>
