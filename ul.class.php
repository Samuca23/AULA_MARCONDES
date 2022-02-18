<?php

require_once('li.class.php');

class ul {
    
    private $ClassCss;
    private $itens = [];

    public function __construct($ClassCss, $itens)
    {
        $this->ClassCss = $ClassCss;
        $this->itens = $itens;
    }

    function addItem($item){
        $this->itens = array_merge($this->item, $item);
    }

    function __toString()
    {
        $retorno = "<ul>";
        foreach($this->itens as $item){
            $retorno .=$item;
        }
        $retorno .="</ul>";
        return $retorno;
    }
    
}
$teste = [new li("", "Samuel"), new li("", "David")];

$ul = new ul("", $teste);
echo $ul;