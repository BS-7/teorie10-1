<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <nav class="main-nav">
            <a href="">
                <img src="{{ asset('imagini/logo.png') }}" class="logo">
            </a>
            <nav class="links">
                <a href="#" class="active">Despre</a>
                <a href="#">Produse metodice</a>
                <a href="#">Exemple de lucrari</a>
            </nav>
        </nav>
        <div class="home-content">
            <h1>Platforma de promovare</h1>
            <p>Centrul Republican de Învățământ din subordinea Ministerului Educației Publice Platforma unică servește la popularizarea celor mai bune practici ale pedagogilor</p>
            <div class="buttons">
                <a href="#" class="register">Inscrie-te</a>
                <a href="#" class="login">Autentificare</a>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        Nume, prenume, grupa
    </footer>
    @stack('scripts')
</body>
</html>
