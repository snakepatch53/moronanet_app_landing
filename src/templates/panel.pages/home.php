<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/panel.component/head.php') ?>
    <style>
        /* Estilos para el dashboard */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 1px 6px 0 rgba(0, 0, 0, 0.5);
        }

        .card-title {
            font-size: 1.5rem;
        }

        .card-footer {
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 0px 0px 10px 10px;
            text-align: center;
            cursor: pointer;
        }

        .card-footer i {
            margin-right: 5px;
        }

        main {
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php include('./src/templates/panel.component/header.php') ?>
    <?php include('./src/templates/panel.component/sidebar.php') ?>
    <main>
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Links</span>
                                <i class="fas fa-link"></i>
                            </h5>
                            <p class="card-text">Total de links: <?= $DATA['links_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/links">Ver links</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Mensajes</span>
                                <i class="fas fa-envelope"></i>
                            </h5>
                            <p class="card-text">Total de mensajes: <?= $DATA['mensajes_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/mensajes">Ver mensajes</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Planes</span>
                                <i class="fa-solid fa-credit-card"></i>
                            </h5>
                            <p class="card-text">Total de planes: <?= $DATA['planes_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/planes">Ver planes</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Preguntas</span>
                                <i class="fa-solid fa-question"></i>
                            </h5>
                            <p class="card-text">Total de preguntas: <?= $DATA['preguntas_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/preguntas">Ver preguntas</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Restricciones</span>
                                <i class="fa-solid fa-lock"></i>
                            </h5>
                            <p class="card-text">Total de restricciones: <?= $DATA['restricciones_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/preguntas">Ver restricciones</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Slider</span>
                                <i class="fas fa-images"></i>
                            </h5>
                            <p class="card-text">Total de slides: <?= $DATA['slider_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/slider">Ver slider</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Redes</span>
                                <i class="fa-solid fa-share"></i>
                            </h5>
                            <p class="card-text">Total de redes: <?= $DATA['social_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/social">Ver redes</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                <span>Usuarios</span>
                                <i class="fa-solid fa-user"></i>
                            </h5>
                            <p class="card-text">Total de usuarios: <?= $DATA['user_total'] ?></p>
                        </div>
                        <a class="card-footer btn" href="<?= $DATA['http_domain'] ?>panel/user">Ver usuarios</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>
<foot>
    <?php include('./src/templates/panel.component/foot.php') ?>
</foot>

</html>