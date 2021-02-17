

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>




    </style>
</head>
<body>
    <h1>BLOG</h1>
    @foreach ($posts as $item)
    
    <h2> {{ $item->title   }} </h2>
    <h3> {{ $item->body   }} </h3>        
    @endforeach
    
</body>
</html>


