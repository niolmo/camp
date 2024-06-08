<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bootstrap.css', 'resources/css/app.css',
    'resources/js/bootstrap.bundle.js','resources/js/app.js'])
    <title>
        @yield('pageTitle')
    </title>
</head>
<body class="container d-flex flex-column">
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light p-3 w-100">
            <div class="container-fluid">
                <a class="navbar-brand text-success fs-3" href="{{ route('home')  }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="darkorange" class="bi bi-houses-fill" viewBox="0 0 16 16">
                        <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.5 2.5 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354z"/>
                        <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708z"/>
                    </svg> База отдыха</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" aria-current="page" href="{{ route('home')  }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" href="{{ route('about') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-dark" href="{{ route('contacts')  }}">Контакты</a>
                        </li>
                        @if(Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link mx-2 text-dark" href="{{ route('dashboard') }}">Профиль</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 text-dark" href="{{ route('logout') }}">Выход</a>
                            </li>
                        @else()
                            <li class="nav-item">
                                <a class="nav-link mx-2 text-dark" href="{{ route('singup') }}">Регистрация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-2 text-dark" href="{{ route('login') }}">Вход</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
<main class="page container">
{{--    Показ ошибок--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{--    Показ сообщения после регистрации--}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        @endif
        @yield('pageContant')
    </div>
</main>
<footer class="footer">
    <div class="container">
        <p class="mt-5 fs-5 text-center">Morozov inc. <br> &copy; <?php echo date("Y"); ?></p>
    </div>
</footer>
</body>
</html>
