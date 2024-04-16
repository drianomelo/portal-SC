const btnHome = document.querySelector("#btn-home");
const svgHome = document.querySelector("#svg-home");

btnHome.addEventListener("mouseover", () => {
    svgHome.classList.add("fill-yellow-400");
});

btnHome.addEventListener("mouseout", () => {
    svgHome.classList.remove("fill-yellow-400");
});

const itemExtra = document.querySelectorAll(".item-extra");

itemExtra.forEach((item) => {
    const extra = item.querySelector(".extra");

    item.addEventListener("mouseover", () => {
        extra.classList.remove("hidden");
        extra.classList.add("flex");
    });

    item.addEventListener("mouseout", () => {
        extra.classList.remove("flex");
        extra.classList.add("hidden");
    });
});
