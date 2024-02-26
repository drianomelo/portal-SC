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
