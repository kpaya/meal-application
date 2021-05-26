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
        <div class="row mt-3 justify-content-between">
            @foreach ($meals as $meal)
            <div class="card mt-3 p-2 shadow rounded" style="width: 18rem;">
                <img src='{{$meal->strMealThumb}}' class="card-img-top" alt='' width="100px" height="400px">
                <hr>
                <div class="card-body">
                    <h5 class="card-title">{{$meal->strMeal}}</h5>
                    <p class="card-text"></p>
                    <p class="text-center text-primary fs-4 fw-bold mb-1">{{$meal->strCategory}}</p>
                    <div class="form-group">
                        <p class="text-center fs-6">{{$meal->strArea}}</p>
                    </div>
                    <a href="#" class="justify-content-center">
                        <div class="text-center p-0 m-0">
                            <button type="submit" id="insertBtn" class="btn btn-outline-primary">ADICIONAR AO CARRINHO</button>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</body>

</html>