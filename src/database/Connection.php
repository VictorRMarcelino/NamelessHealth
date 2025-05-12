<?php

namespace src\database;

/**
 * Connection
 * @package    src
 * @subpackage database
 * @author     Victor Ramos <httpsvictorramos@gmail.com>
 * @since      11/05/2025
 */
class Connection {
    private $cnx;

    /**
     * Return a static function of Connection
     * @return Connection
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset($instance)) {
            $instance = new self();
            $instance->connect();
        }

        return $instance;
    }

    /**
     * Create a connection with the database
     */
    private function connect() {
        if (!$this->cnx) {
            try {
                $this->cnx = new PDO(getenv('DB_CONNECTION'));
            } catch (PDOException $ex) {}
        }
    }
}