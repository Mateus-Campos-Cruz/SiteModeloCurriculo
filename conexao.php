<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "curriculonews";

$con = mysqli_connect($localhost, $user, $pass, $banco);
if(!$con){
    die("Houve um erro: ".mysqli_connect_error());
}

?>