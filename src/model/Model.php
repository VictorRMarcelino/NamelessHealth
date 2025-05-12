<?php

namespace src\model;

/**
 * Model
 * @package    src
 * @subpackage model
 * @author     Victor Ramos <httpsvictorramos@gmail.com>
 * @since      11/05/2025 
 */
abstract class Model {
    private $Migration;

    /**
     * Return the Migration of the Model
     * @return Migration
     */
    public function getMigration() {
        if (!isset($this->Migration)) {
            $sClassName = get_class(self);
            $sMigrationName = 'Migration' . str_replace('Model', $sClassName);
            $this->Migration = new $sMigrationName();
        }

        return $this->Migration;
    }
}