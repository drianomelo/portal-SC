const form = document.getElementById("cep-form");
const inputForm = document.getElementById("input-rua");
const labelForm = document.getElementById("label-rua");
const ruas = document.getElementById("ruas");

inputForm.addEventListener("focus", () => {
    inputFocus();
});

inputForm.addEventListener("blur", () => {
    if (inputForm.value == "") {
        inputBlur();
    }
});

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const street = inputForm.value;

    inputForm.value = "";
    ruas.innerHTML = "";
    getCEP(street).then((data) => {
        data.forEach((rua) => {
            ruas.innerHTML += `
                    <button onclick="getMap(${rua.cep.replace(
                        "-",
                        ""
                    )})" class="flex items-center bg-blue-900 gap-2 w-[350px] p-3 pl-5 rounded-full">
                        <img class="w-16 ml-2" src="https://anexos.saocristovao.se.gov.br/storage/files/18/portal/icon/location.png" alt="">
                        <div class="flex flex-col items-start ml-4">
                            <span class="font-bold text-white text-start">${
                                rua.logradouro
                            }</span>
                            <span class="mb-1 -mt-[2px] text-xs font-light text-white">${
                                rua.bairro
                            } ${
                rua.complemento !== "" ? "- " + rua.complemento : ""
            }</span>
                            <span class="font-bold text-yellow-400">${
                                rua.cep
                            }</span>
                        </div>
                    </button>
                    `;
        });
    });
    inputBlur();
});

async function getCEP(street) {
    const connection = await fetch(
        `https://viacep.com.br/ws/SE/Sao%20Cristovao/${street}/json/`
    );
    const convertedConnection = await connection.json();

    return convertedConnection;
}

function inputFocus() {
    labelForm.classList.remove("bottom-2/4");
    labelForm.classList.add("bottom-full");
    labelForm.classList.remove("left-8");
    labelForm.classList.add("left-12");
}

function inputBlur() {
    labelForm.classList.remove("bottom-full");
    labelForm.classList.add("bottom-2/4");
    labelForm.classList.remove("left-12");
    labelForm.classList.add("left-8");
}

async function getMap(cep) {
    const connection = await fetch(`https://cep.awesomeapi.com.br/json/${cep}`);
    const convertedConnection = await connection.json();

    const lat = convertedConnection.lat;
    const lng = convertedConnection.lng;

    window.open(
        `http://maps.google.com/maps?z=12&t=m&q=loc:${lat}+${lng}`,
        "_blank"
    );
}
