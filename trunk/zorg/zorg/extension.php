<?php
class Zorg_Extension
{
    protected $_name;
    protected $_active = true;

    public function getName() {
        return $this->_name;
    }

    public function setName($_name) {
        $this->_name = $_name;
    }

    public function getActive() {
        return $this->_active;
    }

    public function setActive($_active) {
        $this->_active = $_active;
    }

}
?>
