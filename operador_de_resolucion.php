<?php


class Ejemplo {
    public static $staticVariable = 10;
    public static function staticMethod() {
        return "Hello";
    }
}

// Acceso a una variable estática
echo Ejemplo::$staticVariable; // Imprime 10

// Llamada a un método estático
echo Ejemplo::staticMethod(); // Imprime "Hello"
