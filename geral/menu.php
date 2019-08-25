<?php 
    
include_once("../banco/connect.php");

$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
$line = mysqli_fetch_array($sql);

?>
<ul>
    <li><a href="../">Home</a></li>
    <li><a href="../conteudo/../conteudo/produtos.php?t=0">Jogos</a>
        <ul>
            <li><a href="../conteudo/produtos.php?t=0&c=0">PS4</a></li>
            <li><a href="../conteudo/produtos.php?t=0&c=1">XBOX</a></li>
        </ul>
    </li>
    <li><a href="../conteudo/produtos.php?t=1">Periféricos</a>
        <ul>
            <li><a href="../conteudo/produtos.php?t=1&c=0">MOUSE</a></li>
            <li><a href="../conteudo/produtos.php?t=1&c=1">TECLADO</a></li>
            <li><a href="../conteudo/produtos.php?t=1&c=2">FONE</a></li>
        </ul>
    </li>
    <li><a href="../conteudo/produtos.php?t=2">Hardware</a>
        <ul>
            <li><a href="../conteudo/produtos.php?t=2&c=0">PROCESSADOR</a></li>
            <li><a href="../conteudo/produtos.php?t=2&c=1">MEMÓRIA RAM</a></li>
            <li><a href="../conteudo/produtos.php?t=2&c=2">PLACA DE VÍDEO</a></li>
            <li><a href="../conteudo/produtos.php?t=2&c=3">COOLER</a></li>
        </ul>
    </li>  
<?php if($line['nivel']==9){?>
   <li><a>Administrar</a>
        <ul>
            <li><a href="../conteudo/produto_cadastrar.php">Adicionar Produto</a></li>
            <li><a href="../conteudo/relatorio.php">Gerar Relatório</a></li>
        </ul>
    </li>  
<?php } ?>
</ul>
