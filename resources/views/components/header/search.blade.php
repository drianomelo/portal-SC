<div id="search"
    class="fixed z-[9999] flex items-center justify-center w-full p-4 transition-all duration-300 bg-[#111C5A] -top-20 ">
    <div class="min-w-[1200px] relative flex items-center justify-center">
        <span class="absolute left-0 text-lg font-semibold text-white">O que deseja pesquisar?</span>
        <form action="#">
            @csrf
            <div class="relative flex items-center justify-between p-1 bg-white rounded">
                <i class="p-2 text-gray-400 fa-solid fa-magnifying-glass"></i>
                <input class="text-gray-400 border-0 outline-none placeholder:text-gray-400" type="text" name="pesquisa"
                    id="pesquisa" required >
                <button class="p-2 text-[10px] font-bold text-white uppercase bg-blue-900 rounded"
                    type="submit">Pesquisar</button>
            </div>
        </form>
        <button type="button" id="search-close"
            class="absolute right-0 flex items-center justify-center w-6 h-6 bg-white border-none rounded-full ">
            <i class="font-bold text-blue-900 fa-solid fa-xmark"></i>
        </button>
    </div>
</div>

@push('scripts')
    @vite('resources/js/search.js')
@endpush
