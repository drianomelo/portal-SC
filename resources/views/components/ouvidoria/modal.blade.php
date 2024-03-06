<div id="{{ $id }}"
    class="fixed hidden-modal modal transition-all bg-white w-[600px] rounded-t-lg rounded-b-lg left-2/4 -translate-x-2/4 -translate-y-2/4 duration-300">
    <header class="flex justify-between px-5 py-3 border-b rounded-t-lg border-zinc-200">
        <h3 class="flex items-center gap-2 text-sm text-blue-950">
            <i class="text-base fa-solid fa-address-book"></i>
            {{ $name }}
        </h3>
        <button class="text-[8px] font-bold bg-blue-900 shadow p-1.5 rounded-md text-white"
            onclick="closeModal({{ $id }})">ESC</button>
    </header>
    <main class="pb-3 rounded-b-lg">
        {{ $slot }}
    </main>
</div>


