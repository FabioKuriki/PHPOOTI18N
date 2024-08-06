<?php
    namespace PHP\Modelo\DAO;

    require_once('conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Consultar{

        function consultarIndividual(Conexao $conexao,
                                  string $nomeTabela,
                                  string $nomeCampo,
                                  string $codigo)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela where $nomeCampo = '$codigo'";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $codigo){
                        echo "<br>CPF: " . $dados["cpf"] . 
                            "<br>Nome: " . $dados["nome"] . 
                            "<br>Telefone: " . $dados["telefone"] . 
                            "<br>Data de Nascimento: " . $dados["dtNascimento"] . 
                            "<br>Total de Compras: " . $dados["totalDeCompras"];
                        return; //Encerrando um processo para ver só um dado específico
                    }
                    echo "CPF digitado não é válido!"; 
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function consultarTudo(Conexao $conexao,
                                string $nomeTabela)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>CPF: " . $dados["cpf"] . 
                        "<br>Nome:" . $dados["nome"] . 
                        "<br>Telefone: " . $dados["telefone"] . 
                        "<br>Data de Nascimento: " . $dados["dtNascimento"] . 
                        "<br>Total de Compras: " . $dados["totalDeCompras"];
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }
        }
    }//Fim da classe
?>