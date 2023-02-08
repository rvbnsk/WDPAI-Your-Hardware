<?php

class User {
    private $email;
    private $password;
    private $name;
    private $surname;
    private $roles;

    public function __construct($email, $password, $name, $surname, $roles) {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->surname = $surname;  
        $this->roles = $roles;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSurname($surname) {
        $this->surname = $surname;  
        return $this;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
    }
}