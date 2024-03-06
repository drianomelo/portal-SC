@if ($href !== '')
    <a href="{{ $href }}" target="_blank"
        class="flex relative flex-col outline-none swiper-slide items-center w-[300px] bg-blue-900  px-5 pt-4 pb-6 rounded-[2rem]">
        <div class="flex items-center justify-center w-24 h-24 -mt-12 bg-blue-900 rounded-full">
            <i class="text-[50px] text-yellow-400 {{ $icon }}"></i>
        </div>
        <h3 class="mb-2 -mt-3 text-lg font-bold text-yellow-400">{{ $title }}</h3>
        <p class="text-sm text-center text-white truncate-title h-[58px]">{{ $desc }}</p>
    </a>
@else
    <button onclick="openModal({{ $id }})"
        class="flex open-modal relative flex-col outline-none swiper-slide items-center w-[300px] bg-blue-900  px-5 pt-4 pb-6 rounded-[2rem]">
        <div class="flex items-center justify-center w-24 h-24 -mt-12 bg-blue-900 rounded-full">
            <i class="text-[50px] text-yellow-400 {{ $icon }}"></i>
        </div>
        <h3 class="mb-2 -mt-3 text-lg font-bold text-yellow-400">{{ $title }}</h3>
        <p class="text-sm text-center text-white truncate-title h-[58px]">{{ $desc }}</p>
    </button>
@endif
