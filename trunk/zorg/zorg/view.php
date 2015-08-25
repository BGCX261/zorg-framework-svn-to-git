<?php
class Zorg_View {
    private $_controller;
    private $_action;
    private $_script;
    private $_stylesheet;

    public function  __construct($controller,$action) {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_script = array();
        $this->_stylesheet = array();
    }

    public function addScript(Zorg_Html_Script $script){
        array_push($this->_script,$script);
    }

    public function addStylesheet(Zorg_Html_Stylesheet $stylesheet){
        array_push($this->_script, $stylesheet);
    }

    public function renderScript(){
        $return = NULL;
        foreach ($this->_script as $script){
            $return .= $script->render();
        }
        return $return;
    }

    public function renderStylesheet(){
        $return = NULL;
        foreach ($this->_stylesheet as $style){
            $return .= $style->render();
        }
        return $return;
    }

    public function render($file = NULL, $data = array()){
        extract($data);
        if ($file === NULL){
            $viewFile = VIEW_PATH.DIRECTORY_SEPARATOR.$this->_controller.DIRECTORY_SEPARATOR.$this->_action.'.php';
        } else {
            $viewFile = VIEW_PATH.DIRECTORY_SEPARATOR.$this->_controller.DIRECTORY_SEPARATOR.$file.'.php';
        }
        ob_start();
        require ($viewFile);
        $body = ob_get_contents();
        ob_end_clean();
        return $body;
    }
}
?>
