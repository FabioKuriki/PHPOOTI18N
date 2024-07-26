<?php
    namespace PHP\Modelo; //nome do projeto (pasta), responsável pela conexão entre as classes

    class Pessoa{
        //Declarando as variaveis
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;

         //Método Construtor (instanciar os valores)    
         //this = $this (refere-se a variavel declarado e não a local)
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//Fim do método construtor

        //Método de acesso e modificação
        public function getCPF():string
        {
            return $this->cpf;
        }//Fim do método getCPF

        public function getNome():string
        {
            return $this->nome;
        }//Fim do método getNome

        public function getTelefone():string
        {
            return $this->telefone;
        }//Fim do método getTelefone

        public function getEndereco():string
        {
            return $this->endereco;
        }//Fim do método getEndereco

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//Fim do método setCPF

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//Fim do método setNome

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//Fim do método setTelefone

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//Fim do método setEndereco

        //Melhor usar o this ao chamar o get e set porque mesmo estando na mesma classe, as vezes o PHP não identifica a função
        public function imprimir():string
        {
            return "<br>CPF: " . $this->getCPF() .
                    "<br>Nome: " . $this->getNome() .
                    "<br>Telefone: " . $this->getTelefone() . 
                    "<br>Endereço: " . $this->getEndereco() . "<br>";
        }//Fim do método imprimir
    }//Fim da classe
?>