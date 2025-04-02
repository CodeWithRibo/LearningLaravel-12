<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(entrypoints: 'resources/css/app.css')
</head>

<body>
    <nav class="bg-red-300 flex justify-center gap-5">
        <a class="hover:text-slate-200 transition-all duration-300" href="/">Home</a>
        <a class="hover:text-slate-200 transition-all duration-300" href="/about">About</a>
        <a class="hover:text-slate-200 transition-all duration-300" href="/contact">Contact</a>
    </nav>

        {{ $slot }}
</body>
</html>