<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewAdd;
use App\Db\Connection;
use App\Model\ModelAdm;

class ControllerAdd extends ControllerPadrao
{
    function processPage(){
        
        $sTitle = 'Produtos';
        
        $sContent = ViewAdd::render([
    
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    function processAdicionar(){
        $sNomeProduto = $_POST['nome'];
        $sValorProduto = $_POST['valor'];
        $sDescricaoProduto = $_POST['descricao'];

        $oModelAdd = new ModelAdm;  
        $oModelAdd->nome = $sNomeProduto;
        $oModelAdd->valor = $sValorProduto;
        $oModelAdd->descricao = $sDescricaoProduto;

        $oModelAdd->insereProduto();

        return $this->processPage();
    }
}

