<?php

namespace src\routes;

/**
 * Request
 * @package    src
 * @subpackage routes
 * @author     Victor Ramos <httpsvictorramos@gmail.com>
 * @since      12/05/2025
 */
class Request {

    const METHOD_GET    = 'GET';
    const METHOD_POST   = 'POST';
    const METHOD_PUT    = 'PUT';
    const METHOD_DELETE = 'DELETE';

    private $parameters = [];
    private $method;

    /**
     * Return a specificc parameter or all of them
     * @param string $sParameter
     * @param mixed $xDefaultValue
     * @return array|mixed
     */
    public function getParameter($sParameter = false, $xDefaultValue = false) {
        if ($sParameter) {
            return (isset($this->parameters[$sParameter]) ? $this->parameters[$sParameter] : $xDefaultValue);
        }

        return $this->parameters;
    }

    /**
     * Define the parameters of the request
     * @param array $aParameters
     */
    private function setParameters($aParameters) {
        $this->parameters = $aParameters;
    }

    public function getMethod() {
        return $this->method;
    }

    private function setMethod($sMethod) {
        $this->method = $sMethod;
    }

    public function __construct() {
        $this->setMethod($_REQUEST['REQUEST_METHOD']); 
    }

    /**
     * Return a static instance of Request
     * @return Request
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset($instance)) {
            $instance = new self();
            $this->loadParameters();
        }

        return $instance;
    }

    /**
     * Load the parameters of the request
     */
    private function loadParameters() {
        switch ($this->getMethod()) {
            case self::METHOD_GET:
                $this->setParameters($_GET);
                break;
            case self::METHOD_POST:
                $this->setParameters($_POST);
                break;
            case self::METHOD_UPDATE:
                $this->setParameters($_PUT);
                break;
            case self::METHOD_DELETE:
                $this->setParameters($_DELETE);
                break;
        }
    }
}