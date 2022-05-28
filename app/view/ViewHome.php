<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewHome extends ViewPadrao
{
    static function getHtmlCardProduto(array $a){
        
        $sHtml = "";
        $img = 'Users\e_a_d\Downloads\Logo_Invertido-removebg-preview.png';

        foreach ($a as $x){
            $sHtml .= '
                <div class="col-sm-6">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" height="200" src="' .$x["pdimagem"]. '">
                        <div class="card-body">
                            <h4 class="card-title">' .$x["pdnome"]. '</h4>
                            <p class="card-text">' .$x["pddescricao"]. '</p>
                            <h5 class="card-title"> R$'.$x["pdpreco"]. '</h5>
                        </div>
                    </div>
                </div>';
        }    
               return $sHtml;
    }
}
