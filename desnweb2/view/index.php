<?php
require_once('../model/doctype.class.php');
require_once('../model/head.class.php');
require_once('../model/html.class.php');
require_once('../model/body.class.php');
require_once('../model/meta.class.php');
require_once('../model/title.class.php');
require_once('../model/table.class.php');
// require_once('tr.class.php');
// require_once('td.class.php');

$aLinhas = [

     ['samuel', '10', 'm']
];

$oDoctype = new doctype();
$oHead = new head();
$oHead->setMeta([new meta("UTF-8"), new meta(null, "X-UA-Compatible", "IE=edge"), new meta(null, null, "width=device-width, initial-scale=1.0", "viewport")]);
$oHead->setTitle(new title());
$oBody = new body();
$oBody->setDado(new Table(['Nome', 'Idade', 'Sexo'], $aLinhas));
$oHtml = new html("pt-BR", $oHead, $oBody);






echo $oDoctype;
echo $oHtml;