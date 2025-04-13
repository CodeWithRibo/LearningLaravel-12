<x-layout>
    <div class="pt-5 text-2xl text-gray-500 font-bold">
        <h2>Name : {{ $ribos->name }}</h2>
        <h2>Age : {{ $ribos->age }} years old</h2>

    </div>
    <div class="flex flex-col">
        <span class="text-xl text-gray-700"><strong>Skill: </strong> {{ $ribos->skill }}</span>
        <span class="text-xl text-gray-700"><strong>About me: </strong> </span>
        <p class="text-xl text-slate-700">{{ $ribos->bio }}</p>
    </div>
</x-layout>
