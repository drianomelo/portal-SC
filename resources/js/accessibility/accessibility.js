import "./change-body.js";
import "./fontSize.js";
import "./fontFamily.js";
import "./letterSpacing.js";
import "./cursor.js";
import "./theme.js";
import "./reset.js";

const accessibilityMenu = document.getElementById("menu-accessibility");
const accessibilityButton = document.getElementById("btn-accessibility");
const accessibilityCloseButton = document.getElementById("close-accessibility");

// EVENTOS PARA EXIBIR E OCULTAR MENU ACESSIBILIDADE DE ACORDO COM O CLICK

// EXIBINDO
accessibilityButton.addEventListener("click", () => {
    showAccessibilityMenu();
});

// OCULTANDO
accessibilityCloseButton.addEventListener("click", () => {
    hideAccessibilityMenu();
});
document.addEventListener("keyup", (event) => {
    if (event.code === "Escape") {
        hideAccessibilityMenu();
    }
});

// FUNÇÃO PARA EXIBIR
function showAccessibilityMenu() {
    accessibilityMenu.classList.toggle("hidden-menu-accessibility");
    accessibilityMenu.classList.toggle("show-menu-accessibility");
}

// FUNÇÃO PARA OCULTAR
function hideAccessibilityMenu() {
    accessibilityMenu.classList.remove("show-menu-accessibility");
    accessibilityMenu.classList.add("hidden-menu-accessibility");
}
