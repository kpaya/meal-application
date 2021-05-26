<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyName</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>

    <style>
        html {
            min-height: 100%;
        }

        body {
            background-repeat: no-repeat;
            background-image: linear-gradient(#ff8a00, #e52e71);
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="col-sm mt-3 justify-content-between shadow-lg p-3 mb-5 bg-body rounded">
            <div class="row my-3">
                <h3 class="text-center">{{$meals[0]->strMeal}}</h3>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <img src='{{$meals[0]->strMealThumb}}' class="card-img-top" alt='' width="80px" height="320px">
                </div>
                <div class="col-sm-3">
                    <p>País de Origem:</p>
                </div>
                <div class="col-sm-6 shadow">
                    <div class="row">
                        <h3>Instruções</h3>
                    </div>
                    <div class="row">
                        <p class="text-justify" style="text-align: justify;">{{$meals[0]->strInstructions}}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>