<label class="titulo_form">Adicionar Produto</label>
<div class="produtos">
    <form method="post" action="../banco/cadastrar_produto.php" enctype="multipart/form-data" name="produto">
        <b>Insira o Nome do produto</b>
        <input type="text" name="nome_prod" size="60" maxlength="60" required>
        <b>Insira o Código de barras do produto</b>
        <input type="number" name="cod_prod" id="codigo" required>
        <b>Preço do produto</b>
        <input type="number" name="preco_prod" id="preco_prod" step="0.01" required>
        <b>Quantidade em estoque</b>
        <input type="number" name="estoque_prod" id="estoque_prod" required>
        <b>Selecione a Imagem Capa</b><br><br>
        <input type="file" name="foto1" accept="image/png, image/gif, image/jpeg" id="foto1" required><br><br>
        <b>Selecione as Imagem Apresentação</b><br><br>
        <input type="file" name="foto2" accept="image/png, image/gif, image/jpeg" id="foto2" required><br>
        <input type="file" name="foto3" accept="image/png, image/gif, image/jpeg" id="foto3" required><br>
        <input type="file" name="foto4" accept="image/png, image/gif, image/jpeg" id="foto4" required><br><br>
        <b>Escolha o tipo de produto</b><br><br>
        <select name="tipo" id="tipo" class="spinner">
            <option value="0">JOGOS</option>
            <option value="1">PERIFÉRICOS</option>
            <option value="2">HARDWARE</option>
        </select><br><br>
        
        <b>Escolha a categoria do produto</b><br><br>
        <select name="categoria" id="categoria" class="spinner">
            <option value="0">PS4</option>
            <option value="1">XBOX</option>
        </select>

        <button type="button" id="enviar">Adicionar</button><br><br>
        <button type="reset">Limpar</button>
    </form>
</div>
<script>
    document.getElementById("tipo").onclick = function () {
        var cTipo = document.getElementById("tipo");
        var cCategoria = document.getElementById("categoria");
        
        while (cCategoria.length) {
            cCategoria.remove(0);
        };
        
        switch(cTipo.selectedIndex){
            case 0:
                var opt0 = document.createElement("option");
                opt0.value = "0";
                opt0.text = "PS4";
                cCategoria.add(opt0, cCategoria.options[0]);
                
                var opt1 = document.createElement("option");
                opt1.value = "1";
                opt1.text = "XBOX";
                cCategoria.add(opt1, cCategoria.options[1]);
                break;
                
            case 1:
                var opt0 = document.createElement("option");
                opt0.value = "0";
                opt0.text = "MOUSE";
                cCategoria.add(opt0, cCategoria.options[0]);
                
                var opt1 = document.createElement("option");
                opt1.value = "1";
                opt1.text = "TECLADO";
                cCategoria.add(opt1, cCategoria.options[1]);
                
                
                var opt2 = document.createElement("option");
                opt2.value = "2";
                opt2.text = "FONE";
                cCategoria.add(opt2, cCategoria.options[2]);
                break;
                
            case 2:
                var opt0 = document.createElement("option");
                opt0.value = "0";
                opt0.text = "PROCESSADOR";
                cCategoria.add(opt0, cCategoria.options[0]);
                
                var opt1 = document.createElement("option");
                opt1.value = "1";
                opt1.text = "MEMÓRIA RAM";
                cCategoria.add(opt1, cCategoria.options[1]);
                
                
                var opt2 = document.createElement("option");
                opt2.value = "2";
                opt2.text = "PLACA DE VÍDEO";
                cCategoria.add(opt2, cCategoria.options[2]);
                
                var opt3 = document.createElement("option");
                opt3.value = "3";
                opt3.text = "COOLER";
                cCategoria.add(opt3, cCategoria.options[3]);
                break;
        }
    };
    document.getElementById("enviar").onclick = function(){
        const cTipo = document.getElementById("tipo");
        const codigo_barras = codigo.value;
        const preco = preco_prod.value;
        const qnt = estoque_prod.value;
        if(codigo_barras>0){
            if(preco>0){
                if(qnt>0){
                    document.produto.submit();
                }else{
                    alert("Quantidade Inválida");
                    document.getElementById("estoque_prod").focus();
                }
            }else{
                alert("Preço Inválido");
                document.getElementById("preco_prod").focus();
            }
        }else{
            document.getElementById("codigo").focus();
            alert("Codigo Inválido");
        }
    }
</script>