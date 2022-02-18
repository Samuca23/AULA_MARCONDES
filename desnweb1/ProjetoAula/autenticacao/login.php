<?php
if (isset($_POST['logar'])) {
    if (($_POST['login'] == 'admin') && ($_POST['senha'] == 'admin')) {
        $_SESSION['usuario'] = 'Samuel';
        echo '<a href="index.php">Acessar</a>';
    } else {
        echo 'Login ou senha incorreta!';
    }
}

?>

<form method="POST">
    <input type="text" name="login" placeholder="Login">
    <br>
    <input type="password" name="senha" placeholder="Senha">
    <br>
    <input type="submit" name="logar">

</form>