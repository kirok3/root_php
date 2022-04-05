<?php
    include("conta.php");

    $minhaConta = new Conta();
    
    $minhaConta->titular = "Maria";
    $minhaConta->numero = 01234;
    $minhaConta->saldo = 0;

    $minhaConta->depositar(1535.99);

    echo $minhaConta->exibir();

?>