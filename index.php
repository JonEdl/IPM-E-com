<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes.php';
require __DIR__ . '/config.php';

$sContent = render(
    $_GET['pg'] ??= 'home' // P�gina padr�o: 'home'
);

echo $sContent;
