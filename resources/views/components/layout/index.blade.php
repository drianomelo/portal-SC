<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title>Prefeitura Municipal de São Cristóvão - SE</title>

    <!-- ICON -->
    <link rel="shortcut icon" href="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/icone.png">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700;800&display=swap" rel="stylesheet">

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite('resources/css/app.css')
</head>

<body class="flex flex-col w-full h-screen overflow-x-hidden bg-white dark:bg-zinc-900 font-inter">

    <!-- HEADER -->
    <x-header.index />

    <main class="flex flex-col items-center flex-1 w-full">
        {{ $slot }}
    </main>

    <!-- ACCESSIBILITY -->
    <x-accessibility.index />

    <!-- FOOTER -->
    <x-footer.index />

    <!-- SCRIPT -->
    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
