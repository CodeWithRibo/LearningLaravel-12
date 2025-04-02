<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(entrypoints: 'resources/css/app.css')
</head>
<body>
    <button class="bg-slate-500 text-white border-2 border-gray-300 px-5 py-2 hover:bg-red-200 cursor-pointer">
        Hello
    </button>
{{$slot}}
</body>
</html>