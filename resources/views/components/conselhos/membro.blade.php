<div>
    <div
        class="relative overflow-hidden flex justify-end text-center items-center mr-2.5 flex-col float-left sm:float-none sm:h-52 sm:mr-0 sm:mb-2 w-[280px] h-48 rounded-lg">

        <img src="{{ $img }}" alt="" class="absolute w-full {{ $position }}">

        <div class=" pt-8 pb-1.5 rounded-b-lg gradient-post-bottom w-full relative">
            <h5 class="text-xs font-semibold text-white whitespace-nowrap">{{ $nome }}
            </h5>
            <p class="whitespace-nowrap text-[11px] text-white font-light">{{ $cargo }}</p>
        </div>
    </div>
    <p class="mb-1 text-justify sm:text-xs text dark:text-white sm:mb-0">
        {{ $bio }}
    </p>
</div>
