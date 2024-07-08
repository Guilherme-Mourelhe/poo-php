<?php

//Útil para quando os atributos de uma classe são privados(private).
//Importante para filtrar dados de entrada, ao não permitir que os métodos sejam públicos eles serão tratados na classe.


//  __construct = CONSTRUTOR = importante para inicializar propriedades de objetos e executar códigos necessários
// na criação dos mesmos.

// O construtor é automaticamente chamado quando um objeto da classe é instanciado.

//Classe simulando uma validação de login.
class Login
{

    //Atributos da classe.
    private $email;
    private $senha;
    private $nome;

    //Métodos da classe.

    //Usando CONSTRUTOR
    public function __construct($email, $senha, $nome){

         // $this refere-se ao objeto da classe Login.
         //Usando setters dentro do construtor(Boa prática).
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);

    }

    //Getters
    public function getEmail(){
        
        return $this->email;
    }

    public function getSenha(){

        return $this->senha;
    }

    public function getNome(){

        return $this->nome;
    }

    //Setters
    public function setEmail($entrada_email){

       // $email_limpo = mysqli_real_escape_string($conexao_bd,$entrada_email);
       //Filtrando dados de entrada, uma vez que os atributos da classe são privados.
        $email_limpo = htmlspecialchars($entrada_email); 
        $this->email = filter_var($email_limpo,FILTER_SANITIZE_EMAIL);
    }

    public function setSenha($entrada_senha){

        $this->senha = $entrada_senha;
    }

    public function setNome($entrada_nome){

        $this->nome = $entrada_nome;
    }

    public function valida_login()
    {
        if ($this->email == 'email@gmail.com' and $this->senha == 'testando') {
            
            print('Login efetuado com sucesso.');
        } else {

            print('Dados incorretos.');
        }
    }
}

//Instanciando a classe (Criando um objeto da classe).

$usuario = new Login('email@gmail.com', 'testando', 'Guilherme');

$usuario->valida_login();

print('<br>');

//Usando o getters.
print(' Email de usuario: ' . $usuario->getEmail());
print(' Senha de usuario: ' . $usuario->getSenha());
