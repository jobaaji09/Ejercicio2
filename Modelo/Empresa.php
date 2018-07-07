<?php

class Empresa{
    private $nombre;
    private $oficinas;
    private $fundacion;
    private $numEmpleados;
    private $contacto;
    private $presidente;

    public function __construct(string $nombre,
                                string $oficina,
                                string $fundacion,
                                int $numEmpleados,
                                string $contacto,
                                string $presidente){
        $this->nombre = $nombre;
        $this->oficina = $oficina;
        $this->fundacion = $fundacion;
        $this->numEmpleados = $numEmpleados;
        $this->contacto = $contacto;
        $this->presidente = $presidente;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getOficina(){
        return $this->oficina;
    }

    public function getFundacion(){
        return $this->fundacion;
    }

    public function getNumEmpleados(){
        return $this->numEmpleados;
    }

    public function getContacto(){
        return $this->contacto;
    }
    public function getPresidente(){
        return $this->presidente;
    }

    public function setNumeroEmpleados(int $numEmpleados){
        $this->numEmpleados = $numEmpleados;
    }

    
    public function setOficinas(string $oficinas){
        $this->oficinas = $oficinas;
    }

    
    public function setPresidente(string $presidente){
        $this->presidente = $presidente;
    }

    
    
    
    
    
    
    

}