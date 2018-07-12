<?php

class Skill{
    private $nombre;
    private $grado;


    public function __construct(string $nombre, string $grado){
        $this->nombre = $nombre;
        $this->grado = $grado;
        
    }

    public function getNombre(){
        return $this->nombre;
    }

    
    public function getGrado(){
        return $this->grado;
    }

}