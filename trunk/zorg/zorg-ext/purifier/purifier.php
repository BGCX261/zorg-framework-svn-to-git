<?php
require __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'HTMLPurifier.safe-includes.php';

class ZorgExt_Purifier extends Zorg_Extension
{
    protected $_name = 'purifier';

    public static function purify($html){
        return HTMLPurifier::instance()->purify($html);
    }
}
?>
