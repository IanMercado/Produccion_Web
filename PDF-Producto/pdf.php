<?php

require ('../fpdf/fpdf.php');

$id_producto = $_GET['id_producto'];
$a_productos = json_decode(file_get_contents('../productos.json'), true);
$pr_id = $_REQUEST ['id_producto'];

$pr_id_categoria = $a_productos[$pr_id]['id_categoria'];
        $pr_id_marca = $a_productos[$pr_id]['id_marca'];
        $pr_nombre = $a_productos[$pr_id]['nombre_producto'];
        $pr_im = '../imagenes//' . $pr_id_marca . '//' . $pr_id_categoria . '//' . $pr_id . '.jpg';
        $pr_precio = $a_productos[$pr_id]['precio'];
        $pr_descripcion = $a_productos[$pr_id]['descripcion'];
        $pr_marca = $a_productos[$pr_id]['nombre_marca'];
        $pr_categoria = $a_productos[$pr_id]['nombre_categoria'];

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Cell(80);
    $this->Image('logo.png',75,8,60);
    // Salto de líne
    $this->Ln(50);
}

// Pie de página
function Footer()
{
    $this->SetY(-25);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'FINAL',0,0,'C');
    $this->SetY(-20);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Escuela Da Vinci',0,0,'C');
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'MONZON,Gonzalo Nicolas',0,0,'C');
}
}
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf-> AddPage();
$pdf-> SetFont('Arial','B',18);
$pdf-> Ln(10);
$pdf-> Image($pr_im, 0  ,65, 100 ,'','JPG'); 
$pdf-> Cell(95);
$pdf-> Ln(7);
$pdf-> MultiCell(0,0,$pr_nombre,0,'R');
$pdf-> Ln(5);
$pdf-> Cell(75);
$pdf-> SetFont('Arial','b',11);
$pdf-> MultiCell(0,5,utf8_decode($pr_descripcion),0,'R');
$pdf-> Ln(12);
$pdf-> Cell(90);
$pdf-> SetFont('Arial','b',11);
$pdf-> MultiCell(40,0,'Categoria:',0,'L');
$pdf-> Cell(90);
$pdf-> SetFont('Arial','',11);
$pdf-> MultiCell(65,0,$pr_categoria,0,'R');
$pdf-> Ln(12);
$pdf-> Cell(90);
$pdf-> SetFont('Arial','b',11);
$pdf-> MultiCell(40,0,'Marca:',0,'L');
$pdf-> Cell(90);
$pdf-> SetFont('Arial','',11);
$pdf-> MultiCell(65,0,$pr_marca,0,'R');
$pdf-> Ln(12);
$pdf-> Cell(90);
$pdf-> SetFont('Arial','b',11);
$pdf-> MultiCell(40,0,'Precio:',0,'L');
$pdf-> Cell(90);
$pdf-> SetFont('Arial','',11);
$pdf-> MultiCell(65,0,$pr_precio,0,'R');






    $pdf->Output($pr_nombre,'I');

  
?>