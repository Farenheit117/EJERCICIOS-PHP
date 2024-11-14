<?php
//Herencia
$empleado = new Empleado("Carlos", "Cruz Roa", 11812312, 31526523, "O+");
echo $empleado ->createPersona();

class Persona {
    public string $nombre;
    public string $apellido;
    protected int $documento;
    private int $telefono;

    public function __construct(string $nombre, string $apellido, int $documento, int $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
    }
    
    public function createPersona(): string {
        return "Se crea ha creado el registro de la persona correctamente <br>";
    }
}

class Empleado extends Persona {
    public string $rh;

    public function __construct(string $nombre, string $apellido, int $documento, int $telefono, string $rh) {
        // invocando el instructor del padre 
        parent::__construct($nombre, $apellido, $documento, $telefono);
        $this->rh = $rh;
    }
}

