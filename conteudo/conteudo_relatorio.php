<label class="titulo_form">Adicionar Produto</label>
<div class="produtos">
    <form method="post" action="../banco/gerar_relatorio.php" name="produto">
        <b>Data de inicio</b>
        <input type="date" name="data_inicio">
        <br><br>
        
        <b>Data de fim</b>
        <input type="date" name="data_fim">
        <br><br>
        
        <b>Escolha o tipo de produto</b><br><br>
        <select name="tipo" id="tipo" class="spinner">
            <option value="-1">TODOS</option>
            <option value="0">JOGOS</option>
            <option value="1">PERIFÉRICOS</option>
            <option value="2">HARDWARE</option>
        </select>
        <br><br>
        
        <b>Categoria do produto</b>
        <select name="categoria" id="categoria" class="spinner">
            <option value="-1">TODOS</option>
        </select>
        <br><br>
        
        <button type="submit" id="enviar">Adicionar</button><br><br>
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
            case 1:
                var opt0 = document.createElement("option");
                opt0.value = "0";
                opt0.text = "PS4";
                cCategoria.add(opt0, cCategoria.options[0]);
                
                var opt1 = document.createElement("option");
                opt1.value = "1";
                opt1.text = "XBOX";
                cCategoria.add(opt1, cCategoria.options[1]);
                break;
                
            case 2:
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
                
            case 3:
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
                var opt = document.createElement("option");
                opt.value = "-1";
                opt.text = "TODOS";
                cCategoria.add(opt, cCategoria.options[0]);
    };
</script>