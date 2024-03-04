<div class="flex items-center justify-between mb-6 -mt-28">
    <div class="flex gap-3">
        <div
            class="w-40 h-40 rounded-full border-4 border-white dark:border-zinc-900 bg-[url({{ $img }})] bg-cover">
        </div>
        <div class="flex flex-col text-white mt-7">
            <span class="font-semibold text">{{ $title }}</span>
            <span class="text-xs font-light text">{{ $subtitle }}</span>
            <div class="mt-2.5 flex gap-2">
                @foreach ($socials as $social)
                    <x-municipio.rounded-link href="{{ $social['url'] }}" icon="{{ $social['icon'] }}" />
                @endforeach
            </div>
        </div>
    </div>

    <a href="{{ $linkButton }}" target="_blanck"
        class="px-4 py-2 mb-10 text-sm font-semibold text-white bg-yellow-400 rounded-md shadow-md outline-none text">{{ $nameButton }}
    </a>
</div>
