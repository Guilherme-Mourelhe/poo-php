<?php 

//HERANÇA é utilizado quando temos uma classe genérica que possui atributos e métodos que podem ser utilizados por 
//outras classes, ou seja, classes que compartilham características em comum.

// EXTENDS

//Importante para praticidade e reutilização de código.

//Classe genérica
class Aeronave{

    //Atributos
    private $modelo;
    private $qtd_motores;
    private $velocidade_cruzeiro;
    private $cor;

    //Métodos


    //Construtor.
    public function __construct($modelo, $motores, $vel_cruzeiro, $cor){

        $this->setAtributos($modelo,$motores,$vel_cruzeiro,$cor);
    }

    //Setters.
    public function setAtributos($modelo, $motores, $vel_cruzeiro, $cor){

        $this->modelo = $modelo;
        $this->qtd_motores = $motores;
        $this->velocidade_cruzeiro = $vel_cruzeiro;
        $this->cor = $cor;
    }   

    //Getters.
    public function getModelo(){

        return $this->modelo;
    }

    public function getQtd_motor(){

        return $this->qtd_motores;
    }

    public function get_vel_cruzeiro(){

        return $this->velocidade_cruzeiro;
    }

    public function getCor(){

        return $this->cor;
    }


    public function decolar(){

        print 'Aeronave está decolando.';
    }

    public function pousar(){

        print('Aeronave está pousando.');
    }
    
}

//Classe que recebe a herança.
class Aviao extends Aeronave{

    //Atributos.
    public $qtd_asas;

    //Métodos.

    public function arremeter(){
       
        print('Aviao arremeteu');
    }
}

class Helicoptero extends Aeronave{

    //Atributos.
    public $qtd_helices;

    //Métodos.
    public function parar_vertical(){

        print('Helicóptero parado na vertical');
    }
}

//Instanciando classe avião (Criando um objeto da classe).
$airplane = new Aviao('Embraer', 2, 1200, 'Branco');
$helicopter = new Helicoptero('Cesna', 1, 500, 'Azul');

var_dump($airplane);
print '<br>';
var_dump($helicopter);
print '<br>';

$helicopter->parar_vertical();
print '<br>';
print $airplane->getModelo();



?>