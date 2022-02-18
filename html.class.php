<?php

class html{
    private $lang;
    private $head;
    private $body;
    
    public function __construct($lang, $head, $body)
    {
        $this->lang = $lang;
        $this->head = $head;
        $this->body = $body;
    }

    function __toString()
    {
        return "<html lang=" . $this->lang . "> " . $this->getHead() . $this->getBody() . "</html>";
    }

    /**
     * Get the value of lang
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set the value of lang
     *
     * @return  self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get the value of head
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Set the value of head
     *
     * @return  self
     */
    public function setHead($head)
    {
        $this->head = $head;

        return $this;
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
}
