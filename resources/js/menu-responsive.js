const buttonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("#menu");
const backMenu = document.querySelector(".background-menu-responsive");
const itemResponsive = document.querySelectorAll(".item-responsive");

buttonMenu.addEventListener("click", () => {
    const icon = buttonMenu.querySelector(".icon");
    const title = buttonMenu.nextElementSibling;

    menu.classList.toggle("-right-full");
    menu.classList.toggle("-right-0");
    icon.classList.toggle("fa-bars");
    icon.classList.toggle("fa-x");
    backMenu.classList.toggle("left-0");
    backMenu.classList.toggle("right-full");

    if (menu.classList.contains("-right-full")) {
        title.textContent = "Menu";
    } else {
        title.textContent = "Fechar";
    }
});

// itemResponsive.forEach((item) => {
//     item.addEventListener("click", (e) => {
//         itemResponsive.forEach((it) => {
//             const menu = it.querySelector(".menu-interno");
//             menu.classList.remove("show-item-menu");
//             menu.classList.add("hidden-item-menu");
//         });

//         const menu = item.querySelector(".menu-interno");
//         menu.classList.remove("hidden-item-menu");
//         menu.classList.add("show-item-menu");
//     });
// });
