<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Debug: Cek URL yang di-generate -->
    <!-- URL: {{ asset('css/welcome.css') }} -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <body class="container-fluid p-0">
    <div class="container text-center vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                <div class="content-wrapper d-flex align-items-center">
                    <div class="container text-center">
                        <h1 class="hero-title display-4 mb-4">
                            MindTracks: Log Your Focus. Track Your Feelings. Find Your Balance.
                        </h1>
                        <p class="hero-subtitle fs-5 mb-5">
                            The all-in-one companion for students who know that true performance 
                            is built on both productivity and mental wellness.
                        </p>
                        <div class="d-flex gap-3 justify-content-center flex-wrap">
                            <a href="{{ route('register') }}" class="btn btn-primary-custom px-5 py-3">
                                Signup
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-secondary-custom px-5 py-3">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>