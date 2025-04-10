<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">
    <header class = "bg-white">
        <nav class="flex items-center justify-around py-5">
            <h1 class="text-3xl text-red-700 font-bold">Ribo Blogs</h1>
            <div class="flex gap-5">
                <a href="/" class="text-2xl text-gray-500 hover:text-gray-700 ">All Ribo Blogs</a>
                <a href="create" class="text-2xl text-gray-500 hover:text-gray-700 ">Create new Ribo Blogs</a>
            </div>
        </nav>
    </header>

    {{-- Content --}}
    <main class="max-w-7xl mx-auto">
        {{ $slot }}
    </main>
</body>
