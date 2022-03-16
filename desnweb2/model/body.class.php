<?php

class body{

    private $body;
    private $dado = [];

    function __toString()
    {
        $aDado = $this->getDado();
        $retorno =  "<body>\n";
        foreach($aDado as $oDado){
            $retorno .= $oDado;
        }
        $retorno .="</body>\n";

        return $retorno;
    }

    /**
     * Get the value of body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of dado
     */
    public function getDado()
    {
        return $this->dado;
    }

    /**
     * Set the value of dado
     *
     * @return  self
     */
    public function setDado($dado)
    {
        $this->dado = $dado;

        return $this;
    }
}