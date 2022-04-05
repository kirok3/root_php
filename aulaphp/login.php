<?php
   include ("Usuario.php");

   $login = $_POST ["login"];
   $senha = $_POST ["senha"];

   $usuario = new Usuario();
   $usuario->login = $login;
   $usuario->senha = $senha;

   if($usuario->validar()){
       echo "login realizado com sucesso";
   }else {
       echo "login e senha inválidos";
   }

?>