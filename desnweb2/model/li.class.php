<?php
class li {
    private $ClassCss;
    private $conteudo;

    public function __construct($ClassCss, $conteudo){
        $this->ClassCss = $ClassCss;
        $this->conteudo = $conteudo;
    }

    function __toString(){
        return "<li class=\"{$this->ClassCss}\">{$this->conteudo}</li>";
    }
}