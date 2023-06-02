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
        echo $this->nombre . ' tiene ' . $this->edad . ' y pertenece al pais ' . $this->pais;
    }
}

$renzo = new Persona('Renzo Ferronato', 22, 'Argentina');
// $renzo->nombre = 'Renzo Ferronato';
// $renzo->edad = 20;
// $renzo->pais = 'Argentino';
$renzo->mostrarInfo();

?>