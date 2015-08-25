<?php
require 'singleton.php';

class Zorg_Loader extends Zorg_Singleton {
    public function autoload($class) {
        if (stristr($class, 'zorgext')) {
            // Extension
            $name = str_ireplace('zorgext_', '', strtolower($class));
            $file = EXT_PATH.DIRECTORY_SEPARATOR.$name.DIRECTORY_SEPARATOR.$name.'.php';
        }
        else if (stristr($class, 'zorg')) {
            // Classe du framework zorg
            $file = str_ireplace('_', DIRECTORY_SEPARATOR, strtolower($class)).'.php';
        }
        else {
            // Classe de l'application
            $typePos = strrpos($class, '_') + 1;
            $type = strtolower(substr($class, $typePos));
            $name = strtolower(substr($class, 0, $typePos-1));
            $file = APP_PATH.DIRECTORY_SEPARATOR.$type.DIRECTORY_SEPARATOR.$name.'.php';
        }
        require $file;
    }

    public function enableAutoLoading() {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

}
?>
