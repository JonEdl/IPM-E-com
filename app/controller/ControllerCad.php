<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewCad;
use App\Db\Connection;
use App\Model\ModelCad;

class ControllerCad extends ControllerPadrao
{
    function processPage(){

        $sTitle = 'Cadastro';

        $sContent = ViewCad::render([
    
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    
    function processLogin(){

        $sNomeLogin = $_POST['nome'];
        $sSenhaLogin = $_POST['senha'];
        $sTipoLogin_1 = $_POST['usuario'];
        $sTipoLogin_2 = $_POST['adm'];

        $sTip = '';

        if($sTipoLogin_1 == true and $sTipoLogin_2 == false){
            $sTip = "1";
        } elseif ($sTipoLogin_1 == false and $sTipoLogin_2 == true) {
            $sTip = "2";
        } else {
           echo '<div class="alert alert-danger" role="alert">
                Só pode selecionar um campo
                </div>';
        } 

        $oModelCad = new ModelCad;  
        $oModelCad->nome = $sNomeLogin;
        $oModelCad->senha = $sSenhaLogin;
        $oModelCad->tipo = $sTip;

        $oModelCad->insereLogin();

        return $this->processPage();

        isset($sTipoLogin_1);
        isset($sTipoLogin_2);       
    }
}

