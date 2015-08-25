<?php
class Zorg_Request {
    private $_url;
    private $_params;
    private $_controller;
    private $_action;
    
    public function  __construct() {
        $this->_url = $this->_getCurrentUrl();
    }

    public function setUrl($url){
        $this->_url = $url;
    }

    public function getUrl(){
        return $this->_url;
    }

    public function getParams(){
        return $this->_params;
    }

    public function setParams($params){
        $this->_params = $params;
    }

    public function getPost(){
        return $this->_params['post'];
    }

    public function getGet(){
        return $this->_params['get'];
    }

    private function _getCurrentUrl() {
        return 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }

    public function getController() {
        return $this->_controller;
    }

    public function setController($_controller) {
        $this->_controller = $_controller;
    }

    public function getAction() {
        return $this->_action;
    }

    public function setAction($_action) {
        $this->_action = $_action;
    }

}
?>
