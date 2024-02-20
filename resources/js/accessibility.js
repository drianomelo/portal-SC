const accessibilityButton = document.querySelector("#btn-accessibility");
const accessibilityMenu = document.querySelector("#menu-accessibility");
const accessibilityCloseButton = document.querySelector("#menu-accessibility");

accessibilityButton.addEventListener("click", () => {
    accessibilityMenu.classList.remove("bottom-10");
    accessibilityMenu.classList.add("bottom-24");
    accessibilityMenu.classList.remove("opacity-0");
    accessibilityMenu.classList.remove("-z-[999]");
    accessibilityMenu.classList.add("z-[999]");
});

accessibilityCloseButton.addEventListener("click", () => {
    accessibilityMenu.classList.remove("bottom-24");
    accessibilityMenu.classList.add("bottom-10");
    accessibilityMenu.classList.add("opacity-0");
    accessibilityMenu.classList.remove("z-[999]");
    accessibilityMenu.classList.add("-z-[999]");
});
