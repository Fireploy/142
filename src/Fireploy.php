<?php
namespace App;

class Fireploy {
    public static function saludo($nombre) {
        return "Hola, Estas viendo la plantilla de" . htmlspecialchars($nombre) . " en php!";
    }
}
