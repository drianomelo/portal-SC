// ALTERAR CURSOR
const cursorButton = document.getElementById("cursor");
const textCursor = cursorButton.querySelector(".name-cursor");

let cursorState = localStorage.getItem("cursorState")
    ? JSON.parse(localStorage.getItem("cursorState"))
    : { big: false };

updateCursor();

export function updateCursor() {
    const body = document.body;
    const hoverItems = document.querySelectorAll("a, button, input, li");

    if (cursorState.big) {
        body.classList.add("cursor-big");
        hoverItems.forEach((item) => {
            item.classList.add("cursor-pointer-big");
        });
        textCursor.textContent = "Grande";
    } else {
        body.classList.remove("cursor-big");
        hoverItems.forEach((item) => {
            item.classList.remove("cursor-pointer-big");
        });
        textCursor.textContent = "Pequeno";
    }
}

cursorButton.addEventListener("click", () => {
    cursorState.big = !cursorState.big;
    localStorage.setItem("cursorState", JSON.stringify(cursorState));
    updateCursor();
});

function reset() {
    cursorState.big = false;
    updateCursor();
}

export const cursor = {
    reset,
};
