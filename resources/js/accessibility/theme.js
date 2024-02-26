// ALTERAR TEMA
const themeButton = document.getElementById("tema");
const textTheme = themeButton.querySelector(".theme");

if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
    textTheme.textContent = "Escuro";
} else {
    document.documentElement.classList.remove("dark");
    textTheme.textContent = "Claro";
}

export function changeTheme() {
    if (
        localStorage.theme === "dark" ||
        (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        localStorage.theme = "light";
        document.documentElement.classList.remove("dark");
        textTheme.textContent = "Claro";
    } else {
        localStorage.theme = "dark";
        document.documentElement.classList.add("dark");
        textTheme.textContent = "Escuro";
    }
}

themeButton.addEventListener("click", changeTheme);
