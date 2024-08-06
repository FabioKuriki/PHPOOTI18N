<?php
    namespace PHP\Modelo; //Definir local do objeto

    //require na página que irá usar
    require_once('Pessoa.php');//require = leitura | require_once = solicita a conexão da página | include = inclui
    require_once('Funcionario.php');
    require_once('Cliente.php');
    require_once('Endereco.php');
    require_once('DAO/conexao.php');//Direcionar
    require_once('DAO/inserir.php');
    require_once('DAO/consultar.php');
    require_once('DAO/atualizar.php');
    require_once('DAO/excluir.php');

    use PHP\Modelo\DAO\Conexao;//Pegar o arquivo porque está em outra pasta diferente das demais classes
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

    $conexao = new Conexao();
    $inserir = new Inserir();
    $consultar = new Consultar();
    $atualizar = new Atualizar();
    $excluir = new Excluir();

    /*
    echo $inserir->cadastrarEndereco($conexao, 1,"Rua Senac" , "584", "Azevedo", 
                                "SBC", "São Paulo", "SP", "Brasil", 
                                "9887654-45");
    echo $inserir->cadastrarCliente($conexao, "513456465", "Fabio", "1195457657", 
                                "30/02/2024", 2500.45, 1);
    
    
    $consultar->consultarIndividual($conexao, "cliente", "cpf", "513456465");
    echo "<br>";
    $consultar->consultarTudo($conexao, "cliente");
    
    $atualizar->atualizarCliente($conexao, "nome", "Javi", "513456465");
    */

    $excluir->excluirCliente($conexao, "513456465");
   
    /*
    $enderecoCliente1 = new Endereco("Rua Senac" , "584", "Azevedo", "SBC", "São Paulo", "SP", "Brasil", "9887654-45");
    $cliente1 = new Cliente("513456465", "Fabio", "1195457657", $enderecoCliente1, "30/02/2024", 2500.45);

    echo $cliente1->imprimir();
    echo $enderecoCliente1->imprimir();

    echo "<br><br>";
    
    $enderecoFuncionario1 = new Endereco("Rua São Pedro" , "15", "Das Nuvens", "Santo André", "São Paulo", "SP", "Brasil", "46877687-45");
    $funcionario1 = new Funcionario("1354545454", "546", "Davi", 1500, "Gerente", $enderecoFuncionario1, "4546-4687");

    echo $funcionario1->imprimir();
    echo $enderecoFuncionario1->imprimir();
    */
    
?>