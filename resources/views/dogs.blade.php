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
    <h1
    class="font-bold border-b-gray-300 border-b pb-2 mb-3 text-center"
    >TO-DO APP</h1>
    <ul class="ml-10"
    style="list-style:decimal"
    >
        @foreach ($dogs as $dog)
        <li class="flex mb-1" style="list-style:decimal">
            <span
            class="flex-1"
            >{{ $dog->name }}
            </span>
            <form action="{{route('dog.delete', $dog->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button
                type="submit" 
                class="border bg-gray-200 p-1 border-black mr-7" >
                Completed
                </button>
            </form>
        </li>
        @endforeach
    </ul>
    {{-- <br> --}}
    @include('partials.form')
</body>
</html>