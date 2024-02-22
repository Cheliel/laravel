
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @csrf : token d'authentification géré par Laravel --}}

    @if($errs = $errors->all())
	<section class="errors">
	<ul>
		@foreach($errs as $err)
			<li>
				Invalise {{ $err }}
			</li>
		@endforeach
	</ul>
    @endif

    <form id="monFormulaire" method="POST" action="{{route('exo1.create')}}">
        @csrf 
        <input value="{{old('provider_name')}}" placeholder="Provider name" type="text" name="provider_name" >
        <br>
        <input value="{{old('provider_email')}}" placeholder="Provider email" type="text" name="provider_email" >
        <br>
        <input value="{{old('Race')}}" placeholder="Race" type="text" name="Race" >
        <br>
        <input value="{{old('Age')}}" placeholder="Age" type="text" name="Age">
        <br>
        <input value="{{old('Element')}}" placeholder="Element" type="text" name="Element">
        <br>
        <input value="{{old('Quantity')}}" placeholder="Quantity" accept="image/png, image/jpeg" type="text" name="Quantity">
        <br>
        <input value="{{old('File')}}" placeholder="Pokimage" type="file" name="File">
        <br>
        <input value="{{old('password')}}" placeholder="Pokimage" type="password" name="password">
        <br>
        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>
