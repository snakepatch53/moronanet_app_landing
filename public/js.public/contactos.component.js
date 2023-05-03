const $contactform = document.getElementById("contactform");
const $contactform_msg = document.getElementById("contact-form-static-msg");

$contactform.onsubmit = async function (e) {
    e.preventDefault();
    if ($contactform["mensaje_name"].value == "") return setMsg("Por favor, ingrese su nombre");
    if ($contactform["mensaje_affair"].value == "") return setMsg("Por favor, ingrese el asunto");
    if ($contactform["mensaje_phone"].value == "") return setMsg("Por favor, ingrese su contacto");
    if ($contactform["mensaje_email"].value == "") return setMsg("Por favor, ingrese su correo");
    if ($contactform["mensaje_message"].value == "") return setMsg("Por favor, ingrese su mensaje");

    const res = await insertMsg();
    if (!res) return setMsg("Error al enviar el mensaje");

    setMsg("Gracias, muy pronto nos pondremos en contacto con usted", "success");
    setTimeout(() => {
        setMsg("Regresando al inicio", "success");
        setTimeout(() => {
            window.location.href = http_domain;
        }, 1000);
    }, 2000);
};

function setMsg(msg, type = "danger") {
    $contactform_msg.innerHTML = msg;
    $contactform_msg.classList.add(`alert-${type}`);
    setTimeout(() => {
        $contactform_msg.innerHTML = "";
        $contactform_msg.classList.remove(`alert-${type}`);
    }, 3000);
}

function insertMsg() {
    let formData = new FormData($contactform);
    return fetch_query(formData, "mensaje", "insert").then((res) => {
        console.log(res);
        if (!res) return false;
        if (!res.response) return false;
        return true;
    });
}
