<?php

namespace routes;

/**
 * Router
 * @package routes
 * @author VictorRamos <httpsvictorramos@gmail.com>
 * @since 12/04/2025
 */
class Router {

    private $routes = [
        "get" => [],
        "post"=> [
            "/user/register"=> "",
            "/user/login" => ""
        ],
    ];

    /**
     * Return an instance of Router
     * @return Router
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset($instance)) {
            $instance = new Router();
        }

        return $instance;
    }
}