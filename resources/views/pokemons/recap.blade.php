
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Pokémon : {{$pokemon->breed}}</h1>
</br>
    <h2> Age : {{$pokemon->age}}</h2>
</br>
    <h2> Element : {{$pokemon->element}}</h2>


    <a href="{{route('exo1.pageCreate', ['id' => $p->id])}}">{{$p->breed}}"></a>


    
</body>
</html>
