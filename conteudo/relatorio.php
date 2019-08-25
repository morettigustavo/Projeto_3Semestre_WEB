<?php
session_start();

$id_usuario = isset($_SESSION['id_usuario'])?$_SESSION['id_usuario']:0;

if($id_usuario){ ?>
<html>
<head>
    <?php include "../geral/head.php"?>
    <link type="text/css" rel="stylesheet" href="../css/produto.css">
</head>
<body>
    <div class="geral">
        <div class="topo">
            <?php include "../geral/topo.php"?>
        </div>
        <div class="menu">
            <?php include "../geral/menu.php"?>
        </div>
        <div class="conteudo">
            <?php include "conteudo_relatorio.php"?>  
        </div>
        <div class="rodape">
            <?php include "../geral/rodape.php"?>
        </div>
    </div>
</body>
<script src="../scripts/modal.js"></script>
</html>
<?php }else{?>
    <script>window.location.href = "../index.php";</script>
<?php } ?>