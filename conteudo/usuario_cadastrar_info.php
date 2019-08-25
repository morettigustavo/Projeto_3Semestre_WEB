<?php
session_start();

$id_usuario = isset($_SESSION['id_usuario'])?$_SESSION['id_usuario']:0;

?>
<html>
<head>
    <?php include "../geral/head.php"?>
    <link type="text/css" rel="stylesheet" href="../css/produto.css">
    <script src="../scripts/modal.js"></script>
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
<?php
if($id_usuario){
    include "conteudo_info.php";
}else{ ?>
            <script>
                openModal(2);
            </script>
<?php } ?>
        </div>
        <div class="rodape">
            <?php include "../geral/rodape.php"?>
        </div>
    </div>
</body>
</html>