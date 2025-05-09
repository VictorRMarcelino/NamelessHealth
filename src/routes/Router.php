<?php

namespace src\routes;

/**
 * Router
 * @package    src
 * @subpackage routes
 * @author     Victor Ramos <httpsvictorramos@gmail.com>
 * @since      09/05/2025
 */
class Router {

    private $routes = [];

    /**
     * Return a static instance of Router
     * @return Router
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset($instance)) {
            $instance = self();
        }

        return $instance;
    }

    /** 
     * Add a new GET route
     * @param string $sRoute
     * @param callback $fFuncion
     */
    public static function get($sRoute, $fFunction) {
        self::getInstance()->routes['get'][$sRoute] = $fFunction;
    }

    /** 
     * Add a new POST route
     * @param string $sRoute
     * @param callback $fFuncion
     */
    public static function post($sRoute, $fFunction) {
        self::getInstance()->routes['post'][$sRoute] = $fFunction;
    }
}