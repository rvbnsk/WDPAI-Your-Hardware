<?php

require_once 'controllers/AppController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/ContentController.php';

class Routing {
    public static $routes;

    public static function get($url, $controller) {
        self::$routes[$url] = $controller;
    }

    public static function post($url, $controller) {
        self::$routes[$url] = $controller;
    }

    public static function run($url) {
        $action = explode("/", $url)[0];

        if(!array_key_exists($action, self::$routes)) {
            die("wrong url");
        }

        $controller = self::$routes[$action];

        $object = new $controller;

        $object->$action();
    }
}