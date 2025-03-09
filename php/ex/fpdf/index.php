<?php
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(100,100,utf8_decode('Adeu Món'));
$pdf->Multicell(0,10,"This is a multi-line text string\nNew line\nNew line");
$pdf->Output();
?>