<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Breadom</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    </head>
    <style>
        body{
            background-image: url("{{ asset('pics/background2.jpg') }}");
            background-size: cover;
        }
    </style>
        <body class="bg-gray-200">
            <nav class ="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('pics/logo.jpg') }}" height="50px" width="80px"></a>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('customers') }}" class="p-3">Customers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('transactions') }}" class="p-3">Transactions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('categories') }}" class="p-3">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('items') }}" class="p-3">Items</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('users') }}" class="p-3">Users</a>
                                </li>
                            @endauth
                        </ul>

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('profile') }}" class="nav-link p-3">{{ auth()->user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Log Out</button>
                                    </form>
                                </li>
                            @endauth

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" class="p-3">Login</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            @yield('content')
        </body>
</html>