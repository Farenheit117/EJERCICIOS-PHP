<?php
// esto nos permite tener un tipado fuerte y estricto
declare(strict_types=1);

//Clases y objetos 
//Definimos un objeto por medio de una variable
    
$sale = new sale(19.5, date("Y-m-d"));
$onlinesale = new OnlinesSale(15, date("Y-m-d" ), "Tarjeta");
echo $onlinesale ->createInvoice();
echo $onlinesale ->showInfo();
//$concept = new concept("Cervesa", 10.2);
//$sale-> addConcept($concept);

print_r($sale->concept);
//echo gettype($sale -> total);
//echo $sale->createInvoice();
//Definimos una clase con tipado fuerte
class Sale{
    //Encupsalamiento consiste dar cierto nivel de restriccion a sus propiedades metodos
    public float $total;
    public string $date;
    public array $concept;
    public static $count; // Es una propieadad estatica  nos permite compartir por todos los objetos  de la misma clase

    //Constructor
    public function __construct(float $total, string $date){
        $this->total = $total;
        $this->date = $date;
        $this->concept = [];
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
    function createInvoice(): string {
        return "Se crea una factura <br>";
    }
    public function addConcept (Concept $concept){
        $this->concept[] = $concept;
    }
}

class Concept{
    public String $descripcion;
    public float $cantidad;
                                                    //Union Types//
    public function __construct(string $descripcion, int|float|null $cantidad){
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
    }
}

//Herencia entre clases 
class OnlinesSale extends Sale{
    public $payment_method;

    //Contructor
    public function __construct(float $total, string $date, string $payment_method ){
        // invocando el instructor del padre 
        parent::__construct($total, $date);
        $this->payment_method = $payment_method;
    }

    public function showInfo(): string{
        return "La venta tiene un monto de: $this->total";
    }


}