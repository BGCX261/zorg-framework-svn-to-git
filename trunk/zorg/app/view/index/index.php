<div id="test">
<?php
echo $hello.'<br />';
?>
    <a href="?controller=index&action=toto">Toto</a>
</div>
<?php
    echo Zorg_Html::tag('a', array('href'=>'?controller=test&action=toto'), 'Test');
?>