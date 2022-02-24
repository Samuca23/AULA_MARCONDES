<?php

class tr{
     private $td;

    public function __construct($td)
    {
        $this->td = $td;
    }
    
    public function __toString()
    {
        $retorno = "<tr>\n";
        $retorno .= $this->td;
        $retorno .= "</tr>\n";

        return $retorno;
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