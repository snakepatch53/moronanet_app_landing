<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/clientes.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__zoomIn">

        <section class="des-clientes">
            <div class="container">
                <img src="<?= $DATA['http_domain'] ?>public/img/img3.jpg" alt="Imagen de atención al cliente">
                <h2>RESTRICCIONES</h2>
                <ul>
                    <?php foreach ($DATA['restricciones'] as $key => $value) { ?>
                        <li><?= $value['restriccion_desc'] ?></li>
                    <?php } ?>
                </ul>
            </div>
        </section>

    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>