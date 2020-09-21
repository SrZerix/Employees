<?php

class Employee{
    
    private $id;
    private $code;
    private $nif;
    private $surnames;
    private $name;
    private $profession;
    private $salary;
    private $dateNac;
    private $dateEntry;
    private $dptr;
    
    function __construct($code, $nif, $surnames, $name, $profession, $salary, $dateNac, $dateEntry, $dptr) {
        $this->setCode($code) ;
        $this->setNIF($nif);
        $this->setSurnames($surnames);
        $this->setName($name);
        $this->setProfession($profession);
        $this->setSalary($salary);
        $this->setDateNac($dateNac);
        $this->setDateEntry($dateEntry);
        $this->setDptr($dptr);
    }
    
     //////////////////
    ///// Getter /////
    /////////////////
    
    function getId(){
        return $this->id;
    }
    
    function getCode() {
        return $this->code;
    }

    function getNif() {
        return $this->nif;
    }

    function getSurnames() {
        return $this->surnames;
    }

    function getName() {
        return $this->name;
    }

    function getProfession() {
        return $this->profession;
    }

    function getSalary() {
        return $this->salary;
    }

    function getDateNac() {
        return $this->dateNac;
    }

    function getDateEntry() {
        return $this->dateEntry;
    }

    function getDptr() {
        return $this->dptr;
    }
    
     //////////////////
    ///// Setter /////
    /////////////////
    
    function setId($id){
        $this->id = $id;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    function setSurnames($surnames) {
        $this->surnames = $surnames;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setProfession($profession) {
        $this->profession = $profession;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

    function setDateNac($dateNac) {
        $this->dateNac = $dateNac;
    }

    function setDateEntry($dateEntry) {
        $this->dateEntry = $dateEntry;
    }

    function setDptr($dptr) {
        $this->dptr = $dptr;
    }



    public function __toString() {
        
    }   
    
}

