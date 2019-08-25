<?php
include ("../geral/head.php");
include_once("connect.php");

$nome = $_POST['nome_reg'];
$email = $_POST['email_reg'];
$senha = $_POST['senha_reg'];

$senha = md5($senha);

$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$email'");
$line = mysqli_fetch_array($sql);

print_r($line);
if($line){
    echo "<script>window.history.go(-1)</script>";
    echo "<script>alert('E-mail já Cadastrado')</script>";
}else{
    mysqli_query($link, "INSERT INTO usuarios (nome, email, senha) values ('$nome','$email','$senha')");
    echo "<script>alert('Usuário Cadastrado com Sucesso')</script>";
    
    session_start();
    $sql = mysqli_query($link, "SELECT id_usuario FROM usuarios order by id_usuario desc limit 1");
    $line = mysqli_fetch_array($sql);
    $_SESSION['id_usuario'] = $line['id_usuario'];
    
    mysqli_close($link);
    echo "<script>window.history.go(-1)</script>";
}
?>