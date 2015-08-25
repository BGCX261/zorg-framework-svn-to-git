<?php
require 'loader.php';

class Zorg_Application {
    public $name = 'My Zorg Application';
    public $autoLoadingEnabled = true;

    private $_dispatcher;

    /**
     * Zorg_Application's constructor : it configures the application with the
     * configuration array and defines mains Zorg's components
     * @param array $config Configuration array
     */
    public function  __construct($config = NULL) {
        if (isset ($config)) {
            $config = require($config);
            $this->configure($config);
        }

        if ($this->autoLoadingEnabled) {
            Zorg_Loader::getInstance()->enableAutoLoading();
        }

        $this->_dispatcher = Zorg_Dispatcher::getInstance();

        Zorg::setApp($this);
    }

    /**
     * Defines all variables from the configuration array
     * @param array $config Configuration array
     */
    public function configure($config) {
        if (is_array($config)) {
            foreach ($config as $key=>$value) {
                $this->$key = $value;
            }
        }
    }

    public function run() {
        $this->_dispatcher->dispatch();
    }

}
?>
