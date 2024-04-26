<x-layout>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%] sm:lg:w-[140%] sm:bg-home-sm">
        </section>

        <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-3">
            <div class="relative z-50 flex items-center justify-between gap-4 mb-6 -mt-5">
                <x-caminho :caminhos="[
                    ['nome' => 'Início', 'url' => '/'],
                    ['nome' => 'Banners', 'url' => '/banners'],
                    ['nome' => 'Guarda Pet', 'url' => '/banners/guarda-pet'],
                ]" :last="['nome' => 'Castra Pet', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3">
        <x-title img="" h2="CastraPet" p="Promovendo a Responsabilidade Social e Ambiental"></x-title>
        <div class="flex gap-6 mb-4">
            <p
                class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                O projeto busca promover a castração como uma medida eficaz para reduzir a reprodução de crias
                indesejáveis, prevenindo o abandono, e contribuindo com a melhoria da saúde única.
            </p>

            <a href="" class="shadow-md block rounded-xl min-w-[250px]">
                <img src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-castra-pet.jpg"
                    alt="Banner" class="w-full h-full rounded-xl">
            </a>
        </div>

        <x-title img="" h2="Pré-requisitos"
            p="Para ser contemplado com a castração, é necessário estar dentro dos pré-requisitos a seguir:"></x-title>
        <div class="flex gap-6 mt-2 mb-4 ">
            <ul class="flex flex-col gap-2 pl-10 list-disc dark:text-white">
                <li class="text-base">O responsável deve ser domiciliado em São Cristóvão/SE;</li>
                <li class="text-base">Os animais pertencentes a famílias de baixa renda devidamente comprovada e com
                    cadastro atualizado no CadÚnico.</li>
            </ul>

            <div
                class="h-40 min-w-[350px] shadow-md rounded-xl bg-cover bg-[url('https://anexos.saocristovao.se.gov.br/storage/files/18/portal/guarda-pet-1.jpg')]">
            </div>
        </div>

        <x-title img="" h2="Castração" p="Links para Castração de cães e gatos"></x-title>
        <div class="flex justify-between gap-6 mt-2 mb-4">
            <ul class="flex flex-col gap-2 pl-10 list-disc dark:text-white">
                <li class="text-lg">Castração de cães
                    <a class="block text-sm text-blue-400"
                        href="https://docs.google.com/forms/d/e/1FAIpQLSfWyqeiTcmlHUFGntoIofUwMDs9h60ATr74r9xKdWgZ6dKmrQ/viewform?usp=sf_link"
                        target="_blank">Clique
                        aqui para acessar o formulário para castração de cães</a>
                </li>
                <li class="text-lg">Castração de gatos
                    <a class="block text-sm text-blue-400"
                        href="https://docs.google.com/forms/d/e/1FAIpQLSdvfG5g16HvrnOH4adrB9elsDMg24oo2S-F6bjBy2ix-U0M5g/viewform?usp=sf_link"
                        target="_blank">Clique
                        aqui para acessar o formulário para castração de gatos</a>
                </li>
            </ul>
            <div
                class="h-40 min-w-[350px] shadow-md rounded-xl bg-cover bg-[url('https://anexos.saocristovao.se.gov.br/storage/files/18/portal/guarda-pet-2.jpg')]">
            </div>
        </div>

        <x-title img="" h2="ONG'S e Protetores" p="Cadastro para ONG'S e Protetores"></x-title>
        <div class="flex gap-6 mb-4">
            <p
                class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                O cadastro tem como objetivo identificar os Protetores Independentes e ONG's que serão atendidos com
                prioridade no Programa GuardaPet e criar uma rede de apoio para os animais em situação de
                vulnerabilidade.
            </p>

            <div
                class="h-40 min-w-[350px] shadow-md rounded-xl bg-cover bg-[url('https://anexos.saocristovao.se.gov.br/storage/files/18/portal/guarda-pet-3.jpg')]">
            </div>
        </div>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSev2lIGVPmDnDH88ImTqTQGCyzyASLLH6zitgCo0lr9KYEEDA/viewform"
            class="block px-4 py-2 text-lg font-bold text-yellow-400 bg-blue-900 rounded-md w-fit"
            target="_blank">Cadastre-se clicando aqui
            <i class="ml-1 fa-solid fa-paw"></i>
        </a>
    </div>
</x-layout>
