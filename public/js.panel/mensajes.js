const forms = document.querySelectorAll(".needs-validation");
const $form = document.getElementById("element-form");
const $element_table = document.getElementById("element-table");

// bootstrap instances
const bootstrap_modalform = new bootstrap.Modal(document.getElementById("element-modalform"), {
    keyboard: false,
});
const bootstrap_modalconfirm = new bootstrap.Modal(document.getElementById("element-modalconfirm"), {
    keyboard: false,
});

async function main() {
    await crudFunction.select();
    $form.addEventListener(
        "submit",
        function (event) {
            if (!$form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            if ($form.checkValidity()) {
                event.preventDefault();
                crudFunction.insertUpdate($form);
            }

            $form.classList.add("was-validated");
        },
        false
    );
}

//functions
const handleFunction = {
    new: function () {
        uiFunction.modalForm_clear();
        $form["mensaje_id"].value = 0;
        bootstrap_modalform.show();
    },
    edit: function ($register_id) {
        const register = uiFunction.database.find((el) => el["mensaje_id"] == $register_id);
        setValuesForm(register, $form);
        $form.querySelector("#form_mensaje_name").innerText = register["mensaje_name"];
        $form.querySelector("#form_mensaje_affair").innerText = register["mensaje_affair"];
        $form.querySelector("#form_mensaje_phone").innerText = register["mensaje_phone"];
        $form.querySelector("#form_mensaje_email").innerText = register["mensaje_email"];
        $form.querySelector("#form_mensaje_message").innerText = register["mensaje_message"];
        bootstrap_modalform.show();
    },
    delete: function (register_id) {
        $form["mensaje_id"].value = register_id;
        bootstrap_modalconfirm.show();
    },

    // gift functions
    giftTrButton: function (register_id) {
        $form_gift["mensaje_id"].value = register_id;
        uiFunction.refreshTableGift(register_id);
        element_modalgift.show();
    },
};

const crudFunction = {
    select: async function () {
        await fetch_query(new FormData($form), "mensaje", "select").then((res) => {
            if (res.response) {
                uiFunction.database = res.data;
                uiFunction.refreshTable();
            }
        });
    },
    insertUpdate: function (form) {
        const action = $form["mensaje_id"].value == 0 ? "insert" : "update";
        fetch_query(new FormData(form), "mensaje", action).then((res) => {
            uiFunction.modalForm_hide();
            this.select();
        });
    },
    delete: function () {
        fetch_query(new FormData($form), "mensaje", "delete").then((res) => {
            uiFunction.modalForm_hide();
            this.select();
            uiFunction.modalConfirm_hide();
        });
    },
};

const uiFunction = {
    database: [],
    giftDatabase: [],
    getTr: function ({ mensaje_id, mensaje_name, mensaje_phone, mensaje_email }) {
        return `
            <tr>
                <td class="d-none d-md-table-cell fw-bold">${mensaje_id}</td>
                <td class="text-center text-md-left">${mensaje_name}</td>
                <td class="d-none d-md-table-cell text-center text-md-left">${mensaje_phone}</td>
                <td class="d-none d-md-table-cell text-center text-md-left">${mensaje_email}</td>
                <td class="text-center">
                    <button class="btn btn-outline-primary" onclick="handleFunction.edit(${mensaje_id})">
                        <i class="fa-solid fa-envelope"></i>
                    </button>
                    <button class="btn btn-outline-danger" onclick="handleFunction.delete(${mensaje_id})">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
            </tr>
        `;
    },
    refreshTable: function () {
        let html = "";
        for (let item of this.database) {
            html += this.getTr(item);
        }
        $element_table.innerHTML = html;
    },
    modalForm_hide: function () {
        bootstrap_modalform.hide();
        this.modalForm_clear();
    },
    modalForm_clear: function () {
        $form.reset();
        $form.classList.remove("was-validated");
    },
    modalConfirm_hide: function () {
        bootstrap_modalconfirm.hide();
    },
};

main();
