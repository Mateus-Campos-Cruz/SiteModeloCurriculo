<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];

echo "Nome: " .$nome."<br>"; 
echo "Email: " .$email."<br>";
echo "Mensagem: " .$msg;

//$con = mysqli_connect('localhost','root','');

$sql = "INSERT INTO dadosusuario(nome, email, msg) VALUES('$nome', '$email', '$msg')";

if(mysqli_query($con, $sql)){
    echo "Usuário cadastrado com sucesso!";
}
else{
    echo "Erro.".mysqli_connect_error($con);
}

mysqli_close($con);


header("Location: ".$_SERVER['HTTP_REFERER']."");


?>