<?php
    namespace PHP\Modelo;

    class Funcionario{
        private int $matricula;
        private string $nome;
        private float $salario;
        private string $cargo;
        private string $endereco;
        private string $telefone;

        //Construtor
        public function __construct(int $matricula, 
                                    string $nome, 
                                    float $salario, 
                                    string $cargo, 
                                    string $endereco, 
                                    string $telefone)
        {
            $this->matricula = $matricula;
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cargo = $cargo;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
        }//Fim do construct

        public function getMatricula():int
        {
            return $this->matricula;
        }//Fim do getMatricula

        public function getNome():string
        {
            return $this->nome;
        }//Fim do getNome
        
        public function getSalario():float
        {
            return $this->salario;
        }//Fim do getSalario

        public function getCargo():string
        {
            return $this->cargo;
        }//Fim do getCargo

        public function getEndereco():string
        {
            return $this->endereco;
        }//Fim do getEndereco

        public function getTelefone():string
        {
            return $this->telefone;
        }//Fim do getTelefone

        public function setMatricula(int $matricula):void
        {
            $this->matricula = $matricula;
        }//Fim do setMatricula

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//Fim do setNome

        public function setSalario(float $salario):void
        {
            $this->salario = $salario;
        }//Fim do setSalario

        public function setCargo(string $cargo):void
        {
            $this->cargo = $cargo;
        }//Fim do setCargo

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//Fim do setEndereco

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//Fim do setTelefone

        public function imprimir():string
        {
            return "<br>Matrícula: " . $this->getMatricula() . 
                    "<br>Nome: " . $this->getNome() . 
                    "<br>Salário: " . $this->getSalario() . 
                    "<br>Cargo: " . $this->getCargo() . 
                    "<br>Endereço: " . $this->getEndereco() . 
                    "<br>Telefone: " . $this->getTelefone();
        }//Fim da função imprimir
    }
?>