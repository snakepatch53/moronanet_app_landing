<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/home.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/contactos.component.css">
    <style>
        :root {
            --background_card_plan: url('<?= $DATA['http_domain'] ?>public/img/img1.jpg');
            --url_bg_wave_top: url('<?= $DATA['http_domain'] ?>public/img/bg_wave_top.svg');
            --url_bg_wave_bottom: url('<?= $DATA['http_domain'] ?>public/img/bg_wave_bottom.svg');
        }
    </style>
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <slider>
            <?php include('./src/templates/public.component/slider.php') ?>
        </slider>

        <!-- <section class="des-home">
            <div class="container">
                <h3>Comunicación total</h3>
                
                <h1><b>Nosotros llegamos,</b> donde nadie mas llega!</h1>
                <p><?= $DATA['info']['info_desc'] ?></p>
            </div>
        </section> -->
        <section class="des-home" id="particles">
            <div class="container">
                <h3>Comunicación total</h3>
                <h1><b>El internet mas rapido,</b> sin comparticion!</h1>
                <div class="cols">
                    <div class="col">
                        <img src="<?= $DATA['http_domain'] ?>public/img/personaje1.png?last=<?= $DATA['info']['info_last'] ?>" width="600" alt="Imagen 1 del personaje">
                    </div>
                    <div class="col">
                        <p><?= $DATA['info']['info_desc'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="des-plan">
            <div class="container">
                <h4>MORONA NET</h4>
                <h2>PLANES</h2>
                <div class="card-planes">
                    <?php
                    $count = 0;
                    foreach ($DATA['planes'] as $key => $value) {
                        if ($count++ < 6) {
                    ?>
                            <div class="card <?= ($count == 2 or $count == 5) ? 'popular' : '' ?>">
                                <?= $value['plan_icon'] ?>
                                <h4><?= $value['plan_name'] ?></h4>
                                <span>Desde</span>
                                <h3><b>$</b> <?= $value['plan_price_value'] ?> / mes <?= $value['plan_price_iva'] == true ? '<span class="iva"> + IVA</span>' : '' ?></h3>
                                <span class="megas"><?= $value['plan_speed_value'] ?></span>
                                <a href="<?= $DATA['http_domain'] ?>servicios#plan-<?= $value['plan_id'] ?>">Mas Información</a>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>
        <section class="contactanos">
            <?php include('./src/templates/public.component/contactos.php') ?>
        </section>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/slider.component.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/contactos.component.js"></script>

    <script src="<?= $DATA['http_domain'] ?>public/library.general/particles.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/home.particles.js"></script>
</foot>

</html>