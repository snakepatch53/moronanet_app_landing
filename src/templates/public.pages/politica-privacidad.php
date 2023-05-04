<!DOCTYPE html>
<html lang="es">

<head>
    <title><?= $_ENV['APP_NAME'] ?> - Politicas de Privacidad</title>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/politica-privacidad.css">
</head>
<?php
$LINK_HAROLD = '<a target="_blank" href="https://harold.ideasoft.site">Harold Hernandez</a>';
$LINK_MORONANET = '<a target="_blank" href="https://moronanet.com">Moronanet</a>';
$LINK_IDEASOFT = '<a target="_blank" href="https://ideasoft.site">Ideasoft</a>';
$LINK_POLITICA_PRIVACIDAD = '<a href="' . $DATA['http_domain'] . 'politica-privacidad/">Política de Privacidad</a>';
?>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="terminos">
            <div class="container">

                <h1>Política de Privacidad de <?= $_ENV['APP_NAME'] ?></h1>
                <p class="out">Esta política de privacidad establece cómo se utiliza y protege cualquier información que usted proporciona al utilizar nuestra app.</p>
                <p class="out">Nos comprometemos a garantizar que su privacidad esté protegida. Si le pedimos que proporcione cierta información mediante la cual puede ser identificado al utilizar nuestra app, puede estar seguro de que solo se utilizará de acuerdo con esta declaración de privacidad.</p>

                <ol>
                    <li>
                        <h2>Información que recopilamos</h2>
                        <ul>
                            <li>
                                <p><?= $LINK_MORONANET ?> recopila la información necesaria para proporcionar sus servicios de internet, la cual incluye datos personales y de contacto del cliente.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Cómo usamos la información</h2>
                        <p>Al usar la aplicación deberia considerar lo siguiente:</p>
                        <ul>
                            <li>
                                <p>La información recopilada se utiliza exclusivamente para prestar el servicio contratado por el cliente.</p>
                            </li>
                            <li>
                                <p>No compartimos, vendemos ni alquilamos información personal con terceros sin el consentimiento explícito del cliente.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Acceso a la información</h2>
                        <ul>
                            <li>
                                <p>Los clientes tienen derecho a acceder, actualizar o eliminar su información personal en cualquier momento.</p>
                            </li>
                            <li>
                                <p>Si el cliente desea solicitar la eliminación de su información personal, deberá dejar de utilizar los servicios de <?= $LINK_MORONANET ?>.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Información de tickets</h2>
                        <ul>
                            <li>
                                <p>La aplicación permite a los clientes enviar solicitudes de tickets para reportar problemas con el servicio.</p>
                            </li>
                            <li>
                                <p>Los datos recopilados en estas solicitudes incluyen asunto, nombre del solicitante, fecha y turno para revisión, descripción del problema y una foto.</p>
                            </li>
                            <li>
                                <p>Estos datos solo se utilizarán para dar seguimiento a la solicitud de ticket y mejorar la calidad del servicio.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Uso de la aplicación</h2>
                        <ul>
                            <li>
                                <p>La aplicación solo permite acceder a la información proporcionada por el cliente a <?= $LINK_MORONANET ?> al momento de contratar el servicio.</p>
                            </li>
                            <li>
                                <p>No se recopila información adicional a través de la aplicación.</p>
                            </li>
                            <li>
                                <p><?= $LINK_MORONANET ?> no se hace responsable por el uso indebido de la aplicación por parte del cliente.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h2>Cambios en la política de privacidad</h2>
                        <ul>
                            <li>
                                <p><?= $LINK_MORONANET ?> se reserva el derecho de cambiar esta política de privacidad en cualquier momento.</p>
                            </li>
                            <li>
                                <p>Los cambios se comunicarán a los clientes a través de la página web y/o correo electrónico.</p>
                            </li>
                        </ul>
                    </li>
                </ol>

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