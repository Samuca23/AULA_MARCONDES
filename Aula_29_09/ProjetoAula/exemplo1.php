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
    print_r($result);


?>