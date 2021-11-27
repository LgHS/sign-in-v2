<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>@if(View::hasSection('title')) @yield('title') | {{ env('APP_NAME') }} @else {{ env('APP_NAME') }} @endif</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css')}}">
</head>
<body class="app app-home">
<div class="container">
    <header id="page-header">
        <a href="https://members.lghs.be" title="Accueil">
            <img src="{{ asset('assets/frontend/img/logo.svg')}}" alt="Liege Hackerspace">
        </a>
    </header>

    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('frontend.homepage') }}">LgHS</a>
        </div>
            <div class="collapse navbar-collapse" id="main-navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::user())
                    <li class="">
                        <a href="">Mon profil</a>
                    </li>
                    <li class="">
                        <a href="">Mon code PIN</a>
                    </li>
                    <li class="">
                        <a href="">Mes Services</a>
                    </li>
                    <li class="">
                        <a href="">Cartes RFID</a>
                    </li>
                    <li class="">
                        <a href="">Statistiques</a>
                    </li>
                    @else
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        @if(Auth::user())
                        <a href="{{ route('keycloak.logout') }}" title="Déconnectez-vous"><i class="fa fa-sign-out"></i> Déconnexion ({{ Auth::user()->email }})</a>
                        @else
                        <a href="{{ route('keycloak.login') }}" title="Déconnectez-vous"><i class="fa fa-user"></i> Se connecter</a>
                        @endif
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    @yield('content')

    <footer id="page-footer">
        <p>
            MAIL: ping[at]lghs.be
        </p>
        <p>
            IRC: #LgHS @ Freenode
        </p>
        <ul>
            <li>
                <a href="https://github.com/LgHS" title="Our Github repos">
                    <i class="fa fa-github"></i>
                    Github
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/liegehackerspace/" title="Our Facebook page">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
            </li>
            <li>
                <a href="https://twitter.com/LgHackerSpace" title="Our Twitter feed">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </li>
            <li>
                <a href="https://chat.lghs.be" title="Our Chat">
                    <i class="fa fa-comment"></i>
                    Chat
                </a>
            </li>
        </ul>
    </footer>
</div>
</body>
</html>