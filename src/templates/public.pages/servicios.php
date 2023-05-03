<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/servicios.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <?php foreach ($DATA['planes'] as $key => $value) { ?>
            <section class="des-plan" id="plan-<?= $value['plan_id'] ?>">
                <div class="container">
                    <h4>MORONA NET</h4>
                    <h2>PLAN <?= $value['plan_name'] ?></h2>
                    <div class="card-planes">
                        <div class="card">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <h4>COMPRESIÓN</h4>
                            <h3><?= $value['plan_sharing_name'] ?></h3>
                            <span class="note"><?= $value['plan_sharing_value'] ?></span>
                        </div>
                        <div class="card popular">
                            <i class="fas fa-dollar-sign"></i>
                            <h4>PRECIO</h4>
                            <span>Solo por</span>
                            <h3><b>$</b> <?= $value['plan_price_value'] ?> / mes <?= $value['plan_price_iva'] == true ? '<span class="iva"> + IVA</span>' : '' ?></h3>
                            <a href="<?= $DATA['http_domain'] ?>contactos#formulario">CONTRATAR</a>
                        </div>
                        <div class="card">
                            <i class="fas fa-tachometer-alt"></i>
                            <h4>VELOCIDAD</h4>
                            <h3><?= $value['plan_speed_value'] ?></h3>
                            <span class="note"><?= $value['plan_speed_devices'] ?> Dispositivos</span>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>



    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>