<?php
        include('Corrente.php');
        

        $minhaconta = new Corrente();
        $minhaconta->setTitular("joao");
        $minhaconta->setSaldo(100);
        $minhaconta->setCartao("1234.5678.9101");
        
        echo "Titular:" .  $minhaconta->getTitular()
        . "<br>Saldo:" . $minhaconta->getSaldo()
        . "<br>Cartao:" . $minhaconta->getCartao();


               

?>
