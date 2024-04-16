const buttonOpenModal = document.getElementById("open-modal");
const buttonCloseModal = document.getElementById("esc");
const modal = document.querySelector(".modal");
const backgroundModal = document.querySelector(".back-modal");

// EXIBINDO
buttonOpenModal.addEventListener("click", () => {
    showModal();
});

// OCULTANDO
buttonCloseModal.addEventListener("click", () => {
    hideModal();
});
document.addEventListener("keyup", (event) => {
    if (event.code === "Escape") {
        hideModal();
    }
});

// FUNÇÃO PARA EXIBIR
function showModal() {
    modal.classList.toggle("hidden-modal");
    modal.classList.toggle("show-modal");

    backgroundModal.classList.toggle("hidden-back-modal");
    backgroundModal.classList.toggle("show-back-modal");
}

// FUNÇÃO PARA OCULTAR
function hideModal() {
    modal.classList.remove("show-modal");
    modal.classList.add("hidden-modal");

    backgroundModal.classList.remove("show-back-modal");
    backgroundModal.classList.add("hidden-back-modal");
}
