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
        <input class="border-2 border-red-500" type="number" id="skill" name="skill" required>

        <!-- ribo Bio -->
        <label for="bio">Biography:</label>
        <textarea class="border-2 border-red-500" rows="5" id="bio" name="bio" required></textarea>

        <button type="submit"
            class="py-3 px-5 bg-red-200 text-slate-300 border-2 border-red-300 hover:bg-red-400">Create Ribos</button>

        <!-- validation errors -->

    </form>
    <div>
</x-layout>
