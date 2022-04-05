<?php

    class Contador{

        public $cont;


        public function zerar(){
            $this->cont = 0;
        }
        public function incrementar(){
            $this->cont++;
        }

        public function retorna(){
            return $this->cont;
        }
    }

?>