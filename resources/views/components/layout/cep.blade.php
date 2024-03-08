<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title>Prefeitura Municipal de São Cristóvão - SE</title>

    <!-- ICON -->
    <link rel="shortcut icon" href="{{ asset('images/logo-sei-vertical.png') }}" type="image/x-icon">

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

    <script>
        const form = document.getElementById('cep-form');
        const inputForm = document.getElementById('input-rua');
        const labelForm = document.getElementById('label-rua');
        const ruas = document.getElementById('ruas');

        inputForm.addEventListener('focus', () => {
            inputFocus();
        });

        inputForm.addEventListener('blur', () => {
            if (inputForm.value == '') {
                inputBlur();
            }
        });

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const street = inputForm.value;

            inputForm.value = '';
            ruas.innerHTML = '';
            getCEP(street).then(data => {
                data.forEach(rua => {
                    ruas.innerHTML += `
                    <div class="flex items-center bg-blue-900 gap-2 w-[350px] p-3 pl-5 rounded-full">
                        <img class="w-16 ml-2" src="{{ asset('img/location.png') }}" alt="">
                        <div class="flex flex-col ml-4">
                            <span class="font-bold text-white">${rua.logradouro}</span>
                            <span class="mb-1 -mt-[2px] text-xs font-light text-white">${rua.bairro} ${rua.complemento !== '' ? '- ' + rua.complemento : '' }</span>
                            <span class="font-bold text-yellow-400">${rua.cep}</span>
                        </div>
                    </div>
                    `
                })
            });
            inputBlur()

        });

        async function getCEP(street) {
            const connection = await fetch(`https://viacep.com.br/ws/SE/Sao%20Cristovao/${street}/json/`);
            const convertedConnection = await connection.json();

            return convertedConnection;
        }

        function inputFocus() {
            labelForm.classList.remove('bottom-2/4');
            labelForm.classList.add('bottom-full');
            labelForm.classList.remove('left-8');
            labelForm.classList.add('left-12');
        }

        function inputBlur() {
            labelForm.classList.remove('bottom-full');
            labelForm.classList.add('bottom-2/4');
            labelForm.classList.remove('left-12');
            labelForm.classList.add('left-8');
        }
    </script>

    @vite('resources/js/app.js')
</body>

</html>
