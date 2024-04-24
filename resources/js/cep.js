const form = document.getElementById("cep-form");
const inputForm = document.getElementById("input-cep");
const labelForm = document.getElementById("label-rua");
const ruas = document.getElementById("ruas");
const btnsCep = document.querySelectorAll(".btn-cep button");
const resultadoCep = document.querySelector("#resultado-cep");

btnsCep.forEach((btn) => {
    btn.addEventListener("click", () => {
        handleClickButton(btn.id);
    });
});

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const inputForm = document.getElementById("input-cep");

    const street = inputForm.value;

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
        resultadoCep.textContent = `${data.length} resultados para "${street}"`;
    });

});

async function getCEP(street) {
    const connection = await fetch(
        `https://viacep.com.br/ws/SE/Sao%20Cristovao/${street}/json/`
    );
    const convertedConnection = await connection.json();

    return convertedConnection;
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

function handleClickButton(selector) {
    if (selector === "btn-rua") {
        form.innerHTML = `
        <div class="relative flex items-center justify-center mx-auto mb-6 w-fit">
            <label
                class="absolute px-3 font-bold text-blue-900 transition-all bg-white dark:bg-zinc-900 dark:text-yellow-500 left-8 bottom-12"
                for="input-cep" id="label-rua">Nome da Rua</label>
            <input type="text" required
                class="w-[400px] px-8 py-4 bg-white border-2 border-blue-900 rounded-full outline-none dark:border-yellow-500 dark:bg-zinc-900 dark:text-white"
                id="input-cep">
        </div>

        <input type="submit" value="Pesquisar CEP"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">
        `;
    } else if (selector === "btn-bairro") {
        form.innerHTML = `
        <select name="input-cep" id="input-cep"
            class="w-[400px] px-8 py-4 bg-white border-2 font-bold text-blue-900 mb-6 border-blue-900 rounded-full outline-none dark:border-yellow-500 dark:bg-zinc-900 dark:text-yellow-500">
            <option value="Área Rural de São Cristóvão">Área Rural de São Cristóvão</option>
            <option value="Centro">Centro</option>
            <option value="Divineia">Divineia</option>
            <option value="Eduardo Gomes">Eduardo Gomes</option>
            <option value="Irineu Neri">Irineu Neri</option>
            <option value="Lourival Batista">Lourival Batista</option>
            <option value="Luiz Alves">Luis Alves</option>
            <option value="Madre Paulina">Madre Paulina</option>
            <option value="Marcelo Deda">Marcelo Deda</option>
            <option value="Romualdo Prado">Romualdo Prado</option>
            <option value="Rosa Elze">Rosa Elze</option>
            <option value="Rosa Maria">Rosa Maria</option>
            <option value="São Gonçalo">São Gonçalo</option>
            <option value="Tijuquinha">Tijuquinha</option>
            <option value="Varzea Grande">Varzea Grande</option>
        </select>

        <input type="submit" value="Pesquisar CEP"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">
        `;
    }
}
