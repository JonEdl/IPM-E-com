<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Db\Connection;
use App\Model\ModelAdm;

class ControllerHome extends ControllerPadrao
{
  
    protected function processPage(){

        $oCardProduto = new ModelAdm;

        $a = $oCardProduto->getAll();


        $sTitle = 'Produtos';

        $sContent = ViewHome::render([

            'cardProduto' => ViewHome::getHtmlCardProduto($a)
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
