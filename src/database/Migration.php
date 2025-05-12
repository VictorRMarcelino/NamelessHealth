<?php

namespace src\database;

/**
 * Migration
 * @package    src
 * @subpackage database
 * @author     Victor Ramos <httpsvictorramos@gmail.com>
 * @since      11/05/2025 
 */
abstract class Migration {
    private $Model;
    /** @var array */
    private $relations = [];

    /**
     * Return the model of the migration
     * @return Model
     */
    public function getModel() {
        return $this->Model;
    }

    /**
     * Define the Model of the Relation
     * @param Model $oModel
     */
    public function setModel(Model $oModel) {
        $this->Model = $oModel;
    }

    /**
     * Add a new relation to the migration
     * @param string $sColumn
     * @param string $sModel
     */
    public function addRelation($sColumn, $sModel) {
        $oRelation = new MigrationRelation($sColumn, $sModel);
        $this->relation[] = $oRelation;
    }

    /** Load the relations of the migration */
    abstract function loadRelations();
    
    /**
     * Return the name of the table
     * @return string
     */
    abstract function getTable();
}