<?php
$aArray = [];
    for ($i = 1; $i <= 30; $i++) {
        $aArray [$i]= rand(1, 100);
    }
    for ($x = 1; $x < count ($aArray); $x++) { 
        echo ' '.$aArray [$x];
    }
var_dump($aArray);

echo '<hr/>';
echo '<h1>MATRIZ DENTRO DE UMA TABLE </h1>';

$iTamanho = rand(10, 30);

echo $iTamanho;
echo '<table style="border-collapse: collapse" border="3px solid black">';
echo '<tr>';
for ($linha = 1; $linha <= $iTamanho; $linha++) {
    for ($coluna = 1; $coluna <= $iTamanho; $coluna++) {             
       $aArrai[$linha][$coluna] = rand(1, 100);
       echo '<td>';
       echo $aArrai[$linha][$coluna];
       echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>