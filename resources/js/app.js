import "./bootstrap";

// BUSCANDO ELEMENTOS DO DOM
const listItems = document.querySelectorAll(".list-item");
const backgroundBody = document.querySelector(".background");

// PERCORRENDO ARRAY DE TAGS <li>
listItems.forEach((item) => {
    item.addEventListener("click", () => {
        if (item.classList.contains("active")) {
            backgroundBody.classList.remove("active");
            removeAttributesHeader(item);
        } else {
            backgroundBody.classList.add("active");
            addAttributesHeader(item);
        }
    });
});

// FUNÇÃO PARA REMOVER ATRIBUTOS
function removeAttributesHeader(item) {
    const insideList = item.querySelector(".inside-list");
    const icon = item.querySelector(".icon");

    icon.classList.remove("rotate-180");
    insideList.classList.add("hidden");
    insideList.classList.remove("flex");
    item.classList.remove("active");
}

// FUNÇÃO PARA ADICIONAR ATRIBUTOS
function addAttributesHeader(item) {
    listItems.forEach((it) => {
        removeAttributesHeader(it);
    });

    const insideList = item.querySelector(".inside-list");
    const icon = item.querySelector(".icon");

    icon.classList.add("rotate-180");
    insideList.classList.remove("hidden");
    insideList.classList.add("flex");
    item.classList.add("active");
}

// REMOVENDO ATRIBUTOS SE A TECLA "ESC" FOR PRESSIONADA
window.addEventListener("keyup", (e) => {
    if (e.key === "Escape") {
        listItems.forEach((item) => {
            backgroundBody.classList.remove('active');
            removeAttributesHeader(item);
        });
    }
});


// BUSCANDO ELEMENTOS DO DOM
const searchButton = document.querySelector('#search-button');
const searchDiv = document.querySelector('.search');
const searchButtonClose = document.querySelector(".search-close");
const header = document.querySelector('header');

// EVENTO PARA EXIBIR FORMULARIO DE PESQUISA
searchButton.addEventListener('click', () => {
    searchDiv.classList.remove('-top-20');
    searchDiv.classList.add('top-0');
    header.classList.remove('top-0');
    header.classList.add('top-[72px]');
});

// EVENTO PARA ESCONDER FORMULARIO DE PESQUISA
searchButtonClose.addEventListener('click', () => {
    searchDiv.classList.add('-top-20');
    searchDiv.classList.remove('top-0');
    header.classList.add('top-0');
    header.classList.remove('top-[72px]');
});
