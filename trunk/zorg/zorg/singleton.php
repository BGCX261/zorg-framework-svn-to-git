<?php
abstract class Zorg_Singleton {
    public static function getInstance() {
        static $_instances = array();
        $classname = get_called_class();
        if (! isset($_instances[$classname])) {
            $_instances[$classname] = new $classname();
        }
        return $_instances[$classname];
    }

    protected function  __construct() {
    }

    final private function  __clone() {
    }
}
?>
