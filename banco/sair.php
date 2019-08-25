<?php
include ("../geral/head.php");
session_start();
unset($_SESSION['id_usuario']);
echo "<script>window.history.go(-1)</script>";
?>