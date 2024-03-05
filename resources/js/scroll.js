// ADICIONANDO CLASS DEPOIS DE UM SCROLL
window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        header.classList.add("scroll");
    } else {
        header.classList.remove("scroll");
    }
});

const btnHome = document.querySelector("#btn-home");
const svgHome = document.querySelector("#svg-home");

btnHome.addEventListener("mouseover", () => {
    svgHome.classList.add("fill-yellow-400");
});

btnHome.addEventListener("mouseout", () => {
    svgHome.classList.remove("fill-yellow-400");
});
