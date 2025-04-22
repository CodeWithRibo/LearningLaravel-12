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

    <form action="{{ route('RiboBlog.destroy',  $ribos->id , ) }} " method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-500 py-2 px-5 text-white">Delete</button>
    </form>
</x-layout>
