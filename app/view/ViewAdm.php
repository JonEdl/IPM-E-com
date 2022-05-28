<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewAdm extends ViewPadrao
{
    static function getHtmlTabelaProdutos(array $a){

        $sHtml = "<table class='table' >
                    <thead>
                     <tr>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Caminho da Imagem</th>
                        <th>Excluir</th>
                     </tr>
                    <thead>";

        foreach ($a as $x){
            $sHtml .=' 
                <tr>
                    <td>' .$x["pdnome"]. '</td>
                    <td>'  .$x["pdpreco"].  '</td>
                    <td>'  .$x["pddescricao"].  '</td>
                    <td>'  .$x["pdimagem"].  '</td>
                    <td> <a id="excluir" name="excluir" href="index.php?pg=adm&act=delete&proid='.$x["pdid"].'"><input type="button" value="Excluir"></a> </td>
               </tr>';
    }
        return $sHtml;
   }
}