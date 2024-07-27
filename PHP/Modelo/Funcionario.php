<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    //extends serve para herdar as variaveis da class Pessoa
    class Funcionario extends Pessoa{
        protected int $matricula;
        protected float $salario;
        protected string $cargo;

        //Construtor
        public function __construct(string $cpf,
                                    int $matricula, 
                                    string $nome, 
                                    float $salario, 
                                    string $cargo, 
                                    Endereco $endereco, 
                                    string $telefone)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->matricula = $matricula;
            $this->salario = $salario;
            $this->cargo = $cargo;
        }//Fim do construct

        public function __get(string $nome)
        {
            return $this->campo;
        }//Fim do get genérico

        public function __set(string $campo, string $valor):void
        {
            $this->campo = $valor;
        }//Fim do set genérico

        public function imprimir():string
        {
            return parent::imprimir() . 
                    "<br>Matrícula: " . $this->matricula . 
                    "<br>Salário: " . $this->salario . 
                    "<br>Cargo: " . $this->cargo ;
        }//Fim da função imprimir
    }
?>