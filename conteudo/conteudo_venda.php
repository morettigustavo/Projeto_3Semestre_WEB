<?php
include_once("../banco/connect.php");

$id_prod = $_SESSION['prod'];
$id_usuario = $_SESSION['id_usuario'];

$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE id_usuario = $id_usuario");
$line = mysqli_fetch_array($sql);

$sql2 = mysqli_query($link, "SELECT * FROM produto WHERE id_produto = $id_prod");
$line2 = mysqli_fetch_array($sql2);

?>
<label class="titulo_form">VERIFICAR COMPRA</label>
<div class="produtos">
    <form method="post" action="../banco/vender.php" name="produto">
        <b>Usúario: </b><br><br>
        <b>Nome: </b>
        <input type="text" name="nome" value="<?php echo $line['nome']?>" readonly="true" required>
        <b>Email: </b>
        <input type="email" name="email" value="<?php echo $line['email']?>" readonly="true" required>
        <b>CPF: </b>
        <input type="number" name="cpf" value="<?php echo $line['cpf']?>" readonly="true" required>
        
        <b>Produto: </b><br><br>
        <b>Nome: </b>
        <input type="text" name="nome" value="<?php echo $line2['nome']?>" readonly="true" required>
        <b>Preço: </b>
        <input type="number" name="preco" value="<?php echo $line2['valor_compra']?>" readonly="true" required><b>Quantidade: </b>
        <input type="number" name="qnt" value="<?php echo "1"?>" readonly="true" required>
        
        <b>Método de pagamento: </b><br>
        <select class="spinner" name="metodo">
            <option value="d">Dinheiro</option>
            <option value="c">Cartão</option>
        </select>
        
        <b>Número de parcela: </b><br>
        <select class="spinner" name="parcelas">
            <option value="1">1 x <?php echo number_format($line2['valor_compra']/1,2,',','.'); ?> </option>
            <option value="2">2 x <?php echo number_format($line2['valor_compra']/2,2,',','.'); ?> </option>
            <option value="3">3 x <?php echo number_format($line2['valor_compra']/3,2,',','.'); ?> </option>
            <option value="4">4 x <?php echo number_format($line2['valor_compra']/4,2,',','.'); ?> </option>
            <option value="5">5 x <?php echo number_format($line2['valor_compra']/5,2,',','.'); ?> </option>
            <option value="6">6 x <?php echo number_format($line2['valor_compra']/6,2,',','.'); ?> </option>
            <option value="7">7 x <?php echo number_format($line2['valor_compra']/7,2,',','.'); ?> </option>
            <option value="8">8 x <?php echo number_format($line2['valor_compra']/8,2,',','.'); ?> </option>
            <option value="9">9 x <?php echo number_format($line2['valor_compra']/9,2,',','.'); ?> </option>
            <option value="10">10 x <?php echo number_format($line2['valor_compra']/10,2,',','.'); ?> </option>
        </select>

        <button type="submit" id="enviar">Comprar</button><br>
        <button type="reset">Limpar</button>
    </form>
</div>