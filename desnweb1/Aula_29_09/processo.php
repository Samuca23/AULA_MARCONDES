<?php

const VALOR_FIXO = 100;

    $iLinha = isset($_POST['linha']) ? $_POST['linha'] : $_GET['linha'];   
    $iColuna = isset ($_POST['coluna']) ? $_POST['coluna'] : $_GET['coluna'];
    $iQuntPorPagina = isset($_POST['qnt_por_pagina']) ? $_POST['qnt_por_pagina'] : $_GET['qnt_por_pagina'];
        
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
        echo '</td>';
        for($j = 0; $j < $iColuna; $j++) {
            echo '<td>';
            echo $aVetor[$i][$j];
            echo '</td>';
        }      
    echo '</tr>';  
    } 
 
          
    echo '</table>';
var_dump((VALOR_FIXO/($iColuna * $iLinha)));
    //links
    for ($i = 1; $i <= (VALOR_FIXO/($iColuna * $iLinha)); $i++) {
        echo "<a href='?qnt_por_pagina={$i}&coluna={$iColuna}&linha={$iLinha}'>{$i}</a> ";
    }

?>