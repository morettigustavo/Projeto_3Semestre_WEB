<?php
include ("../geral/head.php");
include_once("connect.php");

session_start();

$id = $_SESSION['id_usuario'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', cpf = '$cpf', data_nascimento = '$data_nascimento', cep = '$cep', rua = '$rua', numero = '$numero', bairro = '$bairro', cidade = '$cidade' WHERE id_usuario = '$id'";

$query = mysqli_query($link, $sql) or die (mysqli_error());


if($query){ 
        echo "<script>alert('Cadastro atualizado com Sucesso')</script>";
        echo "<script>window.location.href = '../conteudo/vender.php';</script>";
    }else{
        echo "<script>window.location.href = '../conteudo/usuario_cadastrar_info.php';</script>";
        echo "<script>alert('Atualização falhou')</script>";
    }

?>