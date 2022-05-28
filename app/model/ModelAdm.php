<?php

namespace App\Model;

use App\Model\ModelPadrao;

class ModelAdm extends ModelPadrao
{

    public $sNome;
    public $sValor;
    public $sDescricao;

    function getTable(){
        
        return 'PUBLIC.tbprodutos';
        
    }
    function deleteProduto(){
        $iId = $this->id;
        
        return parent::delete([
            'pdid' => $iId
        ]);
    }
    function alteraProduto(){
        
    }

    function insereProduto(){

        $iNome = $this->getBdValue($this->nome);
        $iValor = $this->getBdValue($this->valor);
        $iDescricao = $this->getBdValue($this->descricao);


        return parent::adicionar([
            'pdnome' => $iNome,
            'pdpreco' => $iValor,
            'pddescricao' => $iDescricao
        ]);
    }
}