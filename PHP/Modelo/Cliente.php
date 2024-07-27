<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    class Cliente extends Pessoa{
        protected string $dtNascimento;
        protected float $totalCompras;

        //Construtor
        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco,
                                    string $dtNascimento,
                                    float $totalCompras)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->dtNascimento = $dtNascimento;
            $this->totalCompras = $totalCompras;
        }

        public function __get(string $campo)
        {
            return $this->campo;
        }//Fim do get genérico

        public function __set(string $campo, string $valor):void
        {
            $this->campo = $valor;
        }//Fim do set genérico

        public function imprimir():string
        {
            return  parent::imprimir() .
                    "<br>Data de Nascimento: " . $this->dtNascimento . 
                    "<br>Total de Compras: " . $this->totalCompras;
        }//Fim do imprimir

    }//Fim da classe

?>