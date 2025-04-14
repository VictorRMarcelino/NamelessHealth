<?php

namespace routes;

/**
 * Request
 * @package routes
 * @author VictorRamos <httpsvictorramos@gmail.com>
 * @since 13/04/2025
 */
class Request {

    private $method;
    private $uri;

    public function __construct() {
        $this->setUri($_SERVER["REQUEST_URI"]);
        $this->setMethod($_SERVER["REQUEST_METHOD"]);
    }


    /**
     * Get the value of method
     * @return string
     */ 
    public function getMethod(){
        return $this->method;
    }

    /**
     * Set the value of method
     * @param string $method
     */ 
    private function setMethod($method){
        $this->method = $method;
    }

    /**
     * Get the value of uri
     * @return string
     */ 
    public function getUri(){
        return $this->uri;
    }

    /**
     * Set the value of uri
     * @param string $uri
     */ 
    private function setUri($uri){
        $this->uri = $uri;
    }

    /**
     * Return an instance of Request
     * @return Request
     */
    public static function getInstance(){
        static $instance = null;

        if (!isset($instance)){
            $instance = new Request();
        }

        return $instance;
    }
}