<?php
class FormacionAcademica
{
    private $colegio;
    private $grado;
    private $periodo;

    public function __construct(
        string $colegio,
        string $grado,
        string $periodo){

        $this->colegio=$colegio;
        $this->grado=$grado;
        $this->periodo=$periodo;
    }
    
    public function getColegio(){
        return $this->colegio;
    }

    public function getGrado(){
        return $this->grado;
    }

    public function getPeriodo(){
        return $this->periodo;
    }
}