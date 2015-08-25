<?php
class Zorg_Layout extends Zorg_Singleton {
    private $_default;
    private $_defaultExtension;
    private $_path;
    private $_layout;

    protected function  __construct($default = 'index', $defaultExtension = '.php', $path = LAYOUT_PATH) {
        $this->_default = $default;
        $this->_defaultExtension = $defaultExtension;
        $this->_layout = $this->_default;
    }

    public function getDefault() {
        return $this->_default;
    }

    public function setDefault($_default) {
        $this->_default = $_default;
    }

    public function getDefaultExtension() {
        return $this->_defaultExtension;
    }

    public function setDefaultExtension($_defaultExtension) {
        $this->_defaultExtension = $_defaultExtension;
    }

    public function getPath() {
        return $this->_path;
    }

    public function setPath($_path) {
        $this->_path = $_path;
    }

    public function getLayout() {
        return $this->_layout;
    }

    public function setLayout($_layout) {
        $this->_layout = $_layout;
    }

    public function getLayoutPath(){
        return LAYOUT_PATH.DIRECTORY_SEPARATOR.$this->_layout.$this->_defaultExtension;
    }

    public function render(){
        require (LAYOUT_PATH.DIRECTORY_SEPARATOR.$this->_layout.$this->_defaultExtension);
    }
    
}
?>