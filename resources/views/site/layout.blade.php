<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Recipes</title>
</head>
<body>

<header>
    <div class="header-logo text-center">
        <img class="img-fluid" src="{{ asset('images/logo.png') }}">

    </div>
    <div class="header-nav">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Basic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chicken</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Easy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')


<footer>


</footer>
<script src="{{ asset('js/app.js') }}"></script>

@if ($errors->any())
    <script>toastr.error('{{ implode(",", $errors->all()) }}')</script>
@endif
@if (session('success'))
    <script>toastr.success('{{ session('success') }}')</script>
@endif


</body>
</html>
