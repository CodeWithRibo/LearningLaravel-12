<x-layout>
    <div class="pt-10 text-2xl text-gray-700">
        <h1>Create Page</h1>
    </div>
    <form action="{{ route('store') }}" method="POST" class="flex flex-col">
        @csrf
        <!-- ribo Name -->
        <label for="name">Ribos Name:</label>
        <input class="border-2 border-red-500" type="text" id="name" name="name" value="{{ old('name') }}"
            required>

        <!-- ribo Strength -->
        <label for="skill">Ribos Skill (0-100):</label>
        <input class="border-2 border-red-500" type="number" id="skill" name="skill" value="{{ old('skill') }}" required>

        <!-- ribo Bio -->
        <label for="bio">Biography:</label>
        <textarea class="border-2 border-red-500" rows="5" id="bio"
            name="bio" required>{{ old('bio') }}</textarea>

        <button type="submit"
            class="py-3 px-5 bg-red-200 text-slate-300 border-2 border-red-300 hover:bg-red-400">Create Ribos</button>

        <!-- validation errors -->
        @if($errors->any())
            <ul class="px-5 py-5 bg-red-500">
                @foreach ($errors->all() as $error )
                        {{ $error }}
                @endforeach
            </ul>
        @endif
    </form>
    <div>
</x-layout>
