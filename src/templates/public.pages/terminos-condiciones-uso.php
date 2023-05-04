<!DOCTYPE html>
<html lang="es">

<head>
    <title><?= $_ENV['APP_NAME'] ?> - Terminos y Condiciones de Uso</title>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/terminos-condiciones-uso.css">
</head>
<?php
$LINK_HAROLD = '<a target="_blank" href="https://harold.ideasoft.site">Harold Hernandez</a>';
$LINK_MORONANET = '<a target="_blank" href="https://moronanet.com">Moronanet</a>';
$LINK_IDEASOFT = '<a target="_blank" href="https://ideasoft.site">Ideasoft</a>';
$LINK_POLITICA_PRIVACIDAD = '<a target="_blank" href="' . $DATA['http_domain'] . 'politica-privacidad/">Política de Privacidad</a>';
?>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="terminos">
            <div class="container">

                <h1>Términos y condiciones de uso de <?= $_ENV['APP_NAME'] ?></h1>
                <p class="out">Bienvenido a la aplicación "<?= $_ENV['APP_NAME'] ?>". Esta aplicación fue desarrollada por <?= $LINK_HAROLD ?> para <?= $LINK_MORONANET ?>, una empresa ISP proveedora de internet que ofrece servicios de conexión a internet a sus clientes. La aplicación facilita a los clientes de <?= $LINK_MORONANET ?> la consulta de ciertos parámetros, como el contrato de servicio, la consulta de servicios y sus estados, el ancho de banda, la consulta de facturas, la consulta de deuda, la consulta de tickets y sus estados, la creación de tickets de revisión y la consulta de datos personales.</p>
                <p class="out">Para utilizar nuestra aplicación, es necesario que leas y aceptes los siguientes términos y condiciones de uso. Al registrarte en nuestra aplicación, ingresarás tus datos personales fidedignos y definirás una contraseña.</p>

                <ol>
                    <li>
                        <h2>Propiedad intelectual</h2>
                        <p>La propiedad intelectual de la aplicación "<?= $_ENV['APP_NAME'] ?>" es de <?= $LINK_HAROLD ?>, el desarrollador de la aplicación. Este producto fue diseñado exclusivamente para <?= $LINK_MORONANET ?>, y la empresa no se hace responsable de los daños y perjuicios que pueda ocasionar la empresa <?= $LINK_IDEASOFT ?> o el desarrollador <?= $LINK_HAROLD ?> por una copia no autorizada del código fuente de la aplicación. Por lo tanto, se entiende que tanto <?= $LINK_IDEASOFT ?> como <?= $LINK_HAROLD ?> son 100% responsables del desarrollo y soporte de la aplicación, y la misma les pertenece. <?= $LINK_MORONANET ?> es el único propietario de la compilación de la aplicación que <?= $LINK_IDEASOFT ?> y <?= $LINK_HAROLD ?> crearon para solventar ciertas necesidades en <?= $LINK_MORONANET ?>.</p>
                    </li>
                    <li>
                        <h2>Uso de la aplicación</h2>
                        <p>Al usar la aplicación deberia considerar lo siguiente:</p>
                        <ul>
                            <li>
                                <p>La aplicación "<?= $_ENV['APP_NAME'] ?>" está destinada únicamente a los clientes de la empresa proveedora de internet "<?= $LINK_MORONANET ?>". Los clientes que no tienen credenciales que les permitan ingresar a la aplicación no podrán hacer uso de ella. Si una persona externa logra obtener credenciales de otra persona e ingresa a la aplicación, será sancionada por la entidad reguladora de la seguridad informática de Ecuador. Es importante destacar que está prohibido que un cliente haga solicitudes de tickets innecesarias o que en caso de solicitar una revisión en la que claramente fue responsable del daño no quiera asumir los gastos de la revisión y la reparación.</p>
                            </li>
                            <li>
                                <p>La aplicación no está autorizada para pedir datos personales de las personas que la utilicen. Los únicos datos que recaudará serán estrictamente de revisiones o tickets para brindar ese tipo de servicio de parte de <?= $LINK_MORONANET ?>. Toda esa información recaudada no la maneja la aplicación, sino el proveedor de servidor integrado Mikrowisp, donde la aplicación accede mediante una API.</p>
                            </li>
                            <li>
                                <p>La aplicación no tiene ningún costo de descarga ni de uso en instancias de Google Play Store, siempre y cuando esté subida a la cuenta de <?= $LINK_MORONANET ?>, que es la encargada oficialmente de publicar esta aplicación. En caso de observarse la misma aplicación en otra cuenta y con beneficios económicos, debe denunciarse ante <?= $LINK_MORONANET ?>, <?= $LINK_IDEASOFT ?> o <?= $LINK_HAROLD ?>.</p>
                            </li>
                        </ul>
                    </li>
                    <p class="out">Si consideramos que un usuario ha realizado un uso indebido de la plataforma, podemos tomar una o varias de las siguientes acciones:</p>
                    <ul>
                        <li>
                            <p>Advertir al usuario que ha infringido nuestros términos y condiciones.</p>
                        </li>
                        <li>
                            <p>Limitar, suspender o eliminar el acceso a ciertas o todas las funcionalidades de la app.</p>
                        </li>
                        <li>
                            <p>Limitar, suspender o eliminar la cuenta del usuario.</p>
                        </li>
                        <li>
                            <p>Informar de la conducta del usuario a las autoridades competentes.</p>
                        </li>
                    </ul>
                    <li>
                        <h2>Uso de la aplicación y responsabilidades de los usuarios</h2>
                        <p>El uso de la aplicación "<?= $_ENV['APP_NAME'] ?>" está permitido a los clientes de la empresa proveedora de internet "<?= $LINK_MORONANET ?>" y se prohíbe la solicitud de tickets innecesarios o la negativa a asumir los gastos de la revisión o reparación en caso de ser el responsable del daño. Los usuarios deben hacer un buen uso del módulo de tickets y evitar que la empresa "<?= $LINK_MORONANET ?>" transfiera personal innecesariamente.</p>
                    </li>
                    <li>
                        <h2>Ley aplicable y jurisdicción</h2>
                        <p>Los presentes Términos y Condiciones se regirán e interpretarán de acuerdo con las leyes de Ecuador, y cualquier controversia que surja de ellos o en relación con ellos se someterá a la jurisdicción exclusiva de los tribunales de Macas.</p>
                    </li>
                    <li>
                        <h2>Modificación de los términos y condiciones</h2>
                        <p>La empresa "<?= $LINK_MORONANET ?>" se reserva el derecho de modificar en cualquier momento los términos y condiciones de uso sin previo aviso. Las modificaciones serán efectivas desde el momento de su publicación en la aplicación y se notificará a los usuarios de la misma. El uso continuado de la aplicación y los servicios ofrecidos en ella después de la publicación de los términos y condiciones modificados implicará la aceptación de los mismos.</p>
                    </li>
                    <li>
                        <h2>Conclusión</h2>
                        <p>Es importante que los usuarios de la aplicación "<?= $_ENV['APP_NAME'] ?>" entiendan y acepten los términos y condiciones de uso antes de utilizarla. La empresa proveedora de internet "<?= $LINK_MORONANET ?>" se deslinda de cualquier responsabilidad y los usuarios son los únicos responsables por cualquier daño o perjuicio que puedan causar al utilizar la aplicación.</p>
                    </li>
                    <p class="out">Al aceptar estos Términos y Condiciones, el usuario reconoce que ha leído, entendido y aceptado todas las disposiciones contenidas en ellos. Si el usuario no está de acuerdo con alguno de los términos, deberá abstenerse de utilizar el sitio web y los servicios ofrecidos en él.</p>
                    <li>
                        <h2>Contacto</h2>
                        <p>Si el usuario tiene alguna duda o consulta sobre estos Términos y Condiciones, puede ponerse en contacto con la empresa a través de nuestros enlaces:</p>
                        <ul>
                            <li><?= $LINK_MORONANET ?></li>
                            <li><?= $LINK_HAROLD ?></li>
                            <li><?= $LINK_IDEASOFT ?></li>
                        </ul>
                    </li>
                    <p class="out">Al aceptar estos Términos y Condiciones, el usuario también acepta la <?= $LINK_POLITICA_PRIVACIDAD ?> de la empresa, que se encuentran disponibles en este sitio web y regulan la recopilación, uso y protección de la información personal del usuario.</p>
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