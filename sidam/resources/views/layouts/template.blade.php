<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:#3D3C42;">
            <div class="container">
                <a class="navbar-brand" href="{{route('homePage')}}">
                    Denuncia Ambiental
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        @if(Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('homePage')}}">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lançamentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lançar</a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <x-responsive-nav-link class="nav-link" :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Sair') }}
                                    </x-responsive-nav-link>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Criar conta</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </nav>
    </header>
    <article>
        @yield('content')
    </article>
    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 text-center">
                    <span>copyright &copy 2022 todos os direitos reservados</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/scriptFormatCoin.js')}}"></script>
</body>
</html>