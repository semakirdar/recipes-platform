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
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('detail.show') }}">Detail</a>
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
                            <a class="nav-link" href="{{route('login')}}"> <i class="fas fa-user-circle login-icon"></i>
                                <span> @auth {{ auth()->user()->name }} @elseauth login @endauth</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}"> <i
                                    class="fas fa-user-plus register-icon"></i>
                                <span>Register</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')


<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h5>POPULAR</h5>
                    <img class="img-fluid" src="{{ asset('images/hero-image1.jpeg') }}">
                    <div class="image-text">
                        <div class="category mb-4">
                            <i class="fas fa-tag"></i> category
                        </div>
                        <div class="title">
                            <p>
                                Homemade Oatmeal Chocolate Chip Cookie Crisp Cereal
                            </p>
                        </div>
                        <div class="time">
                            <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h5>NAVİGATİON</h5>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Basic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Vegan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recipes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chicken</a>
                        </li>
                    </ul>


                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h5>NEWSLETTER</h5>
                    <div class="text-center">
                        <p>Enter your email address below to subscribe to my newsletter</p>
                    </div>
                    <form method="post" action="#">
                        <div class="mb-3">
                            <input class="form-control" name="email" placeholder="Please enter your e-mail">
                        </div>
                        <button class="form-control btn btn-success">SUBSCRIBE</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

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
