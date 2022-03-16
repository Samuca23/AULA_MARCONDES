<?php

require_once('tr.class.php');
class table{
    private $titulo = [];
    private $conteudo = [];

    public function __construct($titulo, $conteudo)
    {
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
    }
    public function __toString()
    {
        $aConteudo = $this->getConteudo();
        array_unshift($aConteudo, $this->getTitulo());
        $retorno = "<table class='table table-dark'>\n";
        foreach($aConteudo as $aLinha){
            $aTd = [];
            foreach($aLinha as $sConteudo){
                $aTd[] = new Td($sConteudo);
            }
            $oTr = new Tr($aTd);
            $retorno .= $oTr;
        }
        $retorno .= "</table>\n";
        
        return $retorno;
    }

    /**
     * Get the value of conteudo
     */ 
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set the value of conteudo
     *
     * @return  self
     */ 
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }
}

