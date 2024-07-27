<?php
    namespace PHP\Modelo; //nome do projeto (pasta), responsável pela conexão entre as classes

    require_once('Endereco.php');

    class Pessoa{
        //Declarando as variaveis
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

         //Método Construtor (instanciar os valores)    
         //this = $this (refere-se a variavel declarado e não a local)
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//Fim do método construtor

        //Método de acesso e modificação
        public function __get(string $campo)
        {
            return $this->campo;
        }//Fim do get genérico

        public function __set(string $campo, string $valor):void
        {
            $this->campo = $valor;
        }//Fim do set genérico

        //Melhor usar o this ao chamar o get e set porque mesmo estando na mesma classe, as vezes o PHP não identifica a função
        public function imprimir():string
        {
            return "<br>CPF: " . $this->cpf .
                    "<br>Nome: " . $this->nome .
                    "<br>Telefone: " . $this->telefone;
        }//Fim do método imprimir
    }//Fim da classe
?>