<?php

class td{
     private $item;

     public function __construct($item)
     {
         $this->item = $item;
     }

     public function __toString()
     {
        $retorno = "<td>";
        $retorno .= $this->item;
        $retorno .= "</td>\n";

        return $retorno;
     }

     /**
      * Get the value of item
      */
     public function getItem()
     {
          return $this->item;
     }

     /**
      * Set the value of item
      *
      * @return  self
      */
     public function setItem($item)
     {
          $this->item = $item;

          return $this;
     }
}