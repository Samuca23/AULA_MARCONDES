<?php

function imprime($aArray) {
    echo '<table style="border-collapse: collapse" border="3px solid black">';
    for ($i=1; $i < 10; $i++) {
        echo '<tr>';
        echo '<td>'; 
        echo  $i;
        echo '</td>'; 
        echo '<td>'; 
        echo ' ' . $aArray[$i];
        echo '</td>'; 
        echo '</tr>'; 
    }
    echo '</table>';
}

function criaTable(&$aArray) {
    for ($i=1; $i < 1000; $i++) { 
       $aArray[] =  rand(1, 100);
    }
}
$aVetor = [];
criaTable($aVetor);
imprime($aVetor);
?>