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
                    <x-caminho :caminhos="[['nome' => 'Início', 'url' => '/']]" :last="['nome' => 'Licenças', 'url' => '']" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-w-[1200px] mx-auto mb-10 xl:pb-0 lg:px-5 sm:px-3 lg:min-w-full">
        <x-title img="" h2="Órgãos" p="Licenciamentos de cada Secretaria"></x-title>
        <ul class="flex flex-col gap-2 pl-5 mt-4 dark:text-white text">
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank" href="{{ route('licencas.semma') }}">
                    Secretaria Municipal de Meio Ambiente - SEMMA
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank" href="{{ route('licencas.sms') }}">
                    Secretaria Municipal de Saúde - SMS
                </a>
            </li>
            <li class="text-justify list-disc">
                <a class="text-blue-400" target="blank" href="{{ route('licencas.seminfra') }}">
                    Secretaria Municipal de Infraestrutura - SEMINFRA
                </a>
            </li>
        </ul>
    </div>
</x-layout>
