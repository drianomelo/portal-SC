import { changeTheme } from "./darkmode.js";

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

// --------------------------------------------------------------------------------------------------------------

// TAGS "TEXTO" QUE SERÃO ALTERADAS NAS OPÇÕES DE ACESSIBILIDADE
const tags = document.querySelectorAll(".text");

// AUMENTAR FONTE
const increaseButton = document.getElementById("aumentar");
const textIncreaseButton = increaseButton.querySelector(".percentage");
const initFontSize = [];
let increaseCont = 0;

increaseButton.addEventListener("click", () => {
    increaseFontSize();
});

function increaseFontSize() {
    if (increaseCont === 0) {
        tags.forEach((tag, i) => {
            const style = window.getComputedStyle(tag).fontSize;
            const fontSize = parseFloat(style);
            initFontSize.push(fontSize);
            tag.style.fontSize = initFontSize[i] * 1.25 + "px";
        });
        increaseCont++;
    } else if (increaseCont === 3) {
        tags.forEach((tag, i) => {
            tag.style.fontSize = initFontSize[i] + "px";
        });
        increaseCont = 0;
    } else {
        tags.forEach((tag) => {
            const style = window.getComputedStyle(tag).fontSize;
            const fontSize = parseFloat(style);
            tag.style.fontSize = fontSize * 1.25 + "px";
        });
        increaseCont++;
    }

    const percentage = increaseCont * 25;
    textIncreaseButton.textContent = `${percentage + 100}%`;
}

// ALTERAR FONTE
const fontFamilyButton = document.getElementById("fonte");
const textfontFamilyButton = fontFamilyButton.querySelector(".name");
let fontFamilyCont = 0;

fontFamilyButton.addEventListener("click", () => {
    changeFontFamily();
});

function changeFontFamily() {
    const body = document.body;

    switch (fontFamilyCont) {
        case 0:
            body.classList.remove("font-inter", "font-dyslexic");
            body.classList.add("font-times");
            textfontFamilyButton.textContent = "Times New Roman";
            fontFamilyCont++;
            break;
        case 1:
            body.classList.remove("font-times", "font-inter");
            body.classList.add("font-dyslexic");
            textfontFamilyButton.textContent = "Verdana";
            fontFamilyCont++;
            break;
        case 2:
            body.classList.remove("font-times", "font-dyslexic");
            body.classList.add("font-inter");
            textfontFamilyButton.textContent = "Inter";
            fontFamilyCont = 0;
            break;
    }
}

// AUMENTAR ESPAÇAMENTO
const increaseLetterSpacingButton = document.getElementById("espacamento");
const textIncreaseLetterSpacingButton =
    increaseLetterSpacingButton.querySelector(".letter");
let increaseLetterSpacingCont = 1;

increaseLetterSpacingButton.addEventListener("click", () => {
    increaseLetterSpacing();
});

function increaseLetterSpacing() {
    if (increaseLetterSpacingCont === 1) {
        tags.forEach((tag) => {
            tag.style.letterSpacing = increaseLetterSpacingCont * 1 + "px";
        });
        increaseLetterSpacingCont++;
    } else if (increaseLetterSpacingCont === 6) {
        tags.forEach((tag) => {
            tag.style.letterSpacing = "normal";
        });
        increaseLetterSpacingCont = 1;
    } else {
        tags.forEach((tag) => {
            tag.style.letterSpacing = increaseLetterSpacingCont * 1 + "px";
        });
        increaseLetterSpacingCont++;
    }

    const spacing = increaseLetterSpacingCont * 1 - 1;
    textIncreaseLetterSpacingButton.textContent = `${spacing}px`;
}

// ALTERAR CURSOR
const cursorButton = document.getElementById("cursor");

cursorButton.addEventListener("click", () => {
    changeCursor();
});

function changeCursor() {
    const body = document.body;
    const hoverItens = document.querySelectorAll("a, button, input, li");

    body.classList.toggle("cursor-big");

    hoverItens.forEach((item) => {
        item.classList.toggle("cursor-pointer-big");
    });
}

// ALTERAR TEMA
const themeButton = document.getElementById("tema");

themeButton.addEventListener("click", changeTheme);
