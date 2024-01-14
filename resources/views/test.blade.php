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

<div style="text-align:center">
    @if (isset($name))
    <h1>Hello {{$name}}</h1>
    @else
    <h1>Test</h1>
    @endif
</div>

<div style="text-align: center">
    @for ($i=0; $i<10; $i++)
    count: {{$i}}
    <br>

    @endfor
       
</div>
</body>
</html>