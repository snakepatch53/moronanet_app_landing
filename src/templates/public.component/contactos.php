<style>
    :root {
        --background_image_component_contact: url('<?= $DATA['http_domain'] ?>public/img/img2.jpg');
    }
</style>
<div class="container">
    <div class="col col1">
        <h2>CONTÁCTANOS</h2>
        <div class="cards">
            <div class="card">
                <i class="fas fa-map-marker-alt"></i>
                <div class="cont">
                    <h3>UBICACION</h3>
                    <h4><?= $DATA['info']['info_address'] ?> / <?= $DATA['info']['info_city'] ?>, <?= $DATA['info']['info_province'] ?></h4>
                </div>
            </div>
            <div class="card">
                <i class="far fa-envelope"></i>
                <div class="cont">
                    <h3>EMAIL</h3>
                    <h4><?= $DATA['info']['info_email'] ?></h4>
                </div>
            </div>
            <div class="card">
                <i class="fas fa-phone-alt"></i>
                <div class="cont">
                    <h3>CELULAR</h3>
                    <h4><?= $DATA['info']['info_cellphone'] ?></h4>
                </div>
            </div>
        </div>
        <a href="<?= $DATA['http_domain'] ?>contactos#formulario">OBTENER UNA CITA</a>
    </div>

    <div class="col col2">
        <h2>Déjanos un mensaje</h2>
        <form onsubmit="return false" id="contactform">
            <input type="text" name="mensaje_name" placeholder="Nombre Apellido *">
            <input type="text" name="mensaje_affair" placeholder="Asunto *">
            <input type="text" name="mensaje_phone" placeholder="Contacto *">
            <input type="text" name="mensaje_email" placeholder="Correo *">
            <textarea name="mensaje_message" placeholder="Mensaje *"></textarea>
            <p class="msg" id="contact-form-static-msg"></p>
            <input type="submit">
        </form>
    </div>
</div>