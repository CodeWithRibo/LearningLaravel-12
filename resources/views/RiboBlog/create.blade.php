<x-layout>
    <div class="pt-10 text-2xl text-gray-700">
        <h1>Create Page</h1>
    </div>
    <form action="" method="" class="flex flex-col">

        <!-- ninja Name -->
        <label for="name">Ribos Name:</label>
        <input class="border-2 border-red-500" type="text" id="name" name="name" value="{{ old('name') }}" required>

        <!-- ninja Strength -->
        <label for="skill">Ribos Skill (0-100):</label>
        <input class="border-2 border-red-500" type="number" id="skill" name="skill" required>

        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea class="border-2 border-red-500" rows="5" id="bio" name="bio" required></textarea>

        <button type="submit" class="btn mt-4">Create Ribos</button>

        <!-- validation errors -->

    </form>
    <div>
</x-layout>
