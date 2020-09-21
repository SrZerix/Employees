<?php

class Departament{

private $id;
private $codigo;
private $descripcion;
private $localizacion;

function __construct($codigo, $descripcion, $localizacion) {
    $this->codigo = $codigo;
    $this->descripcion = $descripcion;
    $this->localizacion = $localizacion;
}

function getId() {
    return $this->id;
}

function getCodigo() {
    return $this->codigo;
}

function getDescripcion() {
    return $this->descripcion;
}

function getLocalizacion() {
    return $this->localizacion;
}

function setId($id) {
    $this->id = $id;
}

function setCodigo($codigo) {
    $this->codigo = $codigo;
}

function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

function setLocalizacion($localizacion) {
    $this->localizacion = $localizacion;
}





}

?>
