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
                class="group flex items-center gap-10 p-4 overflow-hidden  font-semibold  transition-all duration-300 border-2 border-white rounded-md w-fit relative
            before:content-[''] before:absolute before:w-full before:h-full before:bg-blue-900 before:-left-48 before:transition-all before:duration-300
            hover:border-blue-900 hover:before:left-0">
                <span
                    class="relative z-50 text-xs text-white uppercase transition-all duration-300 group-hover:text-blue-500">clicando
                    aqui</span>
                <i
                    class="relative z-50 text-white transition-all duration-300 fa-solid fa-arrow-right group-hover:text-blue-500 group-hover:animate-bounce-side"></i>
            </a>
        </div>
    </section>

    <!-- CAROUSEL -->
    <section class="carousel min-w-[1200px]">
        <div class="w-full glider">
            <div class="flex-1"> <img src="https://placehold.co/600x400/png"> </div>
            <div class="flex-1"> <img src="https://placehold.co/600x400/png"> </div>
            <div class="flex-1"> <img src="https://placehold.co/600x400/png"> </div>
            <div class="flex-1"> <img src="https://placehold.co/600x400/png"> </div>
            <div class="flex-1"> <img src="https://placehold.co/600x400/png"> </div>
            <div class="flex-1"> <img src="https://placehold.co/600x400/png"> </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: '3',
            slidesToScroll: '1',
        });
    </script>
@endsection
