<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/preguntas.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">

        <section class="des-preguntas">
            <div class="container">
                <div class="col col1">
                    <div class="row">
                        <img class="logo" src="<?= $DATA['http_domain'] ?>public/img/logo.png" alt="Logo Morona Net">
                        <h1>Morona NET</h1>
                    </div>
                    <img class="personaje" src="<?= $DATA['http_domain'] ?>public/img/personaje2.png?last=<?= $DATA['info']['info_last'] ?>" alt="Imagen 2 del personaje">
                </div>
                <div class="col col2">
                    <h4>CONCEPTOS IMPORTANTES</h4>
                    <h2>Preguntas y respuestas</h2>
                    <div class="items">
                        <!-- FOREACH | INI -->
                        <?php foreach ($DATA['preguntas'] as $key => $value) { ?>
                            <div class="item">
                                <input type="radio" name="input-preguntas" id="pregunta-<?= $value['pregunta_id'] ?>" <?= $key == 0 ? 'checked' : '' ?>>
                                <label for="pregunta-<?= $value['pregunta_id'] ?>">
                                    <span><?= $value['pregunta_name'] ?></span>
                                    <i class="fas fa-chevron-down"></i>
                                </label>
                                <div class="respuesta">
                                    <p><?= $value['pregunta_response'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- FOREACH | FIN -->
                    </div>
                </div>
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