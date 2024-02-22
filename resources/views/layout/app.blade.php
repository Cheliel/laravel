<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{@asset('/assets/css/app.css')}}" rel="stylesheet" />
    <script src="{{@asset('/assets/js/app.js')}}"></script>
 

    @yield('meta')
    <title> @yield('title')</title>

    @yield('style')
    @yield('script-head')



</head>
<body>


    @include('component.menu')

    <main>
        @yield('content')
    </main>
    
</body>
</html>