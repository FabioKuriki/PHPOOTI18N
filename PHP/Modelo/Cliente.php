<?php
    namespace PHP\Modelo;

    class Cliente{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private date $dtNascimento;
        private float $totalCompras;

        //Construtor
        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $endereco,
                                    date $dtNascimento,
                                    float $totalCompras)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->dtNascimento = $dtNascimento;
            $this->totalCompras = $totalCompras;
        }

        public function getCPF():string
        {
            return $this->cpf;
        }//Fim do getCPF

        public function getNome():string
        {
            return $this->nome;
        }//Fim do getNome

        public function getTelefone():string
        {
            return $this->telefone;
        }//Fim do getCPF

        public function getEndereco():string
        {
            return $this->endereco;
        }//Fim do getEndereco

        public function getDtNascimento():date
        {
            return $this->dtNascimento;
        }//Fim do getDtNascimento

        public function getTotalCompras():float
        {
            return $this->totalCompras;
        }//Fim do getTotalCompras

        public function setCPF(string $cpf):void
        {
            $this->cpf = $cpf;
        }//Fim do setCPF

        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//Fim do setNome

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//Fim do setTelefone

        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//Fim do setEndereco

        public function setDtNascimento(date $dtNascimento):void
        {
            $this->dtNascimento = $dtNascimento;
        }//Fim do setDtNascimento

        public function setTotalCompras(float $totalCompras):void
        {
            $this->totalCompras = $totalCompras;
        }//Fim do setTotalCompras

        public function imprimir()
        {
            return "<br>CPF: " . $this->getCPF() . 
                    "<br>Nome: " . $this->getNome() . 
                    "<br>Telefone: " . $this->getTelefone() . 
                    "<br>Endereco: " . $this->getEndereco() . 
                    "<br>Data de Nascimento: " . $this->getDtNascimento() . 
                    "<br>Total de Compras: " . $this->getTotalCompras();
        }//Fim do imprimir

    }//Fim da classe

?>