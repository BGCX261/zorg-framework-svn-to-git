<?php
class Zorg_Html_Script extends Zorg_Html_Element
{
    protected $_charset;
    protected $_defer;
    protected $_event;
    protected $_for;
    protected $_language;
    protected $_type;
    protected $_src;

    function __construct($_charset = NULL, $_for = NULL, $_language = NULL, $_type = NULL, $_src = NULL) {
        $this->setTag('script');
        $this->_charset = $_charset;
        $this->_defer = $_defer;
        $this->_event = $_event;
        $this->_for = $_for;
        $this->_language = $_language;
        $this->_type = $_type;
        $this->_src = $_src;
    }

    public function getCharset() {
        return $this->_charset;
    }

    public function setCharset($_charset) {
        $this->_charset = $_charset;
    }
    
    public function getDefer() {
        return $this->_defer;
    }

    public function setDefer($_defer) {
        $this->_defer = $_defer;
    }

    public function getEvent() {
        return $this->_event;
    }

    public function setEvent($_event) {
        $this->_event = $_event;
    }

    public function getFor() {
        return $this->_for;
    }

    public function setFor($_for) {
        $this->_for = $_for;
    }

    public function getLanguage() {
        return $this->_language;
    }

    public function setLanguage($_language) {
        $this->_language = $_language;
    }

    public function getType() {
        return $this->_type;
    }

    public function setType($_type) {
        $this->_type = $_type;
    }

    public function getSrc() {
        return $this->_src;
    }

    public function setSrc($_src) {
        $this->_src = $_src;
    }
}
?>
