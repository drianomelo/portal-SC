<div class="fixed hidden-modal modal transition-all bg-blue-950 w-[600px] rounded-t-lg rounded-b-lg left-2/4 -translate-x-2/4 -translate-y-2/4 duration-300">
    <header class="flex justify-between px-5 py-3 border-b border-[#162b66] rounded-t-lg">
        <h3 class="flex items-center gap-2 text-sm text-white">
            <i class="text-base fa-solid fa-address-book"></i>
            {{ $name }}
        </h3>
        <button class="text-[8px] font-bold bg-blue-900 shadow p-1.5 rounded-md text-white" id="esc">ESC</button>
    </header>
    <main class="pb-3 rounded-b-lg">
        <div class="py-4 font-bold text-white border-b border-[#162b66]">
            <h4 class="ml-5">Contatos</h4>
        </div>
        <div class="py-2 hover:bg-[#183070] flex flex-col gap-2 border-b border-[#162b66]">
            <span class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Endereço</span>
            <span class="mx-5 text-white">{{ $address }}</span>
        </div>
        <div class="py-2 hover:bg-[#183070] flex flex-col gap-2 border-b border-[#162b66]">
            <span class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Horário de Atendimento</span>
            <span class="mx-5 text-white">{{ $horario }}</span>
        </div>
        <div class="py-2 hover:bg-[#183070] flex flex-col gap-2 border-b border-[#162b66]">
            <span class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Telefones</span>
            <span class="mx-5 text-white">{{ $phone }}</span>
        </div>
        <div class="py-2 hover:bg-[#183070] flex flex-col gap-2 border-b border-[#162b66]">
            <span class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Celular</span>
            <span class="mx-5 text-white">{{ $cellphone }}</span>
        </div>
        <div class="py-2 hover:bg-[#183070] flex flex-col gap-2 border-b border-[#162b66]">
            <span class="px-3 py-1 mx-5 text-sm font-bold text-white bg-blue-900 rounded-full shadow w-fit">Email</span>
            <span class="mx-5 text-white">{{ $email }}</span>
        </div>
    </main>
</div>

<div class="fixed w-screen h-screen transition-all bg-black hidden-back-modal back-modal bg-opacity-80"></div>
