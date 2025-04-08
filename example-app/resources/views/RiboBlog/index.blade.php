<x-layout>
    <h1 class="pt-2">Currently Available Ribo Blogs</h1>
    @foreach ($users as $user)
            <x-card href="{{$user['id']}}" :highlight="$user['skill'] > 70">
                <h1 class="text-2xl font-bold">{{$user['name']}}</h1>
            </x-card>
    @endforeach
</x-layout>
