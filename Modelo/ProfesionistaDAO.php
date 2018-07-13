<?php
require_once('BaseDeDatos.php');

class ProfesionistaDAO extends BaseDeDatos{
    public function __construct(){
        parent::__construct('Profesionista');
    }
}