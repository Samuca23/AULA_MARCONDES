<?php

const VALOR_FIXO = 1000;

    $iLinha = isset($_POST['linha']) ? $_POST['linha'] : null;   
    $iColuna = isset ($_POST['coluna']) ? $_POST['coluna'] : null;
    $iQuntPorPagina = isset($_POST['qnt_por_pagina']) ? $_POST['qnt_por_pagina'] : null;
        
    $aVetor = [];
var_dump($iLinha);
var_dump($iColuna);
var_dump($iQuntPorPagina);
    for ($i = 0; $i < VALOR_FIXO; $i++) {
        for($j = 0; $j < $iColuna; $j++) {
            $aVetor[$i][$j] = rand(1, 1000);
        }
    }



    echo '<table border="1">';
     for ($i = (($iQuntPorPagina * $iLinha) - $iLinha); $i < $iLinha * $iQuntPorPagina; $i++) {
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
        for($j = 0; $j < $iColuna; $j++) {
            echo '<td>';
            echo $aVetor[$i][$j];
            echo '</td>';
        }      
    echo '</tr>';  
    } 
 
          
    echo '</table>';

    //links
    for ($i = 1; $i <= VALOR_FIXO/$iLinha; $i++) {
        echo "<a href='?qnt_por_pagina={$i}&coluna={$iColuna}&linha={$iLinha}'>{$i}</a> ";
    }
?>