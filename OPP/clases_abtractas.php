<?php
//Clases abtractas son simplemente  un moldes o bases de clases sirven para 
//para el diseño de software , pero no sirven para crear objetos apartir de ello
// solamente para metodos  con funcionamientos y metodos inherentes

//creamos un ovbejto  de la clase Beer 
$beer = new Beer( "poker", 130000) ;     

// imprimimos el metodo get que obtiene el nombre producto para visualizarlo
echo $beer->getName()."<br>";

// llamamos al metodo
showInfo($beer);
function showInfo(Producto $producto){
    echo "$ ".$producto->calculatePrice();
}

abstract class Producto{
    public $id;
    public $name;
    public $price;

    //metodo abstracto
    abstract public function calculatePrice(): float ;

    //metodo con funcionamiento
    public function getName(): string{
        return $this->name;
    }  

}

class Beer extends Producto{

    const TAX = 1.1;
    //se requiere un contructor para traer los abributos de clase padre
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    //se requiere traer el metodo abstracto de la clase abstracta
    public function calculatePrice():float{
        return $this->price*self::TAX;
    }
}