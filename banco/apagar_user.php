<?php
session_start();
include ("../geral/head.php");
include ("connect.php");
$id = $_SESSION['id_usuario'];

$sql = "UPDATE usuarios SET ativo = 0 WHERE id_usuario = $id";
mysqli_query($link, $sql);

unset($_SESSION['id_usuario']);
echo "<script>alert('Usuário Excluido Com sucesso')</script>";
echo "<script>window.history.go(-1)</script>";
?>