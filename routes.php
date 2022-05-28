<?php

/**
 * Rederiza o conte�do da p�gina solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
        case 'adm':
            return (new App\Controller\ControllerAdm)->render();
        case 'adicionar':
            return (new App\Controller\ControllerAdd)->render();
        case 'log':
            return (new App\Controller\ControllerLog)->render();
        case 'cad':
            return (new App\Controller\ControllerCad)->render();
        case 'logCar':
            return (new App\Controller\ControllerLogCar)->render();
        case 'buyCar':
            return (new App\Controller\ControllerBuyCar)->render();
    }

    return 'P�gina n�o encontrada!';
}
