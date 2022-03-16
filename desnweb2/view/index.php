<?php
require_once('../model/doctype.class.php');
require_once('../model/head.class.php');
require_once('../model/html.class.php');
require_once('../model/body.class.php');
require_once('../model/meta.class.php');
require_once('../model/title.class.php');
require_once('../model/table.class.php');
require_once('../model/conexao.class.php');
require_once('../model/input.class.php');
require_once('../model/a.class.php');
require_once('../view/login.php');

$oConexao = new conexaoBanco('localhost', '5432', 'sistema_gado', 'postgres', '2304');
$aLinhas = [consultaGado($oConexao)];

$oDoctype = new doctype();
$oHead = new head();
$oHead->setMeta([new meta("UTF-8"), new meta(null, "X-UA-Compatible", "IE=edge"), new meta(null, null, "width=device-width, initial-scale=1.0", "viewport")]);
$oHead->setTitle(new title());
$oBody = new body();
$oBody->setDado([ new ViewManutencaoLogin()
                //  new Table(['Código Bovino', 'Raça', 'Nascimento', 'Nome', 'Ação'], $aLinhas), 
               ]);
$oHtml = new html("pt-BR", $oHead, $oBody);



function gado($oConexao) {
     $sSql = $oConexao->execute('SELECT * FROM tbanimal');
     return $sSql;
}

function consultaGado($oConexao)
{
    foreach(gado($oConexao) as $aGado){
          return $aGado;
    }
}

echo $oDoctype;
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';
echo $oHtml;