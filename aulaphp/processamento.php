<?php
    $nome = $_POST["nome"];
    $salario = $_POST["Salario"];
    $cargo = $_POST["Cargo"];
?>

<html>
<head>
    <title>processamento</title>
</head>

<body>
    <h2>Cadastro Realizado com Sucesso</h2>
    <p>Nome:<?php echo $nome ?></p>
    <p>Salario:<?php echo $salario ?></p>
    <p>Cargo:<?php echo $cargo ?></p>
</body>
</html>
