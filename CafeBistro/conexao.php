<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro_phpoo_turmaA";

//criação da conexão
$conn = new mysqli($servername, $username, $password, $databasename);

// verificcando a conexão
if (!$conn){
    die("conexão falhou".mysqli_connect_error());
}else{
    echo "conectou";
};
