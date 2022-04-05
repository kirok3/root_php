<html>
<head>
    <title>Cadastro de Funcionarios</title>
</head>

<body>
    <form method="post" action="processamento.php">
        <p>Nome:<input type="text" name="nome"></p>
        <p>Salario:<input type="text" name="Salario"></p>
        <p>Cargo:<input type="text" name="Cargo"></p>
        <select name = "cargo">
            <option value="Chefe">Chefe</option>
            <option value="Severino">Severino</option>
            <option value="Cargo">Cargo</option>
        </select><p>
        <p><input type="submit" value="Gravar"></p>
    </form>
    
</body>
</html>
