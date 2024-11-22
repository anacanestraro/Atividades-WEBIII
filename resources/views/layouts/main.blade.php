<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <!--css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!--css do projeto-->
    <link rel="stylesheet" href="/style.css" />
    <!--javascript bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        
</head>

<body>
    <div class="d-flex flex-column wrapper">
    <!--navbar-->
    <header>
        <nav class="navbar navbar-expand-lg bg-color" id="navbar">
            <div class="container py-1">
                <a href="/" class="navbar-brand">
                    <img src="/img/lexie.png" alt="lexie logo">
                    <span class="primary-color">Atividades WEBIII</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                    aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar-items">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/lista1" class="nav-link primary-color {{ request()->is('lista1') ? 'active' : '' }}">Lista 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="/tabuadaTematica" class="nav-link primary-color {{ request()->is('tabuadaTematica') ? 'active' : '' }}">Tabuada temática</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cadastrarCliente" class="nav-link primary-color {{ request()->is('cadastrarCliente') ? 'active' : '' }}">Cadastro</a>
                        </li>
                        <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
                        
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    @yield('content')
    </div>

<script src="./js/script.js" defer></script>
</body>

</html>