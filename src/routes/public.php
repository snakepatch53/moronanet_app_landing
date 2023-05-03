<?php
$_TEMPLATE_PUBLIC_PATH = './src/templates/public.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PUBLIC_PATH, $_ENV['HTTP_DOMAIN']);


/**
 * ? El error a quedado solucionado
 */
// HOME
$radapter->getHTML('/', 'home');
$radapter->getHTML('/home', 'home');
$radapter->getHTML('/inicio', 'home');
$radapter->getHTML('/index.php', 'home');
