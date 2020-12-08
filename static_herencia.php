<?php

class Tipo_de_Animal{
    protected static $lista_Animales = array(
        "Leon" => array(),
        "Aguila" =>array(),
        "Ballena" =>array()
    );
    protected static function Extremidades($arg){
        if(array_key_exists($arg, self::$lista_Animales)){
            self::Validar($arg);
        }
        return self::$lista_Animales;
    }
    

protected static function Validar($arg){

    switch ($arg) {
        case 'Leon':
            array_push(self::$lista_Animales[$arg], "4 patas con garras");
            return self::$lista_Animales;
            break;
            case 'Aguila':
                array_push(self::$lista_Animales[$arg], "2 patas");
                return self::$lista_Animales;
                break;
                case 'Leon':
                    array_push(self::$lista_Animales[$arg], "2 aletas");
                    return self::$lista_Animales;
                    break;

        default:
            # code...
            break;
    }
}

}



class Animal extends Tipo_de_Animal{
        public $extremidades;
        public $pelaje;
        public static $patas;
        public static function Datos_de_los_animales($arg){
            self::$patas = self::Extremidades($arg);
        }
    
    }

    Animal::Datos_de_los_animales("Aguila");
    var_dump(Animal::$patas);





?>