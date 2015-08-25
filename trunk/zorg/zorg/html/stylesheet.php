<?php
class Zorg_Html_Stylesheet extends Zorg_Html_Element
{
    protected $_charset;
    protected $_href;
    protected $_media;
    protected $_rel;
    protected $_type;

    function __construct($_rel = 'stylesheet', $_type = 'text/css') {
        $this->setTag('link');
        $this->_charset = $_charset;
        $this->_href = $_href;
        $this->_media = $_media;
        $this->_rel = $_rel;
        $this->_type = $_type;
        $this->_isClosingBracket = true;
    }

    public function getCharset() {
        return $this->_charset;
    }

    public function setCharset($_charset) {
        $this->_charset = $_charset;
    }

    public function getHref() {
        return $this->_href;
    }

    public function setHref($_href) {
        $this->_href = $_href;
    }

    public function getMedia() {
        return $this->_media;
    }

    public function setMedia($_media) {
        $this->_media = $_media;
    }

    public function getRel() {
        return $this->_rel;
    }

    public function setRel($_rel) {
        $this->_rel = $_rel;
    }

    public function getType() {
        return $this->_type;
    }

    public function setType($_type) {
        $this->_type = $_type;
    }

}
?>
