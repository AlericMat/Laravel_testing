<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System obsłógi @yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>    
    </button>
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0" id="navbarNav">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a href="{{ URL::to('books') }}" class="nav-link dropdown-toggle" data-toggle="dropdown"> Książki </a>
                    <div class="dropdown-menu">
                        <a href="{{ URL::to('books/cheapbook') }}" class="dropdown-item">Top 3 najtańsze ksiązki</a>
                        <a href="{{ URL::to('books/longest') }}" class="dropdown-item">Top 3 najdłuższe ksiązki</a>
                        <a href="{{ URL::to('books') }}" class="dropdown-item"> Książki </a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{ URL::to('loans') }}" class="nav-link "> Wypożyczenia</a></li>
                <li class="nav-item"><a href="{{ URL::to('authors') }}" class="nav-link "> Autorzy</a></li>
                
            </ul>
    </div>
    </nav>
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/code.js') }}"></script>
</body>
</html>