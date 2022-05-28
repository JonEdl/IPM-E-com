<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewLogCar;
use App\Db\Connection;
use App\Model\ModelCad;

class ControllerLogCar extends ControllerPadrao
{
    function processPage(){

        $sTitle = 'Insira seu Login';
        
        $sContent = ViewLogCar::render([
    
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    function processVerificarLogCar(){

        $oModelLogin = new modelCad;

        $a = $oModelLogin->getAll();

        $sNomeLog = $_POST['nome'];
        $sSenhaLog = $_POST['senha'];
        $sTip = '1';
        $sCont = '';
 
        if(empty($sNomeLog) || empty($sSenhaLog)){
            return '<div class="alert alert-danger" role="alert">
                        Estouro 1
                    </div>';
        } else {
            foreach ($a as $x) {

                if($sNomeLog == $x["lgusuario"] && $sSenhaLog == $x["lgsenha"] && $sTip == $x["lgtipo"]){
                   return header('Location: index.php?pg=buyCar');
                } else {
                    $sCont = $x["lgid"];
                }
            }
            if($sCont == $x["lgid"]){
                return header('Location: index.php?pg=logCar');
            }
        }
    }
}


