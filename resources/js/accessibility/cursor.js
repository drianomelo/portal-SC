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
