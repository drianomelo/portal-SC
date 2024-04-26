<x-layout>
    <div class="flex flex-col items-center w-full overflow-x-hidden">
        <section
            class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%] sm:lg:w-[140%] sm:bg-home-sm">
        </section>

        <div class="min-w-[1200px] mx-auto lg:px-5 lg:min-w-full sm:px-3">
            <div class="relative z-50 flex items-center justify-between gap-4 mb-6 -mt-5">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Guarda Pet', 'url' => '']" />
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3">
        <x-title img="" h2="GuardaPet" p="Promovendo a Responsabilidade Social e Ambiental"></x-title>
        <div class="flex gap-6 mb-6">
            <p
                class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                O GuardaPet é um programa municipal instituído pela Lei nº 610/2023, que visa promover a guarda
                responsável de animiais de estimação, integrando ações sociais e ambientais para construir uma
                comunidade mais consciente e equilibrada.
            </p>

            <a href="" class="shadow-md block rounded-xl min-w-[250px]">
                <img src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-guarda-pet.jpeg"
                    alt="Banner" class="w-full h-full rounded-xl">
            </a>
        </div>

        <x-title img="" h2="Guarda Responsável" p="Promovendo a Responsabilidade Social e Ambiental"></x-title>
        <div class="flex gap-6 mt-2 mb-4 ">
            <p
                class="text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                A GUARDA RESPONSÁVEL vai além de simplesmente ter um animal de estimação. Envolve o comprometimento com
                a saúde, bem-estar e comportamento ético em relação aos animais. No município de São Cristóvão é
                proibído praticar ato de abuso, maus-tratos, ferir, mutilar ou abandonar qualquer animal, sujeito a
                penalidades administrativas, além de se constituir crime, conforme a Lei Federal nº 9605/1998.
            </p>

            <div
                class="h-40 min-w-[350px] shadow-md rounded-xl bg-cover bg-[url('https://anexos.saocristovao.se.gov.br/storage/files/18/portal/guarda-pet-1.jpg')]">
            </div>
        </div>

        <x-title img="" h2="Adoção Responsável" p="Promovendo a Responsabilidade Social e Ambiental"></x-title>
        <div class="mt-2 mb-5">
            <div
                class="flex justify-end text-center items-center mr-4 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 min-w-[350px] h-40 rounded-lg bg-cover bg-[center_top_-1rem] bg-[url(https://anexos.saocristovao.se.gov.br/storage/files/18/portal/guarda-pet-2.jpg)]">
            </div>
            <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
                Ao adotar um animal de estimação, os cidadãos participam ativamente na construção de uma sociedade mais
                compassiva e sustentável. Essa atitude não só beneficia os animais, mas também contribui para a redução
                da população de animais abandonados e, consquentemente, para a preservação do meio ambiente. O GuardaPet
                não é apenas um compromisso com os nossos amigos de quatro patas, mas também um passo firme em direção a
                uma sociedade mais consciente, ética e ecologicamente equilibrada. Cada ação individual conta, e juntos
                podemos construir um futuro onde a guarda responsável seja a norma, beneficiando não apenas nossos
                animais de estimação, mas toda a comunidadae e o meio ambiente em que vivemos.
            </p>
        </div>

        <x-title img="" h2="CastraPet" p="Promovendo a Responsabilidade Social e Ambiental"></x-title>
        <a href="{{ route('banners.castrapet') }}" class="shadow-md block mt-2 rounded-xl w-[350px]">
            <img src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/banner/banner-castra-pet.jpg"
                alt="Banner" class="w-full h-full rounded-xl">
        </a>
    </div>
</x-layout>
