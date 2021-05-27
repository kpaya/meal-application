<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Meal</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/utils.js') }}"></script>

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

    <div class="container-sm">

        <div class="row mt-3 justify-content-between">
            
            <div class="modal fade" id="instructionModal" tabindex="-1" aria-labelledby="instructionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="instructionModalLabel">Instructions</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span id="instructionField" style="text-align: justify;"></span>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($meals as $meal)

            <div class="card mt-3 p-2 shadow grad" style="width: 25rem; border-radius: 25%;">

                <img src='{{$meal->strMealThumb}}' class="img-fluid mx-auto d-block rounded mt-3" alt='{{$meal->strMeal}}' width="250px" height="250px">

                <div class="card-body">

                    <div class="row my-1">
                        <h3 class="text-center">{{$meal->strMeal}}</h3>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm text-center">
                            Category: {{$meal->strCategory}}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm text-center">
                            Area: {{$meal->strArea}}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm text-center">
                            <button type="button" class="btn btn-outline-dark instructionButton" instructionId='{{$meal->idMeal}}'>Instruções</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


    </div>
</body>

</html>