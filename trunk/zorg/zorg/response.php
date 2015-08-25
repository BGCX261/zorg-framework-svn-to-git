<?php
class Zorg_Response {
    private $_vars = array();
    private $_content;
    private $_script;
    private $_stylesheet;

    public function  __construct($vars = array(), $content = NULL) {
        $this->_vars = $vars;
        $this->_content = $content;
    }

    public function getVars() {
        return $this->_vars;
    }

    public function setVars($_vars) {
        $this->_vars = $_vars;
    }

    public function getContent() {
        return $this->_content;
    }

    public function setContent($_content) {
        $this->_content = $_content;
    }

    public function getScript() {
        return $this->_script;
    }

    public function setScript($_script) {
        $this->_script = $_script;
    }

    public function getStylesheet() {
        return $this->_stylesheet;
    }

    public function setStylesheet($_stylesheet) {
        $this->_stylesheet = $_stylesheet;
    }

    public function render(){
        ob_start();
        $zorgStylesheet = $this->_stylesheet;
        $zorgScript = $this->_script;
        $zorgContent = $this->_content;
        require (Zorg_Layout::getInstance()->getLayoutPath());
        $content = ob_get_contents();
        ob_end_clean();
        echo $content;
    }

}
?>
