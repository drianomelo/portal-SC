@if ($link === "true")
    <a href="#" {{ $attributes->merge(['class' => 'flex items-center justify-center w-12 h-12 border-2 border-white rounded-full']) }}>
        <i class="fa-solid fa-{{$icon}} text-white text-xs"></i>
    </a>
@elseif ($link === "false")
    <button {{ $attributes->merge(['class' => 'flex items-center justify-center w-12 h-12 border-2 border-white rounded-full']) }}>
        <i class="fa-solid fa-{{$icon}} text-white text-xs"></i>
    </button>
@endif
