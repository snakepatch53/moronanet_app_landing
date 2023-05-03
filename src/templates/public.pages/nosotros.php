<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/nosotros.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__zoomIn">

        <section class="des-about">
            <div class="container">
                <h2>Sobre Nosotros</h2>
                <p><?= $DATA['info']['info_desc'] ?></p>
                <h3>Misión</h3>
                <p><?= $DATA['info']['info_mision'] ?></p>
                <h3>Visión</h3>
                <p><?= $DATA['info']['info_vision'] ?></p>
                <h3>Valores</h3>
                <ul>
                    <li><b>Servicio.</b> cumplimos con nuestro compromiso de brindar un producto de calidad.</li>
                    <li><b>Innovación y mejora continua.</b> sabemos que es muy importante mantener una tecnología de punto para dar un servicio optimo a nuestros clientes.</li>
                    <li><b>Formación.</b> Clicknet se preocupa por la mejora continua en todos los ámbitos.</li>
                    <li><b>Apoyo.</b> Nuestros clientes contarán con nuestro apoyo de principio a fin.</li>
                    <li><b>Cordialidad.</b> Mantenemos un trato amable con nuestros clientes.</li>
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