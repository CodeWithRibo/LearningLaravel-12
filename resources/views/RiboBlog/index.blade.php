<x-layout>
    <div class="py-10">
        <span class="text-2xl text-gray-700 font-semibold">Currently Available Ribo Blogs</span>
    </div>

    @if (session('status'))
        <div class="bg-red-400 text-white py-2 px-5 ">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($users as $user)
        <x-card href="{{ route('show', $user->id) }}" :highlight="$user->skill > 70">
            <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
        </x-card>
    @endforeach

    <div class="m-5">
        {{ $users->onEachSide(5)->links() }}
    </div>
</x-layout>
