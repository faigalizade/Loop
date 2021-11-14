<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="{{ route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-5">
                        SmartSoft Store
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>

                    <div class="text-end">
                        <a type="button" href="{{ route('show_login') }}" class="btn btn-outline-light me-2">Login</a>
                        <a type="button" href="{{ route('show_register') }}" class="btn btn-warning">Sign-up</a>
                    </div>
                </div>
            </div>
        </header>
            <div class="container">
                @yield('content')
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>