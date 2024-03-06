// ADICIONANDO CLASS DEPOIS DE UM SCROLL
window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        header.classList.add("scroll");
    } else {
        header.classList.remove("scroll");
    }
});

