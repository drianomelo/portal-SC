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
        <div class="flex flex-col items-center w-full overflow-x-hidden">
            <section
                class="w-[110%] h-[215px] {{ $bg }} rounded-b-[35%] relative flex justify-center items-center
            before:content-[''] before:block before:rounded-b-[35%] before:absolute before:w-full before:h-full before:bg-blue-950 before:opacity-[.85]
            xl:w-[120%] lg:w-[130%] sm:lg:w-[140%] sm:bg-orgao-sm">
            </section>
        </div>

        {{ $slot }}
    </main>

    <!-- ACCESSIBILITY -->
    <x-accessibility.index />

    <!-- FOOTER -->
    <x-footer.index />

    <!-- SCRIPT -->
    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const buttonOpenModal = document.getElementById("open-modal");
        const buttonCloseModal = document.getElementById("esc");
        const modal = document.querySelector(".modal");
        const backgroundModal = document.querySelector(".back-modal");

        // EXIBINDO
        buttonOpenModal.addEventListener("click", () => {
            showModal();
        });

        // OCULTANDO
        buttonCloseModal.addEventListener("click", () => {
            hideModal();
        });
        document.addEventListener("keyup", (event) => {
            if (event.code === "Escape") {
                hideModal();
            }
        });

        // FUNÇÃO PARA EXIBIR
        function showModal() {
            modal.classList.toggle("hidden-modal");
            modal.classList.toggle("show-modal");

            backgroundModal.classList.toggle("hidden-back-modal");
            backgroundModal.classList.toggle("show-back-modal");
        }

        // FUNÇÃO PARA OCULTAR
        function hideModal() {
            modal.classList.remove("show-modal");
            modal.classList.add("hidden-modal");

            backgroundModal.classList.remove("show-back-modal");
            backgroundModal.classList.add("hidden-back-modal");
        }
    </script>

    @vite('resources/js/app.js')
</body>

</html>
