@props(['ancoras', 'title'])

<div class="flex flex-col items-center gap-4 w-[350px]">
    <span class="px-4 py-2.5 text-lg font-bold text-yellow-900 bg-yellow-400 rounded-md w-fit">{{ $title }}</span>
    <div class="flex flex-wrap justify-center w-full gap-1">
        @if (count($ancoras) == 1)
            @foreach ($ancoras as $ancora)
                <a class="bg-blue-900 text-white px-4 py-2.5 rounded-md text-center font-bold flex-1"
                    href="{{ $ancora['url'] }}">{{ $ancora['nome'] }}</a>
            @endforeach
        @else
            @foreach ($ancoras as $ancora)
                <a class="bg-blue-900 text-white px-4 py-2.5 rounded-md text-center font-bold flex-1 min-w-[150px]"
                    href="{{ $ancora['url'] }}">{{ $ancora['nome'] }}</a>
            @endforeach
        @endif
    </div>
</div>
