<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewLog;
use App\Db\Connection;
use App\Model\ModelCad;

class ControllerLog extends ControllerPadrao
{
    function processPage(){

        $sTitle = 'Insira seu Login';
        
        $sContent = ViewLog::render([
    
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    function processVerificarAdm(){

        $oModelLogin = new modelCad;

        $a = $oModelLogin->getAll();

        $sNomeLog = $_POST['nome'];
        $sSenhaLog = $_POST['senha'];
        $sTip = '2';
        $sCont = '';
 
        if(empty($sNomeLog) || empty($sSenhaLog)){
            return '<div class="alert alert-danger" role="alert">
                        Estouro 1
                    </div>';
        } else {
            foreach ($a as $x) {

                if($sNomeLog == $x["lgusuario"] && $sSenhaLog == $x["lgsenha"] && $sTip == $x["lgtipo"]){
                   return header('Location: index.php?pg=adm&act=adm');
                } else {
                    $sCont = $x["lgid"];
                }
            }
            if($sCont == $x["lgid"]){
                return header('Location: index.php?pg=log');
            }
        }
    }
}


