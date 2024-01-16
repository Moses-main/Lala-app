<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Dog</title>
</head>
<body>
    <form action="{{route('dog.create')}}" method="post" class="text-center">
        @csrf
        <h3
        class="font-bold border-b-gray-300 border-b pb-2 mb-3 mt-4 text-center"
        >Add Tasks Below</h3>
        <label for="name">Enter Task Here</label>
        <input 
        type="text" 
        name="name" 
        id="name" 
        class="border border-gray-200 p-1">

        <input 
        type="submit" 
        name="send" 
        value="Submit"
        class="bg-gray-200 p-1 cursor-pointer border border-black">
    </form>
</body>
</html>
