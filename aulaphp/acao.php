<?php

    $nome = $_POST["nome"];
    $nota2 = $_POST["n2"];
    $nota3 = $_POST["n3"];

    $media = ($nota2 + $nota3)/2;
    if($media >= 7){
        $resultado = "aprovado";

        }else {
        $resultado = " reprovado";
    }
    
    echo  $nome .  "Você foi"  . $resultado
    .  "com a media"  . $media;

?>