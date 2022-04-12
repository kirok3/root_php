<?php

    class Estoque{
        public $nome;
        public $qtdAtual;
        public $qtdMinima;

        public function mudarnome($nome){
            $this -> nome = $nome;


        }
        public function mudarQtdMinima($qtdMinima){
            $this->qtdAtual = $qtdMinima;

        }
        public function repor($qtd){
            $this->qtdAtual += $qtd;
        
        }
        public function darBaixa($qtd){
            $this -> qtdAtual -= $qtd;
        
        }
        public function mostrar(){
            return "nome: " . $this->nome . "<br>".
            "Qtd atual: " . $this->qtdAtual . "<br>".
            "Qtd Minima: " . $this->qtdMinima;
        }
        public function precisaRepor(){
            if ($this->qtdAtual <= $this->qtdMinima){
                return true;
            } else {
                return false;
            }
        }

    }




?>