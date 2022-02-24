<?php

class table{
    private $tr;

    public function __construct($tr)
    {
        $this->tr = $tr;
    }
    public function __toString()
    {
        $retorno = "<table>\n";
        $retorno .= $this->tr;
        $retorno .= "</table>\n";

        return $retorno;
        
    }


    /**
     * Get the value of tr
     */
    public function getTr()
    {
        return $this->tr;
    }

    /**
     * Set the value of tr
     *
     * @return  self
     */
    public function setTr($tr)
    {
        $this->tr = $tr;

        return $this;
    }

    /**
     * Get the value of td
     */
    public function getTd()
    {
        return $this->td;
    }

    /**
     * Set the value of td
     *
     * @return  self
     */
    public function setTd($td)
    {
        $this->td = $td;

        return $this;
    }
}