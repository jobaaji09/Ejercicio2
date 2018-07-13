<?php
require_once('ExperienciaLaboral.php');
require_once('FormacionAcademica.php');
require_once('Skills.php');

class  Profesionista{
    private $nombre;
    private $correo;
    private $telefono;
    private $contrasenia;
    private $nacionalidad;
    private $carrera;
    private $experienciaLaboral;
    private $formacionAcademica;
    private $skills;

    public function __construct(string $nombre,
                                string $correo,
                                string $telefono,
                                string $contrasenia,
                                string $nacionalidad,
                                string $carrera,
                                array $experienciaLaboral,
                                array $formacionAcademica,
                                array $skills
                                ){
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contrasenia = $contrasenia;
        $this->telefono = $telefono;
        $this->nacionalidad = $nacionalidad;
        $this->experienciaLaboral = $experienciaLaboral;
        $this->formacionAcademica = $formacionAcademica;
        $this->skills = $skills;

    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getNacionalidad(){
        return $this->nacionalidad;
    }
    public function getExperienciaLaboral(){
        return $this->experienciaLaboral;
    }
    public function getFormacionAcademica(){
        return $this->formacionAcademica;
    }
    
    public function getSkills(){
        return $this->skills;
    }

    public function setCorreo(string $correo){
        $this->correo = $correo;
    }

    public function setTelefono(string $telefono){
        $this->telefono = $telefono;
    }
    public function setContrasenia(string $contrasenia){
        $this->contrasenia = $contrasenia;
    }
    /*
    public function setExperienciaLaboral(string $ExperienciaLabora){
        $this->ExperienciaLaboral = $ExperienciaLaboral;
    }

    public function setFormacionAcademica(string $formacionAcademica){
        $this->formacionAcademica = $formacionAcademica;
    }
    */
    
    
    
    
    
}