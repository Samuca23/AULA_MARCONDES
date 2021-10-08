<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=marcondes', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$stmt = $conn->prepare(
    'SELECT cidades.*,
    estados.sigla as estado_sigla,
    estados.nome as estado_nome
    FROM cidades, estados
    WHERE cidades.estado = estados.id');
    $stmt->execute();
    $result = $stmt->fetchAll();

    echo '<table style="border: 1px solid black">';
    echo '<th>Codigo</th>';
    echo '<th>Cidade</th>';
    echo '<th>Id</th>';
    echo '<th>Estado codigo</th>';
    echo '<th>Estado silga</th>';
    echo '<th>Estado nome</th>';
    foreach ($result as $sValor) {    
        echo '<tr>';
        echo '<td style="border: 1px solid black">'. $sValor['codigo'] . '</td>';
        echo '<td style="border: 1px solid black">'. $sValor['nome'] . '</td>';
        echo '<td style="border: 1px solid black">'. $sValor['id'] . '</td>';
        echo '<td style="border: 1px solid black">'. $sValor['estado'] . '</td>';
        echo '<td style="border: 1px solid black">'. $sValor['estado_sigla'] . '</td>';
        echo '<td style="border: 1px solid black">'. $sValor['estado_nome'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

?>