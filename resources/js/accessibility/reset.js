import { letterSpacing } from "./letterSpacing.js";
import { fontSize } from "./fontSize.js";
import { fontFamily } from "./fontFamily.js";
import { cursor } from "./cursor.js";
import { changeTheme } from "./theme.js";

const resetButton = document.getElementById("restaurar");

resetButton.addEventListener("click", () => {
    resetSettings();
});

function resetSettings() {
    localStorage.clear();
    letterSpacing.reset();
    fontSize.reset();
    fontFamily.reset();
    cursor.reset();
    changeTheme();
}
