<?php
include ("../geral/head.php");
session_start();
include_once("connect.php");

$id = $_SESSION['id_usuario'];
$prod = $_SESSION['prod'];
$qnt = $_POST['qnt'];
$data = date('Y-m-d');
$hora = date('H:i:s');
$parcelas = $_POST['parcelas'];
$metodo = $_POST['metodo'];

$sql = "INSERT INTO vendas (id_usuario, id_produto, data, hora, num_parcelas, tipo_pagamento, qnt) VALUES ('$id' , '$prod', '$data', '$hora', '$parcelas', '$metodo', '$qnt')";

$query = mysqli_query($link, $sql) or die (mysqli_error());

if($query){ 
        echo "<script>alert('Venda realizada com sucesso')</script>";
        echo "<script>window.location.href = '../conteudo/';</script>";
    }else{
        echo "<script>window.location.href = '../conteudo/vender.php';</script>";
        echo "<script>alert('Venda não realizada')</script>";
    }

?> 