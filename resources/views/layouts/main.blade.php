@extends('master')

@section('content')
    <!-- HOME -->
    <section
        class="home w-full h-[85vh] flex items-center justify-center
                before:content-[''] before:block before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-80 before:transition-all before:duration-300
                ">
        <div class="min-w-[1200px] relative z-10">
            <h1 class="mb-10 text-5xl font-bold text-white"><span class="block text-7xl">São Cristóvão</span> espera por você
            </h1>
            <a href=""
                class="group flex items-center gap-10 p-4 overflow-hidden  font-semibold border-2 border-white rounded-md w-fit relative
            before:content-[''] before:absolute before:w-full before:h-full before:bg-blue-900 before:-left-48 before:transition-all before:duration-300
           ">
                <span class="relative z-50 text-xs text-white uppercase">clicando
                    aqui</span>
                <i class="relative z-50 text-white fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- CAROUSEL -->
    <section class="carousel w-[1200px] relative -top-40 my-0 mx-auto">
        <div class="flex gap-4 mb-4">
            <div class="flex items-start">
                <button class="flex items-center justify-center h-full px-4 border-2 border-r-0 rounded rounded-r-none glider__prev" aria-label="Anterior">
                    <i class="text-xs text-white fa-solid fa-chevron-left"></i>
                </button>
                <button class="flex items-center justify-center h-full px-4 border-2 rounded rounded-l-none glider__next" aria-label="Próximo">
                    <i class="text-xs text-white fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="flex flex-col">
                <p class="text-sm font-extrabold text-white">Últimas publicações</p>
                <span class="text-xs font-light text-white opacity-60">As notícias mais recentes de São Cristóvão</span>
            </div>
        </div>
        <div class="w-full glider">
            <x-carousel-item img="https://placehold.co/600x400/png"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item img="https://placehold.co/600x400/png"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item img="https://placehold.co/600x400/png"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item img="https://placehold.co/600x400/png"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item img="https://placehold.co/600x400/png"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
            <x-carousel-item img="https://placehold.co/600x400/png"
                noticia="Prefeito Marcos Santana participa de Assembleia Inaugural do Consórcio de Transporte Público com gestores da Grande Aracaju"
                data="13/11/2023" />
        </div>
    </section>

    <!-- BANNERS -->
    <section ></section>
@endsection

@section('scripts')
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: '3',
            slidesToScroll: '1',

            arrows: {
                prev: '.glider__prev',
                next: '.glider__next'
            }
        });
    </script>
@endsection
