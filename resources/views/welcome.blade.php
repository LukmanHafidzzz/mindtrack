<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mindtrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
    @yield('styles')
</head>
<body class="container-fluid p-0">
    <div class="container text-center vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                <section class="text-center text-white px-5">
                    <div class="fs-1 fw-bold mb-4">
                        MindTrack: Log Your Focus. Track Your Feelings. Find Your Balance.
                    </div>
                    <div class="px-5">
                        The all-in-one companion for students who know that true performance is built on both productivity and mental wellness.
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <a href="{{ route('register') }}" class="btn btn-signup mt-4">
                            Signup
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-login mt-4">
                            Login
                        </a>
                    </div>
                </section>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>