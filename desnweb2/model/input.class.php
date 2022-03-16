<?php

class input
{
    private $type;

    private $class;

    private $value;

    private $name;
    public function __construct($type, $class = 'Sem Classe', $value = '', $name= '')
    {
        $this->type = $type;
        $this->class = $class;
        $this->value = $value;
        $this->name = $name;
    }

    public function __toString()
    {
        if($this->getValue() != ''){
            
            $retorno = "<input type=" . $this->getType() . " class= " .$this->getClass() . " value=" . $this->getValue() . " name=" . $this->getName() . ">";
        }else{

            $retorno = "<input type=" . $this->getType() . " class= " .$this->getClass() . " name=" . $this->getName() . ">";
        }
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

    /**
     * Get the value of class
     */ 
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */ 
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}