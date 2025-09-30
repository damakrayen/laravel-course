<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    @vite(['resources/css/theme.css'])

    <title>Tournaments</title>
</head>
<body>
    <ul>
        @if (session()->has('status'))
        <h3 style="color:red">{{session()->get('status')}}</h3>
        @endif

<nav class="navbar navbar-expand navbar-light bg-light">
    <ul class="nav navbar-nav">
        
        <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('tournois.index')}}">List Of  Tournament</a></li>

    </ul>
</nav>


      @yield('content')


    @vite(['resources/js/app.js'])

    
</body>
</html>