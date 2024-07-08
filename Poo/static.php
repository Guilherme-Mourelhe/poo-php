<?php
// STATIC
//MÉTODOS E ATRIBUTOS ESTÁTICOS

//O this não funciona com atributos estáticos.
//Necessário usar SELF e PARENT para acessar atributos e métodos estáticos. Além do '::'.

// QUANDO TEMOS MÉTODOS E ATRIBUTOS ESTÁTICOS NÃO PRECISAMOS INSTANCIAR A CLASSE PARA ACESSÁ-LOS.

class Oficina{

    //Atributo estático
    public static $funcionarios;

    //Método estático.
    public static function nome_funcionario(){

        print( 'Nome do funcionário: ' . self::$funcionarios);
    }

}

//Não precisamos instanciar a classe para usar atributos e métodos estáticos.
//Acessando...

//Acessando atibuto estático sem instanciar.
Oficina::$funcionarios = 'Carlos';

//Acessando método estático sem instanciar.
Oficina::nome_funcionario();


?>