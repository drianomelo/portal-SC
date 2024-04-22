<x-header.search />

<header id="header"
    class=" top-0 z-[9999] flex items-center justify-between w-full p-5 transition-all duration-300 fixed sm:px-3 sm:gap-0">

    <div class="relative sm:mr-[50px]">
        <a href="/">
            <img class="w-[450px] xl:w-[400px] lg:w-[500px] sm:w-[400px]"
                src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/logo.png" alt="Logo prefeitura de SC">
        </a>
    </div>

    <x-header.menu-responsive />

    <x-header.menu-desktop />
</header>

@push('scripts')
    @vite('resources/js/scroll.js')
@endpush
