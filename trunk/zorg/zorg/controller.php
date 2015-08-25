<?php
class Zorg_Controller {
    /**
     * @var Zorg_Request
     */
    private $_request;
    /**
     * @var Zorg_Response
     */
    private $_response;
    /**
     * @var Zorg_View
     */
    protected $_view;

    public function  __construct(Zorg_Request $request) {
        $this->_request = $request;
        $this->_response = new Zorg_Response();
        $this->_view = new Zorg_View($this->_request->getController(),$this->_request->getAction());
    }

    public function getRequest() {
        return $this->_request;
    }

    public function setRequest($_request) {
        $this->_request = $_request;
    }

    public function getResponse() {
        return $this->_response;
    }

    public function setResponse($_response) {
        $this->_response = $_response;
    }

    public function render($file = NULL, $vars = array(), $purify = false){
        $this->_response->setScript($this->_view->renderScript());
        if (!$purify){
            $this->_response->setContent($this->_view->render($file, $vars));
        } else {
            $this->_response->setContent(ZorgExt_Purifier::purify($this->_view->render($file, $vars)));
        }
        $this->_response->render();
    }

}
?>
