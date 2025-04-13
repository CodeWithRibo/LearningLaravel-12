<x-layout>
    <div class="py-10">
        <span class="text-2xl text-gray-700 font-semibold">Currently Available Ribo Blogs</span>
    </div>
    @foreach ($users as $user)
        <x-card href="{{ route('show',$user->id) }}" :highlight="$user->skill > 70">
                <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
                <h1 class="text-2xl font-bold">{{ $user->age }}</h1>
        </x-card>
    @endforeach

</x-layout>
