<?php
    class Usuario {

        public $login;
        public $senha;

        public function validar(){
            if($this->login == "joão" && $this->senha == "123"){
                return true;

            }else {
                return false;
            }
        }
    }


?>