<?php

class ExperienciaLaboral {
    private $empresa;
    private $cargo;
    private $periodo;

    public function __construct ( string $empresa,
                                  string $cargo,
                                  string $periodo)
    {
        $this->empresa = $empresa;
        $this->cargo = $cargo;
        $this->periodo = $periodo;
    }

    public function getEmpresa (){
        return $this->empresa;

    
    }

    public function getCargo (){
        return $this ->cargo;
    }

    public function getPeriodo (){
        return $this ->periodo;
    }
}



