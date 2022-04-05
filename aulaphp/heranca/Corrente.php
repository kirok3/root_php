<?php
    include ('Conta.php');

    class Corrente extends Conta{
        private $cartao;
        
        public function getCartao(){
            return $this->cartao;
        }
            public function setCartao($cartao){
                $this->cartao = $cartao;
            }
        
        }
    







?>