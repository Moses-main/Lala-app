<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>The dogs from the database</title>
</head>
<body>
    {{-- <h1
    class="font-bold border-b-gray-300 border-b pb-2 mb-3 text-center"
    >These are the dogs that are gotten from the database</h1> --}}

    <h1
    class="font-bold border-b-gray-300 border-b pb-2 mb-3 text-center"
    >Dogs in the database include:</h1>
    <ul class="ml-10"
    >
        @foreach ($dogs as $dog)
        <li>{{ $dog->name }}</li>
        @endforeach
    </ul>
    {{-- <br> --}}
    @include('newdog')
</body>
</html>