<?php
    $n = $_POST["nome"];
    $c = $_POST["cpf"];
    $s = $_POST["sexo"];


    function validar($cpf, $nome, $sexo){
        if($cpf == ""){

            echo "CPF invalido";
        } else if($nome == ""){

            echo "Nome invalido";

        } else if($sexo == ""){
            echo "Sexo invalido";

        } else {
            echo "Obrigado";
        }
    }

        validar($c, $n, $s)
?>