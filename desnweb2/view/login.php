<?php
require_once('../model/input.class.php');
require_once('../model/form.class.php');
class ViewManutencaoLogin {

    public function __construct()
    {
        $this->validaLogin();
    }
     public function __toString()
     {
         $retorno = new form('POST', '', [new input('text', 'campo', '', 'login'), new input('password', 'campo', '', 'senha'), new input('submit', 'btnbtn-danger', 'Login', 'logar')]);
         return $retorno;
     }

     protected function validaLogin() {
        if (isset($_POST['logar'])) {
            if (($_POST['login'] == 'admin') && ($_POST['senha'] == 'admin')) {
                echo "<h1>LOGADOOOO</h1>";
            }
        }
     }
}