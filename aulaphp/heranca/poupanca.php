<?php
       include('Conta.php');
       
       
       class poupanca extends Conta{
            private $taxa;

            public function getTaxa(){
                return $this->taxa;
            }
                public function setCartao($taxa){
                    $this->taxa = $taxa;
                }
        }






?>