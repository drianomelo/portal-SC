<div
    class="flex items-center justify-between mb-6 -mt-28 xl:-mt-[117px] xl:mb-4 lg:px-8 lg:-mt-[115px] sm:-mt-[110px] sm:px-4">
    <div class="flex gap-3">
        <div class="w-40 h-40 overflow-hidden border-4 border-white rounded-full dark:border-zinc-900 sm:h-28 sm:w-28">
            <img src="{{ $img }}" alt="" class="w-full rounded-full sm:h-28 sm:w-28 ">
        </div>
        <div class="flex flex-col text-white mt-7">
            <span class="font-semibold text sm:text-sm">{{ $title }}</span>
            <span class="text-xs font-light text">{{ $subtitle }}</span>
            <div class="mt-2.5 flex gap-2">
                @foreach ($socials as $social)
                    <x-municipio.rounded-link href="{{ $social['url'] }}" icon="{{ $social['icon'] }}" />
                @endforeach
            </div>
        </div>
    </div>

    <a href="{{ $linkButton }}" target="_blank"
        class="px-4 py-2 mb-10 text-sm font-semibold text-white bg-yellow-400 rounded-md shadow-md outline-none text sm:hidden">{{ $nameButton }}
    </a>
</div>
