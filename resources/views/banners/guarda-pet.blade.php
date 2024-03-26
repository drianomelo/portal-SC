<x-layout>
    <section
        class="w-[110%] h-[215px] bg-home rounded-b-[35%] relative flex justify-center items-center
        before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.30]
        xl:w-[120%] xl:bg-home-xl lg:w-[130%]">
    </section>

    <div class="min-w-[1200px] mx-auto lg:px-5">
        <div class="relative z-50 flex items-center justify-between mb-6 -mt-5">
            <div class="">
                <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/'], ['nome' => 'Banners', 'url' => '/banners']]" :last="['nome' => 'Guarda Pet', 'url' => '']" />

            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:pt-5">
        <x-title img="" h2="Sobre" p="Sobre a Lei Paulo Gustavo"></x-title>
        <div class="mb-6">
            <p
                class="mt-2 text-justify sm:text-xs sm:first-letter:text-6xl dark:text-white first-letter:text-7xl first-letter:font-bold first-letter:mr-3 first-letter:text-yellow-400 first-letter:float-left text">
                A Lei Paulo Gustavo é um apoio essencial para a cultura, artistas, técnicos e trabalhadores do setor
                superarem os efeitos de dois anos da pandemia do Covid-19. A lei injetará R$3,8 bilhões para o fomento e
                apoio das expressões culturais e manifestações artísticas em todo o Brasil. O recurso é do próprio setor
                cultural, reinvestindo valores do Fundo Nacional de Cultura e do Fundo Setorial do Audiovisual (FSA).
            </p>
        </div>
    </div>
</x-layout>
