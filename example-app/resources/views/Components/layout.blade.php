<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(entrypoints: 'resources/css/app.css')
</head>

<body>
    <header>
        <nav>
            <h1 class="text-3xl">Ribo Luna Blogs</h1>
            <a href="/about" class="block underline">All Ribo Blogs</a>
            <a href="/contact" class="underline">Create new Ribo Blogs</a>
        </nav>
    </header>

    {{-- Content --}}
    <main>
        {{$slot}}
    </main>
</body>
