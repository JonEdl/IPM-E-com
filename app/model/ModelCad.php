<?php

namespace App\Model;

use App\Model\ModelPadrao;

class ModelCad extends ModelPadrao
{

    public $sNome;
    public $sSenha;
    public $sTipo;


    function getTable(){
        
        return 'PUBLIC.tblogin';
        
    }
    
    function insereLogin(){

        $iNome = $this->getBdValue($this->nome);
        $iSenha = $this->getBdValue($this->senha);
        $iTipo = $this->getBdValue($this->tipo);


        return parent::adicionar([
            'lgusuario' => $iNome,
            'lgsenha' => $iSenha,
            'lgtipo' => $iTipo
        ]);
    }
}