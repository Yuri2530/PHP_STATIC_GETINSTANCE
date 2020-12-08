<?php
class Humano{
    public static $cabello = "Negro";
    public static $vocabulario;
    public function Saludar(){
        return "Hola cómo estás";
    }

    public function Hablar(){
        return self::Saludar();
    }

    public function lenguaje(){
        self::$vocabulario = "Español";
    }
}

    echo Humano::Saludar();
    echo "<br>";
    echo Humano::$cabello;
    echo "<br>";
    echo Humano::Hablar();
    echo "<br>";
    Humano::lenguaje();
    echo Humano::$vocabulario;



?>