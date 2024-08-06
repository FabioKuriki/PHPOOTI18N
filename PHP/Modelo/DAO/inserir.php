<?php
    namespace PHP\Modelo\DAO;

    require_once('conexao.php');
    require_once('Endereco.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Endereco;

    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $cpf;
        public string $nome;
        public string $telefone;   
        public string $dtNascimento;
        public float $totalCompras;

        function cadastrarCliente(Conexao $conexao,
                                  string $cpf,
                                  string $nome,
                                  string $telefone,
                                  string $dtNascimento,
                                  float $totalCompras,
                                  int $codEndereco)
        {
            try{
                $conn = $conexao->conectar();//guarda o $conn da funcao em $conn
                $sql = "Insert into cliente (cpf, nome, telefone, 
                dtNascimento, totalDeCompras, codEndereco) values 
                ('$cpf', '$nome', '$telefone',
                '$dtNascimento', '$totalCompras', '$codEndereco')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);
                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Exception $erro){
                return $erro;
            }
        }//Fim do cadastrarCliente

        function cadastrarEndereco(Conexao $conexao,
                                    int $codigo,
                                    string $logradouro,
                                    int $numero,
                                    string $bairro,
                                    string $cidade,
                                    string $estado,
                                    string $uf,
                                    string $pais,
                                    string $cep)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into endereco (codigo, logradouro,
                bairro, cidade, estado, uf, pais, cep, numero) values
                ('$codigo', '$logradouro', '$bairro', '$cidade',
                '$estado', '$uf', '$pais', '$cep', '$numero')";
                $result = mysqli_query($conn, $sql);
    
                mysqli_close($conn);
                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Exception $erro){
                return $erro;
            }        
        }//Fim do cadastrarEndereco
    }
?>