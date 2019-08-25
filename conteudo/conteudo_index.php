<?php 
include "../banco/connect.php";
$sql = "SELECT * from produto order by id_produto desc";
$query = mysqli_query($link, $sql);

while($line = mysqli_fetch_array($query)){
    $img = "prod".$line['id_produto']."/imagem1.png";
?>
<div class="produto">
    <img src="../banco/produtos/<?php echo $img; ?>" class="imagem_produto">
    <label class="texto_produto titulo"><?php echo $line['nome']; ?></label><br>
    <label class="texto_produto" style="color: green;">10x de R$<?php echo number_format($line['valor_compra']/10,2,',','.'); ?></label><br>
    <label class="texto_produto" style="color: red;">à vista R$<?php echo number_format($line['valor_compra'],2,',','.'); ?></label><br>
    <label class="texto_produto">no boleto com 10% de desconto</label><br><br>
    <a class="btnDetalhes texto_produto" href="detalhes.php?id=<?php echo $line['id_produto']; ?>">Detalhes</a>
    <a class="btnComprar texto_produto" href="carrinho.php?id=<?php echo $line['id_produto']; ?>"">Comprar</a>
</div>
<?php 
}
?>