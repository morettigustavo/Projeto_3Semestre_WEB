<?php 
include "../banco/connect.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * from produto where id_produto = '$id'";
$query = mysqli_query($link, $sql);
$img = 0;

while($line = mysqli_fetch_array($query)){
    $img1 = "prod".$line['id_produto']."/imagem1.png";
    $img2 = "prod".$line['id_produto']."/imagem2.png";
    $img3 = "prod".$line['id_produto']."/imagem3.png";
    $img4 = "prod".$line['id_produto']."/imagem4.png";
?>
<table class="tabelaImagens">
    <tr>
<?php
if(file_exists("../banco/produtos/$img1")){ $img++; ?>
        <td><img src="../banco/produtos/<?php echo $img1; ?>" class="imagemPequena" onclick="mudarImagem(1)" id="img1"></td>
<?php }
if(file_exists("../banco/produtos/$img2")){
    $img++;
?>
        <td><img src="../banco/produtos/<?php echo $img2; ?>" class="imagemPequena" onclick="mudarImagem(2)" id="img2"></td>
<?php
}
if(file_exists("../banco/produtos/$img3")){
    $img++;
?>
        <td><img src="../banco/produtos/<?php echo $img3; ?>" class="imagemPequena" onclick="mudarImagem(3)" id="img3"></td>
<?php
}
if(file_exists("../banco/produtos/$img4")){
    $img++;
?> 
        <td><img src="../banco/produtos/<?php echo $img4; ?>" class="imagemPequena" onclick="mudarImagem(4)" id="img4"></td>
<?php
}
?> 
        <td rowspan="2" style="width: 50%; text-align: center;">
            <label class="texto_produto titulo" style="font-size: 30px;"><?php echo $line['nome']; ?></label><br><br><br>
            <label class="texto_produto" style="color: green; font-size: 30px;">10x de <?php echo number_format($line['valor_compra']/10,2,',','.'); ?></label><br>
            <label class="texto_produto" style="color: red; font-size: 30px;">à vista R$<?php echo number_format($line['valor_compra'],2,',','.'); ?></label><br>
            <label class="texto_produto" style="font-size: 30px;">no boleto com 10% de desconto</label><br><br><br>
            <a class="compra" href="carrinho.php?id=<?php echo $line['id_produto']; ?>">Comprar Produto</a>
        </td>
    </tr>
    <tr class="linha">
        <td colspan="<?php echo $img; ?>"><img src="../banco/produtos/<?php echo $img1; ?>" id="imagemGrande"></td>
    </tr>
</table>
<script>
    function mudarImagem(imagem) {
        var endereco = document.getElementById("img"+imagem).src;
        document.getElementById("imagemGrande").src = endereco;
    }

</script>
<?php 
}
}else{
    echo "<script>window.location.href = '../index.php'</script>";
}
?>