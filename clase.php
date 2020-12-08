<?php
class Humano{
    public $cabello = "Negro";
    public $vocabulario;
    public function Saludar(){
        return "Hola cómo estás";
    }

    public function Hablar(){
        return $this ->Saludar();
    }

    public function lenguaje(){
        $this->vocabulario = "Español";
    }
}

$obj = new Humano();
    echo $obj->Saludar();
    echo "<br>";
    echo $obj->cabello;
    echo "<br>";
    echo $obj->Hablar();
    echo "<br>";
    $obj->lenguaje();
    echo $obj->vocabulario;



?>