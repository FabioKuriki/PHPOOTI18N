<?php
    namespace PHP\Modelo\DAO;

    require_once("conexao.php");

    use PHP\Modelo\DAO\Conexao;

    class Excluir{

        function excluirCliente(Conexao $conexao,
                                string $cpf)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "delete from cliente where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br><br>Excluido com sucesso!";
                }
                else{
                    "<br><br>Não foi possível excluir!";
                }
            }
            catch(Exeception $erro)
            {
                echo $erro;
            }
        }//Fim do método
    }//Fim da classe
?>