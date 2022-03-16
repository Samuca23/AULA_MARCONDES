<?php
require_once('../model/input.class.php');
require_once('../model/form.class.php');
class ViewManutencaoLogin {
     public function __toString()
     {
         $retorno = new form('POST', '', [new input('text'), new input('password')]);
         return $retorno;
     }
}