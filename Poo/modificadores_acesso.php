<!-- MODIFICADORES DE ACESSO.

Podem ser usados para atributos e métodos.

Public (público):

Palavra-chave: public
Visibilidade: Pode ser acessado de qualquer lugar: dentro da classe, por instâncias da classe, e por outras classes.

Protected (protegido):

Palavra-chave: protected
Visibilidade: Pode ser acessado apenas dentro da própria classe e por subclasses (classes derivadas). 
Não pode ser acessado diretamente fora dessas classes.

Private (privado):

Palavra-chave: private
Visibilidade: Pode ser acessado apenas dentro da própria classe onde foi definido. 
Não pode ser acessado por subclasses ou de fora da classe. -->

<?php 

class Carro{

    protected $ano;
}

class Carro2 extends Carro{

    public function setAno($a){

        $this->ano = $a;
    }
}

$veiculo = new Carro2();

$veiculo->setAno(2022);

var_dump($veiculo);

?>