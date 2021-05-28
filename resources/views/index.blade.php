<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Meal Book</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">

    <!-- CDNs -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- JS Files -->
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/utils.js') }}"></script>

</head>

<body>
    <!-- NavBar -->
    @include('nav')

    <div class="container-sm">
        <div class="col-sm">
            <div class="row text-center mt-2">
                <h1>The Meal Book</h1>
            </div>
            <div class="row mt-3 justify-content-between">

                @include('modal')
                @if ($meals !== null)
                @foreach ($meals as $meal)

                <div class="card mt-3 p-2 shadow grad" style="width: 25rem; border-radius: 25%;">

                    <img src='{{$meal->strMealThumb}}' class="img-fluid mx-auto d-block rounded mt-3" alt='{{$meal->strMeal}}' width="250px" height="250px">

                    <div class="card-body">

                        <div class="row my-1">
                            <h2 class="text-center">{{$meal->strMeal}}</h2>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm text-center fs-5">
                                Category: <b>{{$meal->strCategory}}</b>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm text-center fs-5">
                                Area: <b>{{$meal->strArea}}</b>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm text-center">
                                <button type="button" class="btn btn-outline-dark instructionButton" instructionId='{{$meal->idMeal}}'><b>Instructions</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-sm">
                    <div class="row text-center align-middle mt-4 bg-secondary rounded-pill">
                        <h2>The meal was not founded!</h2>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</body>

</html>