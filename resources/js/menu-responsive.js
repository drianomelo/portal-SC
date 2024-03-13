const buttonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("#menu");
const itemResponsive = document.querySelectorAll(".item-responsive");

buttonMenu.addEventListener("click", () => {
    const icon = buttonMenu.querySelector(".icon");
    const title = buttonMenu.nextElementSibling;
    const paiDoBotao = buttonMenu.parentElement.parentElement;

    paiDoBotao.classList.toggle("relative");
    paiDoBotao.classList.toggle("absolute");
    paiDoBotao.classList.toggle("right-5");

    menu.classList.toggle("scale-0");
    icon.classList.toggle("fa-bars");
    icon.classList.toggle("fa-x");

    if (menu.classList.contains("scale-0")) {
        title.textContent = "Menu";
    } else {
        title.textContent = "Fechar";
    }
});

itemResponsive.forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();

        itemResponsive.forEach((it) => {
            const menu = it.querySelector(".menu-interno");
            menu.classList.remove("show-item-menu");
            menu.classList.add("hidden-item-menu");
        });

        const menu = item.querySelector(".menu-interno");
        if (menu.getAttribute("data-state") === "true") {
            menu.classList.remove("show-item-menu");
            menu.classList.add("hidden-item-menu");
            menu.setAttribute("data-state", "false");
        } else {
            menu.classList.remove("hidden-item-menu");
            menu.classList.add("show-item-menu");
            menu.setAttribute("data-state", "true");
        }
    });
});
