<?php

class head{

    private $meta = [];
    private $title;

    function __toString()
    {
        $retorno = "<head>";
        foreach($this->getMeta() as $meta){
            $retorno .= $meta;
        }
        $retorno .= $this->getTitle();
        $retorno .=  "</head>";
        return $retorno;
    }


    /**
     * Get the value of meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set the value of meta
     *
     * @return  self
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
