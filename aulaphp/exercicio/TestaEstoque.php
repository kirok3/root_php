<?php
        include ("Produto.php");

        $meuestoque = new Produto();
        $meuestoque->nome = "Monitor LDC 15";
        $meuestoque->quanEstoque = 150;
        $meuestoque->valorVenda = 230.50;

        echo "Nome do Produto: " . $meuestoque->nome . "<br>".
        "Quantidade do Produto: " . $meuestoque->quanEstoque . "<br>".
        "Valor da Venda: " . $meuestoque->valorVenda . "<br>";

        $meuestoquedois = new Produto();
        $meuestoquedois->nome = "Mouse Optico";
        $meuestoquedois->quanEstoque = 25;
        $meuestoquedois->valorVenda = 35.68;

        echo "Nome do Produto: " . $meuestoquedois->nome . "<br>".
        "Quantidade do produto: " . $meuestoquedois->quanEstoque . "<br>".
        "Valor da Venda: " . $meuestoquedois->valorVenda . "<br>";
?>