const buttonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("#menu");
const backMenu = document.querySelector(".background-menu-responsive");
const itemResponsive = document.querySelectorAll(".item-responsive");
const modal = document.querySelector(".modal-menu-responsive");
const backModal = document.querySelector(".background-modal");

buttonMenu.addEventListener("click", () => {
    const icon = buttonMenu.querySelector(".icon");
    const title = buttonMenu.nextElementSibling;

    menu.classList.toggle("-right-[305px]");
    menu.classList.toggle("-right-0");
    icon.classList.toggle("fa-bars");
    icon.classList.toggle("fa-x");
    backMenu.classList.toggle("left-0");
    backMenu.classList.toggle("right-full");
    document.body.classList.toggle("overflow-hidden");

    if (menu.classList.contains("-right-full")) {
        title.textContent = "Menu";
    } else {
        title.textContent = "Fechar";
    }
});

itemResponsive.forEach((item) => {
    item.addEventListener("click", (event) => {
        let li;
        if (event.target.tagName === "H3") {
            li = event.target.parentNode;
        } else {
            li = event.target;
        }
        const subMenu = li.nextElementSibling.querySelectorAll(".subitem");
        const icon = li.querySelector("i");

        icon.classList.toggle("fa-angles-left");
        icon.classList.toggle("fa-angles-down");
        modal.classList.toggle("hidden");
        modal.classList.toggle("flex");
        backModal.classList.toggle("hidden");

        const modalTitle = modal.querySelector(
            ".title-modal-responsive"
        ).firstElementChild;
        const title = li.querySelector("h3").textContent;
        modalTitle.textContent = title;
        subMenu.forEach((link) => {
            modal.innerHTML += `
                <a href="${link.href}" class="text-white py-3 pl-5 pr-4 flex text-xs items-center justify-between border-t first:border-0">
                    ${link.textContent}
                    <i class="text-xs text-white transition-all duration-300 icon fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            `;
        });
    });
});

backModal.addEventListener("click", () => {
    const icons = document.querySelectorAll(".icon-responsive");
    icons.forEach((icon) => {
        icon.classList.remove("fa-angles-down");
        icon.classList.add("fa-angles-left");
    });
    modal.classList.toggle("hidden");
    modal.classList.toggle("flex");
    backModal.classList.toggle("hidden");

    modal.innerHTML = `
    <div class="flex items-center gap-3 title-modal-responsive p-3">
        <span class="text-white font-bold"></span>
        <i class="text-white fa-solid fa-angles-down text-[11px]"></i>
     </div>
    `;
});
