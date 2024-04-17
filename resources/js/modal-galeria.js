const prefeitos = document.querySelectorAll(".prefeito");
const modal = document.querySelector(".modal");
const backgroundModal = document.querySelector(".back-modal");
const buttonCloseModal = document.getElementById("esc");

prefeitos.forEach((prefeito) => {
    prefeito.addEventListener("click", (e) => {
        const name = prefeito.querySelector(".name-galeria").textContent;
        const descricao =
            prefeito.querySelector(".descricao-galeria").textContent;

        if (descricao) {
            fillModal(name, descricao);
            showModal();
        }
    });
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

function fillModal(name, desc) {
    const title = modal.querySelector(".modal-name");
    title.textContent = name;

    const descricao = modal.querySelector(".modal-desc");
    descricao.textContent = desc;
}
