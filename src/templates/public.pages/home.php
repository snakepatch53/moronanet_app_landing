<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/home.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/frontpage.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/about.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/caracteristicas.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/galeria.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/desarrollador.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <!-- section frontpage -->
        <?php include('./src/templates/public.component/frontpage.php') ?>
        <!-- section about -->
        <?php include('./src/templates/public.component/about.php') ?>
        <!-- section caracteristicas -->
        <?php include('./src/templates/public.component/caracteristicas.php') ?>
        <!-- section galeria -->
        <?php include('./src/templates/public.component/galeria.php') ?>
        <!-- section desarrollador -->
        <?php include('./src/templates/public.component/desarrollador.php') ?>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/galery.component.js"></script>
</foot>

</html>