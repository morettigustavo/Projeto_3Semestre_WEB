<a href="../index.php"><img src="../imagens/logo.png" class="imagem_topo"/></a>
<?php 
if (!isset($_SESSION)) {
	session_start();
}

$id_usuario = isset($_SESSION['id_usuario'])?$_SESSION['id_usuario']:0;
if($id_usuario){ ?>
<form method="post" action="../banco/sair.php" style="display: inline;">
    <button style="width:auto; float:right; width: auto;">Sair</button>
</form>
<form method="post" action="../banco/apagar_user.php" style="display: inline;">
    <button style="width:auto; float:right; width: auto;">Apagar Usuário</button>
</form>
<?php }else{ ?>

<button onclick="openModal(2)" style="width:auto; float:right; width: auto;">Entrar</button>
<button onclick="openModal(1)" style="width:auto; float:right; width: auto;">Registrar</button>

<div id="id01" class="modal">
    <form name="form1" class="modal-content animate" action="../banco/cadastrar.php" method="post">
        <div class="container">
            <label><b>Nome</b></label>
            <input type="text" placeholder="Nome" id="nome_reg" name="nome_reg" required>

            <label><b>E-mail</b></label>
            <input type="email" placeholder="E-mail" id="email_reg" name="email_reg" required>

            <label><b>Senha</b></label>
            <input type="password" placeholder="Senha" id="senha_reg" name="senha_reg" required>

            <label><b>Senha Novamente</b></label>
            <input type="password" placeholder="Senha Novamente" id="senha_novamente_reg" name="senha_novamente_reg" required>

            <button type="button" onclick="verificar()">Entrar</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="closeModal(1)" class="cancelbtn">Fechar</button>
            <span class="psw">Já tem registo? <a href="#" onclick="closeModal(1); openModal(2);" style="padding: 0;">Entrar</a></span>
        </div>
    </form>
</div>

<div id="id02" class="modal">
    <form name="form2" class="modal-content animate" action="../banco/entrar.php" method="post">
        <div class="container">
            <label><b>E-mail</b></label>
            <input type="email" placeholder="E-mail" id="email_log" name="email_log" required>

            <label><b>Senha</b></label>
            <input type="password" placeholder="Senha" id="senha_log" name="senha_log" required>

            <button type="button" onclick="verificar2();">Entrar</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="closeModal(2)" class="cancelbtn">Fechar</button>
            <span class="psw">Não tem registro ainda? <a href="#" onclick="closeModal(2); openModal(1);" style="padding: 0;">Registrar-se</a></span>
        </div>
    </form>
</div>

<?php } ?>