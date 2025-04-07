@props(['highlight' => 'true'])

<div @class(['highlight' => $highlight,'bg-red-500' => $highlight])>
    {{ $slot }}
    <a {{ $attributes }} class="underline">View details</a>
</div>
