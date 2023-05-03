<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);


/**
 * ? El error a quedado solucionado
 */
// HOME
$radapter->getHTML('/index.php', 'home', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $slider = (new SliderDao($DATA['mysqlAdapter']))->select();
    $basic_plan_price = (new PlanDao($DATA['mysqlAdapter']))->selectBasicPlan_price();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
        'slider' => $slider,
        'basic_plan_price' => $basic_plan_price
    ];
});

$radapter->getHTML('/', 'home', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $slider = (new SliderDao($DATA['mysqlAdapter']))->select();
    $basic_plan_price = (new PlanDao($DATA['mysqlAdapter']))->selectBasicPlan_price();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
        'slider' => $slider,
        'basic_plan_price' => $basic_plan_price
    ];
});

// SERVICIOS
$radapter->getHTML('/servicios', 'servicios', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
    ];
});

// SOBRE NOSOTROS
$radapter->getHTML('/nosotros', 'nosotros', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
    ];
});

// ATENCION AL CLIENTE
$radapter->getHTML('/clientes', 'clientes', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $restrcciones = (new RestriccionDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
        'restricciones' => $restrcciones,
    ];
});

// PREGUNTAS
$radapter->getHTML('/preguntas', 'preguntas', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    $preguntas = (new PreguntaDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
        'preguntas' => $preguntas,
    ];
});

// CONTACTOS
$radapter->getHTML('/contactos', 'contactos', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
    ];
});

// 404
$radapter->set404('404', function ($DATA) {
    $info = (new InfoDao($DATA['mysqlAdapter']))->select();
    $planes = (new PlanDao($DATA['mysqlAdapter']))->select();
    $links = (new LinkDao($DATA['mysqlAdapter']))->select();
    $social = (new SocialDao($DATA['mysqlAdapter']))->select();
    return [
        'info' => $info,
        'planes' => $planes,
        'links' => $links,
        'social' => $social,
    ];
});
