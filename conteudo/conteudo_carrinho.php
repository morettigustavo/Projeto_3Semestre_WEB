<?php 
include "../banco/connect.php";

$id = $_GET['id'];
$_SESSION['prod'] = $id;

$sql = "SELECT * from produto where id_produto = $id";
$query = mysqli_query($link, $sql);

while($line = mysqli_fetch_array($query)){
    $img = "prod".$line['id_produto']."/imagem1.png";
?>
<p class="titulo_carro">Seu Carrinho de Compras</p>
<table class="produtos">
    <tr>
        <th>Imgem</th>
        <th>Produto ID</th>
        <th>Produto</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <th><img src="../banco/produtos/<?php echo $img; ?>" class="imagemTabela"></th>
        <td><input size="5" value="<?php echo $id; ?>" readonly="true"></td>
        <td>
            <p id="nome"><?php echo $line['nome']; ?></p>
        </td>
        <td>R$<span id="subtotal" name="valor"><?php echo number_format($line['valor_compra'],2,',','.'); ?></span></td>
    </tr>
</table>
<a class="compra" href="usuario_cadastrar_info.php">Finalizar<br>Compra</a>
<?php 
}
?>
