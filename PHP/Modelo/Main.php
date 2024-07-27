<?php
    namespace PHP\Modelo; //Definir local do objeto

    require_once('Pessoa.php');//require = leitura | require_once = solicita a conexão da página | include = inclui
    require_once('Funcionario.php');
    require_once('Cliente.php');
    require_once('Endereco.php');

    $enderecoCliente1 = new Endereco("Rua Senac" , "584", "Azevedo", "SBC", "São Paulo", "SP", "Brasil", "9887654-45");
    $cliente1 = new Cliente("513456465", "Fabio", "1195457657", $enderecoCliente1, "30/02/2024", 2500.45);

    echo $cliente1->imprimir();
    echo $enderecoCliente1->imprimir();

    echo "<br><br>";
    
    $enderecoFuncionario1 = new Endereco("Rua São Pedro" , "15", "Das Nuvens", "Santo André", "São Paulo", "SP", "Brasil", "46877687-45");
    $funcionario1 = new Funcionario("1354545454", "546", "Davi", 1500, "Gerente", $enderecoCliente1, "4546-4687");

    echo $funcionario1->imprimir();
    echo $enderecoFuncionario1->imprimir();
?>