

<?php
// Definición de la clase padre
class Animal {
    public $nombre;
    public $tipo;

    public function __construct($nombre, $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    //public function hacerSonido() {
      //  return "Haciendo sonido genérico...";
    }


// Definición de la clase hija que hereda de Animal
class Perro extends Animal {
    public function hacerSonido() {
        return "¡Guau!";
    }
}

// Crear una instancia de la clase Perro
$perro = new Perro("Fido", "Canino");

// Acceder a las propiedades de la clase Animal (heredadas)
echo "Nombre: " . $perro->nombre . "<br>";
echo "Tipo: " . $perro->tipo . "<br>";

// Llamar al método hacerSonido() de la clase Perro
echo $perro->hacerSonido();
?>
