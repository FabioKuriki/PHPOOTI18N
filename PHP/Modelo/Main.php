<?php
    namespace PHP\Modelo; //Definir local do objeto

    require_once('Pessoa.php');//require = leitura | require_once = solicita a conexão da página | include = inclui
    require_once('Funcionario.php');
    require_once('Cliente.php');

    $pessoa1 = new Pessoa("132215413", "Fabio", "119787467", "Rua Sei Lá");
    $pessoa2 = new Pessoa("846487654", "Rafa", "119872335", "Rua Sei Lá");

    $funcionario1 = new Funcionario(132, "Roberto", 1500.50, "Empregado", "Rua podre de rico", "11975345646");

    $cliente1 = new Cliente("11564464646", "Felicia", "1196824654", "Rua Alvares da Silva", "25/07/2024", 5000.65);

    echo $pessoa1->imprimir();
    echo $pessoa2->imprimir();

    echo $funcionario1->imprimir();

    echo $cliente1->imprimir();
?>