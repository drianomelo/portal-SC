// ALTERAR FONTE
const fontFamilyButton = document.getElementById("fonte");
const textfontFamilyButton = fontFamilyButton.querySelector(".name");

let fontFamilyCont = localStorage.getItem("fontFamilyCont")
    ? parseInt(localStorage.getItem("fontFamilyCont"))
    : 2;

updateFontFamily();

function updateFontFamily() {
    const body = document.body;

    switch (fontFamilyCont) {
        case 0:
            body.classList.remove("font-inter", "font-dyslexic");
            body.classList.add("font-times");
            textfontFamilyButton.textContent = "Times New Roman";
            break;
        case 1:
            body.classList.remove("font-times", "font-inter");
            body.classList.add("font-dyslexic");
            textfontFamilyButton.textContent = "Verdana";
            break;
        case 2:
            body.classList.remove("font-times", "font-dyslexic");
            body.classList.add("font-inter");
            textfontFamilyButton.textContent = "Inter";
            break;
    }
}

fontFamilyButton.addEventListener("click", () => {
    fontFamilyCont = (fontFamilyCont + 1) % 3;
    localStorage.setItem("fontFamilyCont", fontFamilyCont);
    updateFontFamily();
});

function reset() {
    fontFamilyCont = 2;
    updateFontFamily();
}

export const fontFamily = {
    reset,
};
