<?php 

// CONST /SELF /PARENT

//Em PHP, const é utilizado para definir constantes, que são valores imutáveis durante a execução do script.
//  Diferente de variáveis, as constantes não podem ser alteradas ou redefinidas.

//Nomes de Constantes: Por convenção, os nomes de constantes são escritos em maiúsculas.

//Escopo: Constantes 
//definidas com const em uma classe pertencem ao escopo da classe, enquanto as definidas com define() são globais.


class Sistema{

    const VERSAO = '1.0.0';
    const CRIPTOGRAFIA = 'hash';

    public function mostra_sistema(){

        //O self é utilizado para acessar constantes dentro da própria classe.
        print ('Versão do sistema: ' . self::VERSAO . '<br> Criptografia: ' . self::CRIPTOGRAFIA);
    }
}

class Interfaces extends Sistema{

    const VERSAO = '2.0.0';

    public function mostra_sistema(){
        //SELF:: irá usar a constante DESSA CLASSE.
        //PARENT:: Irá usar a constante da classe base.
        print('Versão do sistema:' . self::VERSAO);
    }

}

//Instanciando classe.
$ios = new Sistema();

$ios->mostra_sistema();

$windows = new Interfaces();

$windows-> mostra_sistema();

?>