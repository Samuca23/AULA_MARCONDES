<?php

class input
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        $retorno = "<input type=" . $this->getType() . ">";
        return $retorno;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}