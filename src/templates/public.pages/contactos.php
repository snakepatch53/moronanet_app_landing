<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/contactos.component.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/contactos.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__zoomIn">
        <section class="mapa">
            <?= $DATA['info']['info_location'] ?>
        </section>
        <section class="contactanos" id="formulario">
            <?php include('./src/templates/public.component/contactos.php') ?>
        </section>

    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/contactos.component.js"></script>
</foot>

</html>