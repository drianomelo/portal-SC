// TAGS "TEXTO" QUE SERÃO ALTERADAS NAS OPÇÕES DE ACESSIBILIDADE
const tags = document.querySelectorAll(".text");

// AUMENTAR FONTE
const increaseButton = document.getElementById("aumentar");
const textIncreaseButton = increaseButton.querySelector(".percentage");
let increaseCont = localStorage.getItem("increaseCont")
    ? parseInt(localStorage.getItem("increaseCont"))
    : 0;
let initFontSize = localStorage.getItem("initFontSize")
    ? JSON.parse(localStorage.getItem("initFontSize"))
    : [];

updateFontSize();

function updateFontSize() {
    tags.forEach((tag, i) => {
        if (increaseCont === 0) {
            tag.style.fontSize = initFontSize[i] + "px";
        } else {
            const style = window.getComputedStyle(tag).fontSize;
            const fontSize = parseFloat(style);
            tag.style.fontSize = fontSize * 1.25 + "px";
        }
    });
    const percentage = increaseCont * 25;
    textIncreaseButton.textContent = `${percentage + 100}%`;
}

increaseButton.addEventListener("click", () => {
    if (increaseCont === 3) {
        increaseCont = 0;
        tags.forEach((tag, i) => {
            tag.style.fontSize = initFontSize[i] + "px";
        });
    } else {
        if (increaseCont === 0) {
            tags.forEach((tag, i) => {
                const style = window.getComputedStyle(tag).fontSize;
                const fontSize = parseFloat(style);
                initFontSize.push(fontSize);
            });
            localStorage.setItem("initFontSize", JSON.stringify(initFontSize));
        }
        increaseCont++;
        tags.forEach((tag) => {
            const style = window.getComputedStyle(tag).fontSize;
            const fontSize = parseFloat(style);
            tag.style.fontSize = fontSize * 1.25 + "px";
        });
    }
    localStorage.setItem("increaseCont", increaseCont);
    updateFontSize();
});

function reset() {
    increaseCont = 0;
    updateFontSize();
}

export const fontSize = {
    reset,
};
