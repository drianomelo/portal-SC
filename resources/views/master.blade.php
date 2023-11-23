<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal SC</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen font-inter">
    <div class="fixed top-0 left-0 w-full h-full bg-blue-950 -z-[999] opacity-0 background"></div>
    @include('templates.search')
    @include('templates.header')

    @yield('content')

    @include('templates.footer')

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    @yield('scripts')
    @vite('resources/js/app.js')
</body>

</html>
