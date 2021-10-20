<?php

session_start();
if (isset($_POST['salvar'])) {
    $_SESSION['valor'] =  $_POST['valor'];
    echo "Alterado com sucesso";
}
?>

<a href="script2.php">VER</a>
<hr>
<form method="post">
    <input type="text" name="valor">
    <input type="submit" name="salvar">
</form>