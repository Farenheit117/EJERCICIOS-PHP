<?php

//Clases y objetos 

//Definimos un objeto por medio de una variable
    
$sale = new sale(19.5, date("Y-m-d"));
$sale = new sale(10.5, date("Y-m-d"));
echo Sale::$count."<br>";
Sale::reset();
$sale = new sale(12.5, date("Y-m-d"));
//$sale->createInvoice();
echo Sale::$count."<br>";

//Definimos una clase
class Sale{
    public $total;
    public $date;
    public static $count; // Es una propieadad estatica  nos permite compartir por todos los objetos  de la misma clase

    //Constructor
    public function __construct($total,$date){
        $this->total = $total;
        $this->date = $date;
        self::$count++;
    }

    //Metodos estaticos nos sirven para tener funcionales o metodos compartidos o globales.
    public static function reset(){
        self::$count = 0;
    }

    //Destructores solamente existe una sola vez, esto te asegura o se ejecute despues del objeto
    public function __destruct(){
        //echo "Se ha eliminado el objeto";        
    }

    //Metodos
    public function createInvoice(){
        echo "Se crea una factura <br>";
    }
} 