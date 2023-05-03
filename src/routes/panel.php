<?php
$_TEMPLATE_PANEL_PATH = './src/templates/panel.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PANEL_PATH, $_ENV['HTTP_DOMAIN']);

// LOGIN
$radapter->getHTML('/panel/login', 'login', fn () => middlewareSessionLogout(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// HOME
$radapter->getHTML('/panel', 'home', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'links_total' => count((new LinkDao($DATA['mysqlAdapter']))->select()),
        'mensajes_total' => count((new MensajeDao($DATA['mysqlAdapter']))->select()),
        'planes_total' => count((new PlanDao($DATA['mysqlAdapter']))->select()),
        'preguntas_total' => count((new PreguntaDao($DATA['mysqlAdapter']))->select()),
        'restricciones_total' => count((new RestriccionDao($DATA['mysqlAdapter']))->select()),
        'slider_total' => count((new SliderDao($DATA['mysqlAdapter']))->select()),
        'social_total' => count((new SocialDao($DATA['mysqlAdapter']))->select()),
        'user_total' => count((new UserDao($DATA['mysqlAdapter']))->select()),
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// INFO
$radapter->getHTML('/panel/info', 'info', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// LINKS
$radapter->getHTML('/panel/links', 'links', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// MENSAJES
$radapter->getHTML('/panel/mensajes', 'mensajes', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// PLANES
$radapter->getHTML('/panel/planes', 'planes', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// PREGUNTAS
$radapter->getHTML('/panel/preguntas', 'preguntas', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// RESTRICCIONES
$radapter->getHTML('/panel/restricciones', 'restricciones', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// SLIDER
$radapter->getHTML('/panel/slider', 'slider', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// SOCIAL
$radapter->getHTML('/panel/social', 'social', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// USER
$radapter->getHTML('/panel/users', 'users', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});
