<?php

class Humano{
    public static $humano;
    public $saludar;
    public function __construct($arg){
        $this->saludar = $arg;

    }
    public static function getInstance($arg=null){
        if(!(self::$humano instanceof self)){
            self::$humano = new Humano($arg);
        }
return self::$humano;
    }
    public function saludar(){
        return "Hola";
    }

    public function hablar(){
        return $this->saludar;
    }
}
echo  Humano::getinstance("Día de velitas")->hablar();



?>