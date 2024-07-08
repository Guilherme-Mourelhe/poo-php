<?php 

//Classe.
class Carro{

    //Atributos.
    public $modelo;
    public $ano;
    public $quilometragem;
    public $cor;
    
    //Método.
    public function Andar(){

        echo 'Carro em movimento';
    }

    public function Display(){

        print ("Temos um $this->modelo $this->cor do ano $this->ano e com $this->quilometragem de KM");
    }
}

//Instanciando uma classe (Criando um objeto que possui as propriedades dessa classe).

$civic = new Carro();
$civic->Andar();
print '<br>';

//Colocando atributos no objeto.

$civic->modelo = 'Civic';
$civic->ano = 2022;
$civic->quilometragem = 10000;
$civic->cor = 'Preto';

$civic->Display();

//Nova classe pra teste.

class Pessoa{

    //Atributos.
    public $nome;
    public $idade;
    public $cpf;

    //Métodos.
    public function __construct($nome, $idade, $cpf){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;

    }

    public function mostra_pessoa(){

        print('Pessoa de nome: ' . $this->nome . ' Idade: ' . $this->idade . ' e cpf: ' . $this->cpf);
    }
}

//Instanciando classe.

$bruno = new Pessoa('Bruno', '20', '2314213123');
$bruno->mostra_pessoa();





?>