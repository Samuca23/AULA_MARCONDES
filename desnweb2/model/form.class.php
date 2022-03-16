<?php

class form{
    
    private $method;

    private $action;

    private $conteudo = [];

    public function __construct($method, $action, $conteudo)
    {
        $this->method = $method;
        $this->action = $action;
        $this->conteudo = $conteudo;
    }
    public function __toString()
    {
        $retorno = "<form method=" . $this->getMethod() . " action=" . $this->getAction() . ">";
        foreach($this->getConteudo() as $oConteudo) {
            $retorno .= $oConteudo;
        }
        $retorno .= "</form>";

        return $retorno;
    }

    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
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
}