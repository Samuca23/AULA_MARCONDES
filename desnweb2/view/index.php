<?php
require_once('../model/doctype.class.php');
require_once('../model/head.class.php');
require_once('../model/html.class.php');
require_once('../model/body.class.php');
require_once('../model/meta.class.php');
require_once('../model/title.class.php');
require_once('../model/table.class.php');
require_once('../model/conexao.class.php');

$oConexao = new conexaoBanco('localhost', '5432', 'sistema_gado', 'postgres', '2304');
$aLinhas = [consultaGado($oConexao)];

$oDoctype = new doctype();
$oHead = new head();
$oHead->setMeta([new meta("UTF-8"), new meta(null, "X-UA-Compatible", "IE=edge"), new meta(null, null, "width=device-width, initial-scale=1.0", "viewport")]);
$oHead->setTitle(new title());
$oBody = new body();
$oBody->setDado(new Table(['Código Bovino', 'Código Raça', 'Nascimento', 'Nome'], $aLinhas));
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
echo $oHtml;