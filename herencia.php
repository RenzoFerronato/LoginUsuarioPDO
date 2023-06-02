<?php 

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInfo(){
        return $this->nombre . ' tiene ' . $this->edad . ' y pertenece al pais ' . $this->pais . ' recibido de ' . $this->carrera;
    }
}

class Estudiante extends Persona {
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

$renzo = new Estudiante('Renzo Ferronato', 22, 'Argentina', 'Desarrollo De Software');
echo $renzo->mostrarInfo();

?>
