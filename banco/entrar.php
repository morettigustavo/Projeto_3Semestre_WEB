<?php
include ("../geral/head.php");
include_once("connect.php");

$email = $_POST['email_log'];
$senha = $_POST['senha_log'];

$senha = md5($senha);

$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$email'");
$line = mysqli_fetch_array($sql);

if($line && $line['ativo'] == 1){
    $sql = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");
    $line = mysqli_fetch_array($sql);
    if($line){
        echo "<script>window.history.go(-1)</script>";
        echo "<script>alert('Logado com Sucesso')</script>";
        session_start();
        $_SESSION['id_usuario'] = $line['id_usuario'];
    }else{
        echo "<script>window.history.go(-1)</script>";
        echo "<script>alert('Senha Errada')</script>";
    }
        
}else{
    echo "<script>window.history.go(-1)</script>";
    echo "<script>alert('Usuário não cadastrado, ou não encontrado')</script>";
}
?>