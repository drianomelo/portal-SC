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
