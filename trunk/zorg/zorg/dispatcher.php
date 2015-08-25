<?php
class Zorg_Dispatcher extends Zorg_Singleton {
    private $_router;

    protected function  __construct() {
        parent::__construct();

        $this->_router = Zorg_Router::getInstance();
    }

    public function dispatch() {
        $request = new Zorg_Request();
        $this->_router->route($request);
        $this->forward($request);
    }

    public function forward(Zorg_Request $request) {
        if (file_exists(APP_PATH.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.$request->getController().'.php')) {
            $class = $request->getController().'_Controller';
            $method = $request->getAction().'Action';
            if (method_exists($class, $method)) {
                $ctrl = new $class($request);
                $ctrl->$method();
            } else {
                throw new Zorg_Dispatcher_Exception('Action '.$request->getAction().' doesn\'t exists in controller '.$request->getController());
            }
        } else {
            // Controller file doesn't exists
            throw new Zorg_Dispatcher_Exception('Controller '.$request->getController().' doesn\'t exists.');
        }
    }
}
?>
