const accessibilityButton = document.getElementById("btn-accessibility");
const accessibilityMenu = document.getElementById("menu-accessibility");
const accessibilityCloseButton = document.getElementById("close-accessibility");

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

const tags = document.querySelectorAll(".text");
const increaseButton = document.getElementById("aumentar");
const nameIncreaseButton = increaseButton.querySelector(".name");
let increaseCont = 0;
let initName = 100;
let initFontSize = [];

increaseButton.addEventListener("click", () => {
    increaseFont();
});

function increaseFont() {
    if (increaseCont === 0) {
        tags.forEach((tag, i) => {
            const style = window.getComputedStyle(tag).fontSize;
            const fontSize = parseFloat(style);
            initFontSize.push(fontSize);
            tag.style.fontSize = initFontSize[i] * 1.25 + "px";
        });
        initName = initName + 25;
        nameIncreaseButton.textContent = `${initName}%`;
        increaseCont++;
    } else if (increaseCont === 3) {
        tags.forEach((tag, i) => {
            tag.style.fontSize = initFontSize[i] + "px";
        });
        initName = 100;
        nameIncreaseButton.textContent = "100%";
        increaseCont = 0;
    } else {
        tags.forEach((tag) => {
            const style = window.getComputedStyle(tag).fontSize;
            const fontSize = parseFloat(style);
            tag.style.fontSize = fontSize * 1.25 + "px";
        });
        initName = initName + 25;
        nameIncreaseButton.textContent = `${initName}%`;
        increaseCont++;
    }
}
