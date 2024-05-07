
<?php
class Ejemplo {
    public static $mensaje = "¡Hola!";
    public static $contador = 0;

    public static function aumentarContador() {
        self::$contador++ . "<br>";
    }
}


echo Ejemplo::$mensaje. "<br>"; 
Ejemplo::aumentarContador(). "<br>"; // Incrementa el contador
Ejemplo::aumentarContador(). "<br>"; // Incrementa el contador nuevamente
Ejemplo::aumentarContador(). "<br>";
echo "Contador: " . Ejemplo::$contador; 