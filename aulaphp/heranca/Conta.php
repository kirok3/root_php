<?php
    class Conta {
        private $titular;
        private $saldo;

        public function getTitular(){
                return $this->titular;
        }

        public function setTitular($titular){
            $this->titular = $titular;
        }
        
        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

    }

?>