<?php
class Index_Controller extends Zorg_Controller {
    public function indexAction(){
        $this->render('index', array('hello'=>'Hello Zorg User'));
    }

    public function totoAction(){
        $this->render();
    }
}
?>
