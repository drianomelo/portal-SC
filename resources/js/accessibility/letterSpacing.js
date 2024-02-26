// TAGS "TEXTO" QUE SERÃO ALTERADAS NAS OPÇÕES DE ACESSIBILIDADE
const tags = document.querySelectorAll(".text");

// AUMENTAR ESPAÇAMENTO
const increaseLetterSpacingButton = document.getElementById("espacamento");
const textIncreaseLetterSpacingButton =
    increaseLetterSpacingButton.querySelector(".letter");

let increaseLetterSpacingCont = localStorage.getItem(
    "increaseLetterSpacingCont"
)
    ? parseInt(localStorage.getItem("increaseLetterSpacingCont"))
    : 1;
let spacing = localStorage.getItem("spacing")
    ? parseInt(localStorage.getItem("spacing"))
    : 0;

updateLetterSpacing();

increaseLetterSpacingButton.addEventListener("click", () => {
    increaseLetterSpacingCont =
        increaseLetterSpacingCont === 6 ? 1 : increaseLetterSpacingCont + 1;
    spacing = increaseLetterSpacingCont - 1;
    localStorage.setItem(
        "increaseLetterSpacingCont",
        increaseLetterSpacingCont
    );
    localStorage.setItem("spacing", spacing);
    updateLetterSpacing();
});

export function updateLetterSpacing() {
    tags.forEach((tag) => {
        if (increaseLetterSpacingCont === 1) {
            tag.style.letterSpacing = "normal";
        } else {
            tag.style.letterSpacing = increaseLetterSpacingCont + "px";
        }
    });
    textIncreaseLetterSpacingButton.textContent = `${spacing}px`;
}

function reset() {
    increaseLetterSpacingCont = 1;
    spacing = 0;
    updateLetterSpacing();
}

export const letterSpacing = {
    reset,
};
