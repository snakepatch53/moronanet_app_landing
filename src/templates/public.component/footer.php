<div class="container">
    <div class="col about-us">
        <a href="#" class="logo">
            <img src="<?= $DATA['http_domain'] ?>public/img/logo.png?last=<?= $DATA['info']['info_last'] ?>" alt="Logo Morona NET">
            <span><?= $DATA['info']['info_name'] ?></span>
        </a>
        <p><?= substr($DATA['info']['info_desc'], 0, 70) ?>..</p>
        <a href="<?= $DATA['http_domain'] ?>contactos" class="button">
            <i class="fas fa-map-marker-alt"></i>
            <span>Ubicación</span>
        </a>
    </div>
    <div class="col contact">
        <h3>Contáctanos</h3>
        <p><?= $DATA['info']['info_address'] ?> / <?= $DATA['info']['info_city'] ?>, <?= $DATA['info']['info_province'] ?>..</p>
        <p>Cel: <?= $DATA['info']['info_cellphone'] ?></p>
        <p>Email: <?= $DATA['info']['info_email'] ?></p>
    </div>
    <div class="col">
        <h3>Nuestras redes sociales</h3>
        <div class="social-media">
            <?php foreach ($DATA['social'] as $key => $value) { ?>
                <a href="<?= $value['social_url'] ?>" style="color:<?= $value['social_color'] ?>; border: solid 1px <?= $value['social_color'] ?>" target="_blank">
                    <?= $value['social_icon'] ?>
                </a>
            <?php } ?>
            </divc>
        </div>
    </div>
    <div class="col links">
        <h3>Información</h3>
        <?php foreach ($DATA['links'] as $key => $link) { ?>
            <a href="<?= $link['link_ref'] ?>contactos"><?= $link['link_name'] ?></a>
        <?php } ?>
    </div>
</div>