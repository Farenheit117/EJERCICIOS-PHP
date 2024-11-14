<?php

$empleado = new Empleado("Carlos", "Cruz Roa", 1118534593, 31526523, "O+");
echo $empleado->createPersona();
echo $empleado->getDocumento();
$empleado->setDocumento(1118534599);

class Persona
{
    public string $nombre;
    public string $apellido;
    public int $documento;
    public int $telefono;

    public function __construct(string $nombre, string $apellido, int $documento, int $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
    }

    public function createPersona(): string
    {
        return "Se crea ha creado el registro de la persona correctamente <br>";
    }
    //Metodos get
    public function getDocumento(): int
    {
        return ($this->documento);
    }
    //Metodos set
    public function setDocumento(int $documento)
    {
        if ($documento <= 10 || $documento <= 8) {
            echo "<br>El numero de documento invalido";
        }else{
            echo ("<br>El numero de documento ingresado es correcto");
        }
        $this->documento = $documento;
    }
}

class Empleado extends Persona
{
    public string $rh;

    public function __construct(string $nombre, string $apellido, int $documento, int $telefono, string $rh)
    {
        // invocando el instructor del padre 
        parent::__construct($nombre, $apellido, $documento, $telefono);
        $this->rh = $rh;
    }
}
