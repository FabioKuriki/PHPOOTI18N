<?php
    namespace PHP\Modelo;

    //Como todas as classes tem o atributo endereco, para facilitar as coisas crie um classe própria
    class Endereco{
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $uf;
        private string $pais;
        private string $cep;

        //Construtor
        public function __construct(string $logradouro,
                                    int $numero,
                                    string $bairro,
                                    string $cidade,
                                    string $estado,
                                    string $uf,
                                    string $pais,
                                    string $cep)
        {
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->uf = $uf;
            $this->pais = $pais;
            $this->cep = $cep;
        }//Fim do __construct

        public function __get(string $campo){
            return $this->campo;
        }//Fim do get genérico

        //$campo (variável/atributo) $valor (valor dessa variável)
        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//Fim do set genérico

        public function imprimir():string{
            return "<br>Logradouro: " . $this->logradouro . 
                    "<br>Número: " . $this->numero . 
                    "<br>Bairro: " . $this->bairro . 
                    "<br>Cidade: " . $this->cidade .  
                    "<br>Estado: " . $this->estado . 
                    "<br>UF: " . $this->uf . 
                    "<br>País: " . $this->pais . 
                    "<br>CEP: " . $this->cep;
        }//Fim do imprimir
    }
?>