<?php
//Siempre se tiene que crear una clase primero , entonces aqui creamos una clase llamada Presidente.
class Presidente{
    public $nombre;
    public $apellido;
    public $pais;
    
    public function __construct($nombre, $apellido,$pais){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->pais = $pais;
    
    }
    public function eleccion(){
        echo "{$this->nombre} {$this->apellido},  fue elegido como presidente de, {$this->pais}.\n ";
    }
     public function dirigir (){
        echo "Entonces ahora {$this->nombre} {$this->apellido} es el nuevo presidente de {$this->pais}";
     }
    
    }
    //Aqui creamos un objeto llamado elpresidente.
    $elpresidente = new Presidente("Gustavo", "Petro", "Colombia");
    //Aqui se llama para la ejecución el objeto elpreseidente.
    $elpresidente->eleccion();
    $elpresidente->dirigir();

  



?>

