<?php
class Zorg_Router extends Zorg_Singleton {
//    private $_default = array('controller'=>'index','action'=>'index');

    public function route(Zorg_Request $request = NULL) {
        $requestArray = parse_url($request->getUrl());

        $path = $requestArray['path'];
        $args = array();
        if (isset ($requestArray['query'])){
            parse_str($requestArray['query'], $args);
        }

        $route = array();
        if (!array_key_exists('controller', $args)) {
            $route['controller']='index';
        } else {
            $route['controller']=$args['controller'];
            unset($args['controller']);
        }

        if (!array_key_exists('action', $args)) {
            $route['action']='index';
        } else {
            $route['action']=$args['action'];
            unset($args['action']);
        }

        $params = $this->_getParams($args);

        $request->setController($route['controller']);
        $request->setAction($route['action']);
        $request->setParams($params);
    }

    private function _getParams($args = NULL) {
        $params = array();
        $get = array();
        foreach ($args as $key => $value) {
            $get[$key] = $value;
        }
        $params['get']=$get;
        $params['post']=$_POST;

        return $params;
    }
}
?>
