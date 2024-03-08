import "./scroll.js";
import "./search.js";
import "./videos";
import "./swiper";
import "./accessibility/accessibility.js";

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
