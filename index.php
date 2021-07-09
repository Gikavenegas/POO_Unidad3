<?php

class Paises{
    public $nombre;
    public $continente;
    public $idioma;
    public $moneda;
    public $clima;

    function __construct($nombre, $continente, $idioma, $moneda, $clima)
    {
        $this->nombre=$nombre;
        $this ->continente=$continente;
        $this ->idioma=$idioma;
        $this ->moneda=$moneda;
        $this ->clima=$clima;

    }

    public function mostrar_nombre(){
        return $this->nombre;
    }

    public function mostrar_idioma(){
        return $this->idioma;
    }

    public function mostrar_moneda(){
        return $this ->moneda;
    }
}

//Objetos:

$pais1 = new Paises("Colombia", "América del Sur", "español", "pesos colombianos", "tropical");
$pais2 = new Paises("Paises Bajos", "Europa", "neerlandés", "euro", "estaciones");

//Mostrar los valores en pantalla:

echo "El primer país es: " . $pais1-> mostrar_nombre() . ", y su idioma nativo es el " . $pais1->mostrar_idioma();
echo "<br>";
echo "El segundo país es: " . $pais2-> mostrar_nombre() . ", y su idioma nativo es el " . $pais2->mostrar_idioma();

//Clase nueva que hereda los datos de la clase Paises

class Capitales extends Paises{

    public $origen_pais;

    function __construct($nombre, $continente, $idioma, $moneda, $habitantes, $nombreCapital)
    {
        parent::__construct($nombre, $continente, $idioma, $moneda, $habitantes);
        $this -> nombreCapital = $nombreCapital;
    }

    public function mostrar_capital (){

        return $this->nombreCapital;
    }

}

$capital1 = new Capitales ("Colombia", "América del Sur", "español", "pesos colombianos", "tropical", "Bogotá");

echo "Características del país: <br>";
echo "<pre>";
var_dump($pais1);
echo "</pre> <br>";
echo "Perteneciente a la capital ". $capital1-> mostrar_capital();


?>