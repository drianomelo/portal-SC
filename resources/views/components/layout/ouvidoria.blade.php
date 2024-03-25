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

    <script>
        const accordionItem = document.querySelectorAll(".accordion__item");

        accordionItem.forEach((item) => {
            const accordionHeaderItem = item.querySelector(".accordion__header");

            accordionHeaderItem.addEventListener("click", () => {
                const accordionContentItem = item.querySelector(".accordion__content");

                const contentActived = document.querySelector(".active");

                verifyActive(item, accordionContentItem, contentActived);
            });
        });

        function verifyActive(item, content, contentActived) {
            const iconItem = item.querySelector(".accordion__icon");

            const iconsItemActive = document.querySelectorAll(".accordion__icon");

            iconsItemActive.forEach((item) => (item.innerHTML = "+"));

            if (contentActived) {
                contentActived.style.height = 0;
                contentActived.classList.remove("active");
            }

            if (content !== contentActived) {
                iconItem.innerHTML = "-";
                content.classList.add("active");
                content.style.height = content.scrollHeight + 10 + "px";
            }
        }

        const modals = document.querySelectorAll(".modal");
        const backgroundModal = document.querySelectorAll(".back-modal");

        function openModal(id) {
            modals.forEach(modal => {
                if (id == modal.id) {
                    modal.classList.toggle("hidden-modal");
                    modal.classList.toggle("show-modal");

                    backgroundModal.forEach(bg => {
                        bg.classList.toggle("hidden-back-modal");
                        bg.classList.toggle("show-back-modal");
                    })
                }
            })
        }

        function closeModal(id) {
            modals.forEach(modal => {
                if (id == modal.id) {
                    modal.classList.remove("show-modal");
                    modal.classList.add("hidden-modal");

                    backgroundModal.forEach(bg => {
                        bg.classList.remove("show-back-modal");
                        bg.classList.add("hidden-back-modal");
                    })
                }
            })
        }

        document.addEventListener("keyup", (event) => {
            if (event.code === "Escape") {
                modals.forEach(modal => {
                    modal.classList.remove("show-modal");
                    modal.classList.add("hidden-modal");

                    backgroundModal.forEach(bg => {
                        bg.classList.remove("show-back-modal");
                        bg.classList.add("hidden-back-modal");
                    })
                })
            }
        });

        const listRegulamentacao = [{
                ano: 2023,
                nome: 'Lei Nº 12.527',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/transparencia/ouvidoria/lai/DECRETO%20403%20de%2013%20de%20Julho%20de%202023-%20LAI-1.pdf'
            },
            {
                ano: 2023,
                nome: 'Decreto 403',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/transparencia/ouvidoria/lai/LEI%20DE%20ACESSO%20A%20INFORMAÇÃO.pdf'
            }
        ]

        const listClassificados = [{
                ano: 2023,
                nome: 'Classificados 2023',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/ouvidoria/lai/classificados/2_CLASSIFICADOS_2023pdf_assinado.pdf'
            },
            {
                ano: 2022,
                nome: 'Classificados 2022',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/ouvidoria/lai/classificados/2_CLASSIFICADOS_2022pdf_assinado.pdf'
            },
            {
                ano: 2021,
                nome: 'Classificados 2021',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/ouvidoria/lai/classificados/2_CLASSIFICADOS_2021pdf_assinado.pdf'
            },
            {
                ano: 2020,
                nome: 'Classificados 2020',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/ouvidoria/lai/classificados/2_CLASSIFICADOS_2020pdf_assinado.pdf'
            }
        ]

        const listDesclassificados = [{
                ano: 2023,
                nome: 'Desclassificado 2023',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/ouvidoria/lai/desclassificados/DESCLASSIFICADOS_2023pdf_assinado.pdf'
            },
            {
                ano: 2022,
                nome: 'Desclassificado 2022',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/ouvidoria/lai/desclassificados/DESCLASSIFICADOS_2022pdf_assinado.pdf'
            },
            {
                ano: 2021,
                nome: 'Desclassificado 2021',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/transparencia/ouvidoria/lai/sigilo/desclassificados/DESCLASSIFICADOS_2021pdf_assinado.pdf'
            },
            {
                ano: 2020,
                nome: 'Desclassificado 2020',
                link: 'https://anexos.saocristovao.se.gov.br/storage/files/2/transparencia/ouvidoria/lai/sigilo/desclassificados/DESCLASSIFICADOS_2020pdf_assinado.pdf'
            }
        ]

        const btnsLai = document.querySelectorAll('.btn-lai');
        const corpoTableLai = document.querySelector('.corpo-modal-lai');

        btnsLai.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.id === "regulamentacao") {
                    corpoTableLai.innerHTML = '';
                    listRegulamentacao.forEach(item => {
                        criaLinha(item.ano, item.nome, item.link)
                    })

                } else if (btn.id === "classificados") {
                    corpoTableLai.innerHTML = '';
                    listClassificados.forEach(item => {
                        criaLinha(item.ano, item.nome, item.link)
                    })

                } else if (btn.id === "desclassificados") {
                    corpoTableLai.innerHTML = '';
                    listDesclassificados.forEach(item => {
                        criaLinha(item.ano, item.nome, item.link)
                    })

                }
            })
        })

        function criaLinha(ano, nome, link) {
            corpoTableLai.innerHTML += `
                <tr class="dark:text-white">
                    <td class="p-2 pl-4 text-[11px] font-light border text">${ano}</td>
                    <td class="p-2 pl-4 text-[11px] font-light border text">${nome}</td>
                    <td class="p-2 pl-4 text-[11px] font-light border text-blue-400 underline">
                        <a href="${link}">Exportar</a>
                    </td>
                </tr>
            `
        }
    </script>

    @vite('resources/js/app.js')
</body>

</html>
