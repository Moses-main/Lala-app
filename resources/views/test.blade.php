<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    <div style="text-align: center">
    <h1>New View!</h1>
    {{-- <p>Hello World my name is {{$name}}</p> --}}

    @if ($name == 'Moses') 
    <h1>Yo {{$name}}</h1>
    @else
    <h1>Good Morning {{$name}}</h1>
    @endif

    
<div style="text-align: center">
    @for ($i=0; $i<10; $i++)
    count: {{$i}}
    <br>

    @endfor
       
</div>
</body>
</html>