const accessibilityChangeBodyButton = document.getElementById("change-body");

accessibilityChangeBodyButton.addEventListener("click", () => {
    changeBody();
});

function changeBody() {
    const accessibilityBodyMenu = document.getElementById("body-menu");
    const accessibilityNavMenu = document.getElementById("nav-menu");
    const title = accessibilityChangeBodyButton.querySelector("h5");
    const icon = accessibilityChangeBodyButton.querySelector("i");

    if (title.textContent === "Navegar") {
        title.textContent = "Configurações";
        icon.classList.remove("fa-circle-info");
        icon.classList.add("fa-gear");
        accessibilityBodyMenu.classList.toggle("hidden");
        accessibilityNavMenu.classList.toggle("hidden");
    } else if (title.textContent === "Configurações") {
        title.textContent = "Navegar";
        icon.classList.remove("fa-gear");
        icon.classList.add("fa-circle-info");
        accessibilityBodyMenu.classList.toggle("hidden");
        accessibilityNavMenu.classList.toggle("hidden");
    }
}
