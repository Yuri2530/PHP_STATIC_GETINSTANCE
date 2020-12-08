<?php

class Tipo_de_Animal{

    protected $lista_Animales = array(
        "Leon" => array(),
        "Aguila" => array(),
        "Ballena" => array()
    );
    protected function Extremidades($arg){
        if (array_key_exists($arg, $this->lista_Animales)){
        $this -> Validar($arg);
    }
        return $this -> lista_Animales;
}
protected function Validar($arg){
 switch ($arg) {
     case 'Leon';
        array_push($this->lista_Animales[$arg], "4 patas con garras");
         break;
    case 'Aguila';
    array_push($this->lista_Animales[$arg], "2 patas");
        break;
        case 'Ballena';
    array_push($this->lista_Animales[$arg], "2 aletas");
        break;
     
     default:
         # code...
         break;
 }

}


}


class Animal extends Tipo_de_Animal{
    public $patas;
    public $pelaje;
    public function Datos_de_los_animales($arg){
        $this->patas = $this->Extremidades($arg);
            
    }

}

$obj = new Animal();
$obj -> Datos_de_los_animales("Leon");
var_dump($obj->patas);




?>