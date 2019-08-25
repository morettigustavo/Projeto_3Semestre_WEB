<?php
include ("../geral/head.php");
include_once("connect.php");

$nome_prod = $_POST['nome_prod'];
$cod_prod = $_POST['cod_prod'];
$preco_prod = $_POST['preco_prod'];
$estoque_prod = $_POST['estoque_prod'];
$tipo = $_POST['tipo'];
$categoria = $_POST['categoria'];

$sql2 = mysqli_query($link, "SELECT * FROM produto WHERE cod_barras = '$cod_prod'");
$line2 = mysqli_fetch_array($sql2);

if($line2){
    echo "<script>window.history.go(-1)</script>";
    echo "<script>alert('Produto já Cadastrado')</script>";
}else{
    $sql = mysqli_query($link, "SELECT * FROM produto order by id_produto desc limit 1");
    $line = mysqli_fetch_array($sql);
    $id = $line['id_produto']+1;
    
    $nome_prod = addslashes($nome_prod);
        
    $comando = "INSERT INTO produto (nome, quantidade_estoque, cod_barras, valor_compra, tipo, categoria) VALUES ('$nome_prod','$estoque_prod','$cod_prod', '$preco_prod', '$tipo', '$categoria')"; 
    
    $cadastro = mysqli_query($link, $comando);
    
    if($cadastro){ 
        $pasta = "produtos/prod$id";
        @mkdir($pasta, 0777);

        for($i = 1; $i<5; $i++){
            $name = "foto".$i;
            if(isset($_FILES[$name]['name'])){
                $foto = $_FILES[$name]['name'];
                move_uploaded_file($_FILES[$name]['tmp_name'], $pasta."/imagem$i.png");        
            }
        }
        
        echo "<script>alert('Produto Cadastrado com Sucesso')</script>";
        echo "<script>window.location.href = '../conteudo/produto_cadastrar.php';</script>";
    }else{
        echo "<script>window.history.go(-1)</script>";
        echo "<script>alert('Produto não cadastrado')</script>";
    }
}

?>
