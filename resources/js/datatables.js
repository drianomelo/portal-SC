let table = new DataTable("#table_concursos", {
    responsive: true,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json",
    },

    pageLength: 10,
    order: [[0, "desc"]],
    dom: "Brtip",
    buttons: [
        {
            text: '<i class="fa-solid fa-trash-can"></i> Limpar Filtros',
            action: function (e, dt, node, config) {
                dt.columns().search("").draw();

                dt.columns().every(function () {
                    const column = this;
                    const select = column.footer().querySelector("select");
                    if (select) {
                        select.value =
                            select.querySelector("option:first-child").value;
                    }
                });
            },
        },
        "csv",
        "excel",
        "print",
    ],

    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;

                // Create select element
                let select = document.createElement("select");
                let placeholder = column.footer().id;
                let option = new Option(placeholder);
                option.style.backgroundColor = " #999";
                option.selected = true;
                option.disabled = true;
                select.add(option);
                column.footer().replaceChildren(select);

                // Apply listener for user change in value
                select.addEventListener("change", function () {
                    var val = DataTable.util.escapeRegex(select.value);

                    column
                        .search(val ? "^" + val + "$" : "", true, false)
                        .draw();
                });

                // Add list of options
                column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        select.add(new Option(d));
                    });
            });
    },
});

let table_unidades_semed = new DataTable("#table_unidades_semed", {
    responsive: true,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json",
    },

    pageLength: 5,
    order: [[0, "desc"]],
    dom: "Brtip",
    buttons: [
        {
            text: '<i class="fa-solid fa-trash-can"></i> Limpar Filtros',
            action: function (e, dt, node, config) {
                dt.columns().search("").draw();

                dt.columns().every(function () {
                    const column = this;
                    const select = column.footer().querySelector("select");
                    if (select) {
                        select.value =
                            select.querySelector("option:first-child").value;
                    }
                });
            },
        },
        "csv",
        "excel",
        "print",
    ],

    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;

                // Create select element
                let select = document.createElement("select");
                let placeholder = column.footer().id;
                let option = new Option(placeholder);
                option.style.backgroundColor = " #999";
                option.selected = true;
                option.disabled = true;
                select.add(option);
                column.footer().replaceChildren(select);

                // Apply listener for user change in value
                select.addEventListener("change", function () {
                    var val = DataTable.util.escapeRegex(select.value);

                    column
                        .search(val ? "^" + val + "$" : "", true, false)
                        .draw();
                });

                // Add list of options
                column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        select.add(new Option(d));
                    });
            });
    },
});

let table_ideb_semed = new DataTable("#table_ideb_semed", {
    responsive: true,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json",
    },

    pageLength: 5,
    order: [[0, "desc"]],
    dom: "Brtip",
    buttons: [
        {
            text: '<i class="fa-solid fa-trash-can"></i> Limpar Filtros',
            action: function (e, dt, node, config) {
                dt.columns().search("").draw();

                dt.columns().every(function () {
                    const column = this;
                    const select = column.footer().querySelector("select");
                    if (select) {
                        select.value =
                            select.querySelector("option:first-child").value;
                    }
                });
            },
        },
        "csv",
        "excel",
        "print",
    ],

    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;

                // Create select element
                let select = document.createElement("select");
                let placeholder = column.footer().id;
                let option = new Option(placeholder);
                option.style.backgroundColor = " #999";
                option.selected = true;
                option.disabled = true;
                select.add(option);
                column.footer().replaceChildren(select);

                // Apply listener for user change in value
                select.addEventListener("change", function () {
                    var val = DataTable.util.escapeRegex(select.value);

                    column
                        .search(val ? "^" + val + "$" : "", true, false)
                        .draw();
                });

                // Add list of options
                column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        select.add(new Option(d));
                    });
            });
    },
});
