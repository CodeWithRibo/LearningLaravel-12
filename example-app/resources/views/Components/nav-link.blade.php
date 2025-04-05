
@props(['active' => false])
{{-- 
    <a class="{{$active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white'}}" 
    {{$attributes}} >{{$slot}}</a>  --}}

    @props(['type' => 'anchor'])
    <a {{ $attributes }} class="text-blue-500 hover:text-blue-700" >
        {{ $slot }}
    </a>
    {{-- @if($type === 'anchor')
        <a {{ $attributes }} class="text-blue-500 hover:text-blue-700" >
            {{ $slot }}
        </a>
    @elseif($type ==='button')
        <button class="bg-blue-500 text-white py-2 px-4 hover:bg-blue-700 {{ $attributes }}">
            {{ $slot }}
        </button>
    @endif --}}
    