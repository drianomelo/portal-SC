let thisPage = 1;
let limit = 6;
let list = document.querySelectorAll(".list .item");

function loadItem() {
    let beginGet = limit * (thisPage - 1);
    let endGet = limit * thisPage - 1;
    list.forEach((item, key) => {
        if (key >= beginGet && key <= endGet) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
    listPage();
}
loadItem();

function listPage() {
    let count = Math.ceil(list.length / limit);
    document.querySelector(".listPage").innerHTML = "";

    const maxVisiblePages = 5;
    const halfMaxVisiblePages = Math.floor(maxVisiblePages / 2);
    let startPage = Math.max(thisPage - halfMaxVisiblePages, 1);
    let endPage = Math.min(startPage + maxVisiblePages - 1, count);

    if (startPage > 1) {
        addPageButton(1);
        if (startPage > 2) {
            addEllipsis();
        }
    }

    for (let i = startPage; i <= endPage; i++) {
        addPageButton(i);
    }

    if (endPage < count) {
        if (endPage < count - 1) {
            addEllipsis();
        }
        addPageButton(count);
    }
}

function addPageButton(pageNumber) {
    let newPage = document.createElement("button");
    newPage.innerText = pageNumber;
    if (pageNumber == thisPage) {
        newPage.classList.add("active");
    }
    newPage.addEventListener("click", () => changePage(pageNumber));
    document.querySelector(".listPage").appendChild(newPage);
}

function addEllipsis() {
    let ellipsis = document.createElement("span");
    ellipsis.style.color = "#713f12";
    ellipsis.innerText = "...";
    document.querySelector(".listPage").appendChild(ellipsis);
}

function changePage(i) {
    thisPage = i;
    loadItem();
}
