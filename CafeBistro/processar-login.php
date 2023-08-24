<?php
require "autenticacao.php";
require "conexao.php";

if ($SERVER["REQUEST_METHOD"]=="POST"){
    $_POST["email"];
    $_POST["senha"];


    $login = new autenticacao($email($conn));

    if($login->verificarusuario($email, $senha)){
        header("Location: index.php");
        exit;
    }else{
        header("Location: login.php?erro1");
    }


}

?>