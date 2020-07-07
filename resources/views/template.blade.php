<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="widt=device-width, initial-scale=1, shrink-to-fir=no">
    <title>System obsługi @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/
                                 4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right"
                type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('books') }}">Książki</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ URL::to('loans') }}">Wypożyczenia</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/ tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/ bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/code.js') }}"></script>
</body>
</html>
