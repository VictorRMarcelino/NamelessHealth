<?php

namespace database;

use PDO;

/**
 * Connection
 * @package database
 * @author VictorRamos <httpsvictorramos@gmail.com>
 * @since 13/04/2025
 */
class Connection {

    private $conn;

    /**
     * Return an instance of Connection
     * @return Connection
     */
    public static function getInstance() {
        static $instance = null;

        if (!isset( $instance )) {
            $instance = new Connection();
        }

        return $instance;
    }

    /**
     * Create a connection with database
     */
    protected function connect() {
        $sHost = getenv("DB_HOST");
        $iPort = getenv("DB_PORT");
        $sDbname = getenv("DB_DBNAME");
        $sUser = getenv("DB_USER");
        $sPassword = getenv("DB_PASSWORD");
        $sConnection = "pgsql:host=$sHost;port=$iPort;dbname=$sDbname";

        try {
            $this->conn = new PDO($sConnection, $sUser, $sPassword);
        } catch (\PDOException $e) {
            $oConnection = null;
        }
    }
}