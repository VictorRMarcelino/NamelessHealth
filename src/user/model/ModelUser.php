<?php

namespace src\user\model;

/**
 * Model User
 * @package user
 * @subpackage model
 * @author VictorRamos <httpsvictorramos@gmail.com>
 * @since 12/04/2025
 */
class ModelUser {
    public $id;
    private $username;
    private $password;

    /**
     * Get the value of id
     * @return int
     */ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     * @param int 
     */ 
    public function setId($id){
        $this->id = $id;
    }

    /**
     * Get the value of username
     * @return string
     */ 
    public function getUsername(){
        return $this->username;
    }

    /**
     * Set the value of username
     * @param string 
     */ 
    public function setUsername($username){
        $this->username = $username;
    }

    /**
     * Get the value of password
     * @return string
     */ 
    public function getPassword(){
        return $this->password;
    }

    /**
     * Set the value of password
     * @param string
     */ 
    public function setPassword($password){
        $this->password = $password;
    }
}