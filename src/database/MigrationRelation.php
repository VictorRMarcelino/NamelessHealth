<?php

namespace src\database;

/**
 * Migration Relation
 * @package    src
 * @subpackage database
 * @author     Victor Ramos <httpsvictorramos@gmail.com>
 * @since      11/05/2025 
 */
class MigrationRelation {
    
    /** @var string */
    private $column;
    /** @var string */
    private $model;
    /** @var boolean */
    private $primaryKey;

    /**
     * Return the name of the column in the database
     * @return string
     */
    public function getColumn() {
        return $this->column;
    }

    /**
     * Define the name of the column in the database
     * @param string $sColumn
     */
    public function setColumn($sColumn) {
        $this->column = $sColumn;
    }

    /**
     * Return the name of the model propertie name
     * @return string
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * Define the name of the model propertie name
     * @param string $sModel
     */
    public function setModel($sModel) {
        $this->model = $sModel;
    }

    /**
     * Return if the relation is a primary key
     * @return boolean
     */
    public function getPrimaryKey() {
        return $this->primaryKey;
    }

    /**
     * Define if the relation is a primary key
     * @param boolean @bPrimaryKey
     */
    public function setPrimaryKey($bPrimaryKey) {
        $this->primaryKey = $bPrimaryKey;
    }

    /**
     * Define the relation as a primary key
     * @return MigrationRelation
     */
    public function primaryKey() {
        $this->setPrimaryKey(true);
        return $this;
    }

    public function __construct($sColumn, $sModel) {
        $this->setColumn($sColumn);
        $this->setModel($sModel);
    }
}