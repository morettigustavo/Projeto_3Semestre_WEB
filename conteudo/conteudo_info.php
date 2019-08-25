<?php
include_once("../banco/connect.php");

$sql = mysqli_query($link, "SELECT * FROM usuarios WHERE id_usuario = $id_usuario");
$line = mysqli_fetch_array($sql);
?>
<label class="titulo_form">Atualizar Informações</label>
<div class="produtos">
    <form method="post" action="../banco/atualizar_info.php" name="produto">
        <b>Nome: </b>
        <input type="text" name="nome" value="<?php echo $line['nome']?>" required>
        <b>Email: </b>
        <input type="email" name="email" value="<?php echo $line['email']?>" required>
        <b>CPF: </b>
        <input type="number" name="cpf" value="<?php echo $line['cpf']?>" required>
        <b>Data de Nascimento: </b>
        <input type="date" name="data_nascimento" value="<?php echo $line['data_nascimento']?>" required>
        <b>Rua: </b>
        <input type="text" name="rua" value="<?php echo $line['rua']?>" required>
        <b>Número: </b>
        <input type="text" name="numero" value="<?php echo $line['numero']?>" required>
        <b>Bairro: </b>
        <input type="text" name="bairro" value="<?php echo $line['bairro']?>" required>
        <b>Cidade: </b>
        <input type="text" name="cidade" value="<?php echo $line['cidade']?>" required>
        <b>CEP: </b>
        <input type="number" name="cep" value="<?php echo $line['cep']?>" required>
<!--
        
        <b>Método de pagamento: </b><br>
        <select class="spinner" name="pagamento">
            <option value="d">Dinheiro</option>
            <option value="c">Cartão</option>
        </select>
-->

        <button type="submit" id="enviar">Atualizar</button><br>
        <button type="reset">Limpar</button>
    </form>
</div>