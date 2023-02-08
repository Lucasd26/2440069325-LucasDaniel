<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    @yield('css')
    <style>
        .bg-dark {
            background-color: #262626 !important;
        }

        .btn-link:hover {
            color: #262626 !important;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100"
    style="background-image: url({{ asset('img/doodle.jpg') }}); background-size: cover;">
    <nav class="navbar navbar-expand-md navbar-light bg-dark border-bottom border-light border-2">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h3 class="text-white">Amazing Grocery</h3>
            </a>
            @if (Route::has('login'))
                <div class="navbar-nav ms-auto">
                    @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">Logout</button>
                        </form>
                    @else
                        <div class="btn-group" role="group">
                            <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
        </div>
    </nav>


    <div class="container my-auto">
        @yield('content')
    </div>

    <footer class="text-lg-start bg-dark text-muted border-top border-light border-2">
        <div class="text-center p-4">
            © 2023 Copyright:
            <span class="text-reset fw-bold">Exam WebProg 2023</span>
        </div>
    </footer>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
