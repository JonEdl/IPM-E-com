<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewAdm;
use App\Db\Connection;
use App\Model\ModelAdm;

class ControllerAdm extends ControllerPadrao
{
    function processPage(){
        
        $oModelProduto = new ModelAdm;
        
        $a = $oModelProduto->getAll();
        
        
        $sTitle = 'Administrador';
        
        $sContent = ViewAdm::render([
            'produtoContent' => '<h2>VOCE ESTA LOGADO COM ADMINISTRADOR</h2>',
            'addProduto' => '<a id="inserir" name="inserir" href="index.php?pg=adicionar"><input type="button" value="inserir"></a>',
            'tabelaProduto' => viewAdm::getHtmlTabelaProdutos($a)
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    function processDelete(){
        $iIdProduto = $_GET['proid'] ??= '';
    
        $oModelProduto = new ModelAdm;
        $oModelProduto->id = $iIdProduto;
    
        $oModelProduto->deleteProduto();
    
        return $this->processPage();
    }
}

