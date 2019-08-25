<?php 
define('FPDF_FONTPATH' , 'font/');
require_once("../fpdf/fpdf.php");
include_once("../banco/connect.php");

$_pdf = new FPDF( 'L' , 'cm' , 'A4' );
$_pdf->Open();// Abre PDF
$_pdf->AddPage();// Adiciona Página
$_pdf->AddFont( 'times' , '' , 'times.php' ); // adiciona um arquivo fonte
$_pdf->setLeftMargin( 2.5 );// Margem a esquerda do PDF
$_pdf->setTopMargin( 2.5 );// Margem do topo do PDF

$_pdf->SetFont('times','BI',20);// Coloca a define a fonte a usar
$_pdf->SetFillColor(150,150,150);// Cor de fundo
//tamanho da pagina 298
$_img = $_pdf->Image('../imagens/logo.png',3,1,5,3,'PNG');
// Largura , altura , mensagem, borda, posicao, alinhamento, preenchimento
$_pdf->Cell(6,3,'',1,0,'');
$_pdf->Cell(18,3,'TABELA DE VENDAS',1,1,'C',TRUE);
$_pdf->Ln( 1 );


$_pdf->SetFont('times','B',12);

$_pdf->SetTextColor(0,0,128);
$_pdf->SetFillColor(220,220,220);
$_pdf->SetDrawColor(112,128,144);

// Largura , altura , mensagem, borda, posicao, alinhamento, preenchimento
$_pdf->Cell(3,1,'USER NAME',1,0,'C',TRUE); 
$_pdf->Cell(5,1,'PROD NAME',1,0,'C',TRUE); 
$_pdf->Cell(4,1,'COD BARRAS',1,0,'C',TRUE); 
$_pdf->Cell(3,1,'PRECO',1,0,'C',TRUE); 
$_pdf->Cell(3,1,'DATA',1,0,'C',TRUE); 
$_pdf->Cell(3,1,'PARCELAS',1,0,'C',TRUE); 
$_pdf->Cell(3,1,'QUANTIDADE',1,1,'C',TRUE);

$comando = "SELECT usuarios.nome, produto.nome, produto.cod_barras, produto.valor_compra, vendas.data, vendas.num_parcelas, vendas.num_parcelas FROM vendas 
INNER JOIN usuarios ON vendas.id_usuario = usuarios.id_usuario 
INNER JOIN produto  ON vendas.id_produto = produto.id_produto";

$datafim = date('Y-m-d');
$datainicio = "1900-01-01";

//var_dump($_POST);
    
if($_POST["data_inicio"] != '' && $_POST["data_fim"] != ''){
    $datainicio = $_POST['data_inicio'];
    $datafim = $_POST['data_fim'];
}else{
    if($_POST["data_inicio"] != ''){
        $datainicio = $_POST['data_inicio'];
    }else if($_POST["data_fim"] != ''){
        $datafim = $_POST['data_fim'];
    }
}

$comando .= " WHERE vendas.data BETWEEN '$datainicio' AND '$datafim' ";

if($_POST['tipo'] != -1){
    $tipo = $_POST['tipo'];
    $comando .= " AND produto.tipo = $tipo";
    if($_POST['categoria'] != -1){
        $categoria = $_POST['categoria'];
        $comando .= " AND produto.categoria = $categoria";
    }
}
//echo $comando;
$query = mysqli_query($link, $comando);

while($line = mysqli_fetch_array($query)){
    $_pdf->Cell(3,1,substr($line[0],0,9),1,0,'C',TRUE); 
    $_pdf->Cell(5,1,substr($line[1],0,15),1,0,'C',TRUE); 
    $_pdf->Cell(4,1,$line[2],1,0,'C',TRUE); 
    $_pdf->Cell(3,1,$line[3],1,0,'C',TRUE); 
    $_pdf->Cell(3,1,$line[4],1,0,'C',TRUE); 
    $_pdf->Cell(3,1,$line[5],1,0,'C',TRUE); 
    $_pdf->Cell(3,1,$line[6],1,1,'C',TRUE);
}
    
$_pdf->Output();
//$_pdf->Close();
?>
