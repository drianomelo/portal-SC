// SEARCH
const header = document.querySelector("#header");
const searchButton = header.querySelector("#search-button");
const search = document.querySelector("#search");
const closeSearchButton = search.querySelector("#search-close");

searchButton.addEventListener("click", () => {
    search.classList.remove("-top-20");
    search.classList.add("top-0");

    header.classList.remove("top-0");
    header.classList.add("top-[72px]");
});

closeSearchButton.addEventListener("click", () => {
    search.classList.remove("top-0");
    search.classList.add("-top-20");

    header.classList.remove("top-[72px]");
    header.classList.add("top-0");
});
document.addEventListener("keyup", (event) => {
    if (event.code === "Escape") {
        search.classList.remove("top-0");
        search.classList.add("-top-20");

        header.classList.remove("top-[72px]");
        header.classList.add("top-0");
    }
});

//ROUNDED BUTTON
const roundedBtn = document.querySelectorAll(".rounded-button");

roundedBtn.forEach((btn) => {
    const span = btn.nextElementSibling;

    btn.addEventListener("mouseover", () => {
        if (btn.id === "search-button") {
            roundedBtn.forEach((button) => {
                const span = button.nextElementSibling;
                span.style.display = "none";
            });
            span.style.display = "block";
        }
    });

    btn.addEventListener("mouseout", () => {
        if (btn.id === "search-button") {
            roundedBtn.forEach((button) => {
                const span = button.nextElementSibling;
                span.style.display = "block";
            });
            span.style.display = "none";
        }
    });
});
