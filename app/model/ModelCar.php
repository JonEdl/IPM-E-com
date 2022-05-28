<?php

namespace App\Model;

use App\Model\ModelPadrao;

class ModelCar extends ModelPadrao
{
    function getTable(){
        
        return 'PUBLIC.tbcarrinho';
        
    }    
}