<?php


    Class Conta {

        public $numero;
        public $titular;
        public $saldo;


        public function depositar ($valor){
            $this-> saldo += $valor;

        }
            public function exibir(){
                return "-------------------------Banco Senac--------------" .   "<br>".
                "Número......:" . $this->numero . "<br>".
                "Titular.....:" .$this->titular . "<br>".
                "saldo.......:" . $this->saldo;
            }
            
    }

    ?>