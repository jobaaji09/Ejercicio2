<?php
require_once('BaseDeDatos.php');
require_once('Profesionista.php');
class ProfesionistaDAO extends BaseDeDatos{

    public function __construct(string $tabla){
        parent::__construct($tabla);
    }

    public function inserta(){ //Profesionista $p){
        $o = new stdClass();

        $o->nombre = 'jhon';
        $o->contrasenia = 'bla';
        $o->correo = 'jhon@correocaleinte.com';

        parent::insert($o);
    }
}

$pr = new ProfesionistaDAO('profesionista');
$pr->inserta();