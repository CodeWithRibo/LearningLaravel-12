<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-slate-100">
    <header class = "bg-white">
        <nav class="flex items-center justify-around py-5">
            <h1 class="text-3xl text-red-700 font-bold">Ribo Blogs</h1>
            <div class="flex gap-5">
                <a href="{{ route('index') }}" class="text-2xl text-gray-500 hover:text-gray-700 ">All Ribo Blogs</a>
                <a href="{{ route('create') }}" class="text-2xl text-gray-500 hover:text-gray-700 ">Create new Ribo Blogs</a>
            </div>
        </nav>
    </header>
    {{-- Content --}}
    <main class="max-w-7xl mx-auto">
        {{ $slot }}
    </main>
</body>
</html>
