const form = document.getElementById("cep-form");
const parentForm = form.parentElement;
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

function handleClickButton(selector) {
    if (selector === "btn-rua") {
        parentForm.innerHTML = `
        <form class="flex flex-col items-center w-full" id="cep-form" action="/api/getRuas">
            <div class="relative flex items-center justify-center mx-auto mb-6 w-fit">
                <label
                    class="absolute px-3 font-bold text-blue-900 transition-all bg-white dark:bg-zinc-900 dark:text-yellow-500 left-8 bottom-12"
                    for="input-cep" id="label-rua">Nome da Rua</label>
                <input type="text" required
                    class="w-[400px] px-8 py-4 bg-white border-2 border-blue-900 rounded-full outline-none dark:border-yellow-500  dark:bg-zinc-900 dark:text-white"
                    id="input-cep">
            </div>

            <input type="submit" value="Pesquisar CEP"
                class="px-4 py-2.5 font-bold text-yellow-600 bg-yellow-400 border-2 border-yellow-500 rounded-md cursor-pointer w-fit">
        </form>
        `;
    } else if (selector === "btn-bairro") {
        parentForm.innerHTML = `
        <form class="flex flex-col items-center w-full" id="cep-form" action="/api/getBairros">
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
        </form>
        `;
    }
}
