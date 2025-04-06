<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Ribo Blog | Home</title>
</head>
<body>
    <h1 class="text-2xl text-red-300">Welcome to Ribo Blog</h1>
    <ul>
        <li>List of Ribo Blogs</li>
        <li>
            <a href="{{$users['0']['id']}}" class="text-xl text-red-300 hover:text-red-500">{{$users['0']['name']}}</a>
            <br>
            <a href="{{$users['1']['id']}}" class="text-xl text-red-300 hover:text-red-500">{{$users['1']['name']}}</a>
        </li>
    </ul>
</body>
</html>