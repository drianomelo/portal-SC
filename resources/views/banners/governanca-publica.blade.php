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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Governança Pública', 'url' => '']" />

                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3">
        <x-title img="" h2="Sobre" p="Sobre a Governança Pública"></x-title>
        <div class="mb-6">
            <p
                class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                A governança pública é um conjunto de mecanismos de liderança, estratégia e controle voltadas para
                avaliar,
                direcionar e monitorar a gestão, com vistas à condução e geração de resultados nas políticas
                públicas e
                à
                prestação de serviços de interesse da sociedade. Envolve o compliance público com o seu alinhamento
                e
                adesão
                a valores, princípios e normas para sustentar e priorizar o interesse público em relação ao
                interesse
                privado no setor público.
            </p>
            <p class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white text">
                Agregando valor público com produtos e resultados gerados, preservados ou entregues pelo órgão ou
                entidade
                que representem respostas efetivas e úteis às necessidades ou às demandas de interesse público e
                modifiquem
                aspectos do conjunto da sociedade ou de grupos específicos reconhecidos como destinatários legítimos
                de
                bens
                e serviços públicos.
            </p>
            <p class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white text">
                Agregando valor público com produtos e resultados gerados, preservados ou entregues pelo órgão ou
                entidade
                que representem respostas efetivas e úteis às necessidades ou às demandas de interesse público e
                modifiquem
                aspectos do conjunto da sociedade ou de grupos específicos reconhecidos como destinatários legítimos
                de
                bens
                e serviços públicos.
            </p>
        </div>

        <x-title img="" h2="Anexos" p="Anexos da Governança Pública"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 mb-10 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Governança%20Pública/Lei_no_589.2022-_Institui_a_Politica_de_Governanca_Publica_e_Compliance_assinado_1.pdf">Lei
                    nº 589.2022 - Instituição Politica de Governança Publica e Compliance assinado
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank"
                    href="https://anexos.saocristovao.se.gov.br/storage/files/45/Governança%20Pública/Lei_no_608.2023_Altera_a_Lei_no_589.2022_1.pdf">Lei
                    nº 608.2023 - Altera a Lei nº 589.2022
                </a>
            </li>
        </ul>
    </div>
</x-layout>
