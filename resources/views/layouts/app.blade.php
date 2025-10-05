<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi User')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff8fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding-top: 70px; 
            padding-bottom: 80px; 
        }

        nav.navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1050;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1040;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <main class="container my-4">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
