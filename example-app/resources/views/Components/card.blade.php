@props(['highlight' => 'false'])

<div @class([
    'bg-slate-200' => $highlight,
    'flex',
    'justify-between',
    'py-5',
    'px-5',
    'shadow-lg',
])>
    {{ $slot }}
    <a {{ $attributes }} class="text-xl text-gray-500 hover:text-gray-700 font-semibold bg-red-200 py-1 px-5 rounded-md ">View details</a>
</div>
