<?php
        $iLinha = isset($_POST['linha']) ? $_POST['linha'] : 'ERRO';   
        $iColuna = isset ($_POST['coluna']) ? $_POST['coluna'] : 'ERRO';
        for ($i = 0; $i < $iLinha; $i++) {
            for($j = 0; $j <= $iColuna; $j++) {
                $aArray[$i][$j] = rand(0, 100);
            }
        }


        echo '<table border="1">';
            $valor = $_POST['qnt_por_pagina'] * 10;
            $fim    = ($valor == 10) ? $fim    = 9 : $fim = $valor - 1;
            $inicio = ($valor == 10) ? $inicio = 0 : $fim - 9;

            for ($i = $inicio; $i <= $fim; $i++) {
            echo '<tr>';
                echo "<td>{$i}</td>";
                for($j = 0; $j <= $iColuna; $j++) {
                    echo '<td>';
                    echo $aArray[$i][$j]. ' ';
                    echo '</td>';
                }      
            echo '</tr>';  
            }     
          
        echo '</table>';

        //links
        for ($i = 1; $i <= ($iLinha/10); $i++) {
            echo "<a href=\"?qnt_por_pagina={$i}\">{$i}</a> ";
        }
    ?>