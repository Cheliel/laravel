<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemons</title>
</head>
<body>

    <table class='table-auto border border-collapse'>
        <tr>
            <td>Race</td>
            <td>Age</td>
            <td>Element</td>
            <td>update</td>
        </tr>

        @foreach ($pokemons as $p)

        
            <tr>
                <td><a href="{{route('exo1.pageRecap', ['id' => $p->id])}}">{{$p->breed}}"</a></td>                
                <td>{{$p->age}}</td>
                <td>{{$p->element}}</td>
                <td>{{$p->updated_at}}</td>
            </tr>
            
        @endforeach

    </table>
    
</body>
</html>