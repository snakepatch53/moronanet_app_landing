<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
$radapter->getHTML('/services/configuration', 'configuration');

// INFO
$radapter->post('/services/info/select', fn (...$args) => InfoService::select(...$args));
$radapter->post('/services/info/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => InfoService::update(...$args));

// USER
$radapter->post('/services/user/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/services/user/logout', fn () => UserService::logout());
// need to be logged
$radapter->post('/services/user/select', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::select(...$args));
$radapter->post('/services/user/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::insert(...$args));
$radapter->post('/services/user/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::update(...$args));
$radapter->post('/services/user/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::delete(...$args));

// LINKS
$radapter->post('/services/link/select', fn (...$args) => LinkService::select(...$args));
// need to be logged
$radapter->post('/services/link/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => LinkService::insert(...$args));
$radapter->post('/services/link/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => LinkService::update(...$args));
$radapter->post('/services/link/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => LinkService::delete(...$args));

// SLIDER
$radapter->post('/services/slider/select', fn (...$args) => SliderService::select(...$args));
// need to be logged
$radapter->post('/services/slider/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::insert(...$args));
$radapter->post('/services/slider/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::update(...$args));
$radapter->post('/services/slider/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => SliderService::delete(...$args));

// SOCIAL
$radapter->post('/services/social/select', fn (...$args) => SocialService::select(...$args));
// need to be logged
$radapter->post('/services/social/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => SocialService::insert(...$args));
$radapter->post('/services/social/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => SocialService::update(...$args));
$radapter->post('/services/social/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => SocialService::delete(...$args));

// MENSAJES
$radapter->post('/services/mensaje/insert', fn (...$args) => MensajeService::insert(...$args));
// need to be logged
$radapter->post('/services/mensaje/select', fn () => middlewareSessionServicesLogin(), fn (...$args) => MensajeService::select(...$args));
// $radapter->post('/services/mensaje/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => MensajeService::update(...$args));
$radapter->post('/services/mensaje/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => MensajeService::delete(...$args));

// PLANES
$radapter->post('/services/plan/select', fn (...$args) => PlanService::select(...$args));
// need to be logged
$radapter->post('/services/plan/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => PlanService::insert(...$args));
$radapter->post('/services/plan/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => PlanService::update(...$args));
$radapter->post('/services/plan/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => PlanService::delete(...$args));

// PREGUNTAS
$radapter->post('/services/pregunta/select', fn (...$args) => PreguntaService::select(...$args));
// need to be logged
$radapter->post('/services/pregunta/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => PreguntaService::insert(...$args));
$radapter->post('/services/pregunta/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => PreguntaService::update(...$args));
$radapter->post('/services/pregunta/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => PreguntaService::delete(...$args));

// RESTRICCIONES
$radapter->post('/services/restriccion/select', fn (...$args) => RestriccionService::select(...$args));
// need to be logged
$radapter->post('/services/restriccion/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => RestriccionService::insert(...$args));
$radapter->post('/services/restriccion/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => RestriccionService::update(...$args));
$radapter->post('/services/restriccion/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => RestriccionService::delete(...$args));

// REDES SOCIALES
$radapter->post('/services/social/select', fn (...$args) => SocialService::select(...$args));
// need to be logged
$radapter->post('/services/social/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => SocialService::insert(...$args));
$radapter->post('/services/social/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => SocialService::update(...$args));
$radapter->post('/services/social/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => SocialService::delete(...$args));
