<?php


class meta{
    private $charset;
    private $http_equiv;
    private $content;
    private $name;

    public function __construct( $charset = null, $http_equiv = null, $content = null, $name = null)
    {
        $this->charset = $charset;
        $this->http_equiv = $http_equiv;
        $this->content = $content;
        $this->name = $name;
    }

    function __toString()
    {
        $oMeta = '';
        $oMeta .= "<meta ";
        $oMeta .= !!$this->getCharset() ? "charset=\"" . $this->getCharset() . "\" " : '';
        $oMeta .= !!$this->getHttpEquiv() ? " http-equiv=\"" . $this->getHttpEquiv() . "\" "  : '';
        $oMeta .= !!$this->getName() ? "name=\"" . $this->getName() . "\" " : '';
        $oMeta .= !!$this->getContent() ? "content=\"" . $this->getContent() . "\" " : '';
        $oMeta .= ">";

        return $oMeta;
    }

    /**
     * Get the value of charset
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Set the value of charset
     *
     * @return  self
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;

        return $this;
    }

    /**
     * Get the value of http_equiv
     */
    public function getHttpEquiv()
    {
        return $this->http_equiv;
    }

    /**
     * Set the value of http_equiv
     *
     * @return  self
     */
    public function setHttpEquiv($http_equiv)
    {
        $this->http_equiv = $http_equiv;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

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