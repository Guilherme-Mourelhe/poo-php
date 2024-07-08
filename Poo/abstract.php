<?php 

//  Classes abstratas são classes que não podem ser instanciadas diretamente, mas pode ser herdada por outras classes.
//  Métodos abstratos 
//  são declarados em uma classe abstrata,mas não têm implementação na classe abstrata; eles devem ser 
//  implementados nas subclasses concretas.

//Classe abstrata.
abstract class Banco{

    //Atributos.
    protected $saldo;
    protected $limite;
    protected $num_cartao;

    //Métodos abstratos.

    abstract protected function aumenta_limite($aumento);
    
    abstract protected function novo_cartao($novo_numero);

    //Métodos comuns.

    //getter
    public function getLimite(){

        return $this->limite;
    }

    //setter
    public function setLimite($l){

        $this->limite = $l;
    }
}

//Criando classe que vai receber herança(derivada).

class Inter extends Banco{

    private $tipo_cartao;
    private $nome_cliente;
    private $id_cliente;

    public function __construct($cartao, $nome, $id){
        
        $this->tipo_cartao = $cartao;
        $this->nome_cliente = $nome;
        $this->id_cliente = $id;
    }

    public function aumenta_limite($aumento){

        $this->limite += $aumento;
        print ('Seu limite foi aumentado para :' . $this->limite);
    }

    public function novo_cartao($novo_numero){

        $this->num_cartao = $novo_numero;
        print('Seu novo numero de cartão: ' . $this->num_cartao);
    }
}

//Instanciando a classe.

$cartao = new Inter('Black infinite', 'Guilherme', 1907007);

$cartao->setLimite(20000);
$cartao->aumenta_limite(5000);
$cartao->novo_cartao(32412312312);


?>