<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewBuyCar;
use App\Db\Connection;
use App\Model\ModelAdm;
use App\Model\ModelCar;

class ControllerBuyCar extends ControllerPadrao
{
  
    protected function processPage(){

        $oCardProduto = new ModelAdm;

        $a = $oCardProduto->getAll();


        $sTitle = 'Produtos';

        $sContent = ViewBuyCar::render([

            'carProduto' => ViewBuyCar::getHtmlCar($a)
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }

    function processAdicionar(){
        $iIdProduto = $_GET['proid'] ??= '';

        $oModelAdd->mostraCar();

        return $this->processPage();
    }
}
