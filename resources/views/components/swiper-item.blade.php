<a href="{{ $href }}" class="text-center swiper-slide">
    <img class="w-full mb-4 rounded-md" src="{{ $img }}" alt="Publicação Municipio de São Cristóvão">
    <div
        class="flex justify-center items-center gap-5 mb-4
                before:content-[''] before:block before:w-[28%] before:h-[1px] before:bg-gray-200
                after:content-[''] after:block after:w-[28%] after:h-[1px] after:bg-gray-200">
        <span class="text-[10px] py-1 px-2.5 bg-blue-900 rounded text-white font-semibold uppercase text">notícia</span>
    </div>
    <h3 class="px-10 mb-1 font-extrabold text-center text-black text dark:text-white">{{ $noticia }}</h3>
</a>
