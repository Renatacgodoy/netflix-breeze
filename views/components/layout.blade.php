<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}- Controle de series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('series.index')}}" class="navbar-brand">Homme</a>

            @auth
            <form action="{{ route('logout')}}" method="POST">
                @csrf
                <button class='btn btn-link'>
                    Sair 
                </button>
                </form>
             @endauth

             @guest
             <a href="{{ route('login')}}"> Entrar </a>
             @endguest
        </div>

    </nav>
    <div class='container'>
    <h1> {{ $title }}</h1>
    
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
    @endisset

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>