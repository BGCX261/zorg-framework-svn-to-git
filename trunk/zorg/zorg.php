<?php
class Zorg {
    private static $_app;

    public static function getApp() {
        return self::$_app;
    }

    public static function setApp($app) {
        self::$_app = $app;
    }
}
?>
