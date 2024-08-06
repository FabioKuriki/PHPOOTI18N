<?php
    namespace PHP\Modelo\DAO;

    require_once('conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Atualizar{

        function atualizarCliente(Conexao $conexao,
                                  string $campo,
                                  string $novoDado,
                                  string $cpf)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "update cliente set $campo = '$novoDado'
                        where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br><br>Atualizado com sucesso!";
                }
                else{
                    "<br><br>Não foi possível atualizar!";
                }
            }
            catch(Exeception $erro)
            {
                echo $echo;
            }
        }// Fim do atualizarCliente
    }//Fim da classe Atualizar
?>