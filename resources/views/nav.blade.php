<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a href="{{route('index')}}" class="navbar-brand">
        <button type="button" class="btn btn-light">Home</button>
        </a>
        <form class="d-flex" method="post" action="{{route('searchItens')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="form-control me-2" type="search" name="mealName" placeholder="Type Here" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
    </div>
</nav>