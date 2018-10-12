<?php

include "plantilla.php";
require "parametros.php";

$query="SELECT * FROM prestamos inner join herramientas on prestamos.herramienta_id = herramientas.id";//SELECT nombre, existencia from herramientas
$resultado = $bdConexion->consultaSQL($query);

$pdf = new PDF('L');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(30,6,'ID_PRESTAMO',1,0,'C',1);
$pdf->Cell(30,6,'HERRAMIENTA_ID',1,0,'C',1);
$pdf->Cell(30,6,'USUARIO_ID',1,0,'C',1);
$pdf->Cell(30,6,'EMPLEADO_ID',1,0,'C',1);
$pdf->Cell(30,6,'FECHA_PRESTAMO',1,0,'C',1);
$pdf->Cell(30,6,'FECHA_DEVOLUCION',1,0,'C',1);
$pdf->Cell(30,6,'CANTIDAD',1,0,'C',1);
$pdf->Cell(30,6,'OBSERVACIONES',1,0,'C',1);
$pdf->Cell(30,6,'ID',1,0,'C',1);
$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
$pdf->Cell(30,6,'TIPO',1,0,'C',1);
$pdf->Cell(30,6,'EXISTENCIA',1,1,'C',1);
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc())
{
$pdf->Cell(30,6,$row['id'],1,0,'C',1);
$pdf->Cell(30,6,$row['herramienta_id'],1,0,'C',1);
$pdf->Cell(30,6,$row['usuario_id'],1,0,'C',1);
$pdf->Cell(30,6,$row['empleado_id'],1,0,'C',1);
$pdf->Cell(30,6,$row['fecha_prestamo'],1,0,'C',1);
$pdf->Cell(30,6,$row['fecha_devolucion'],1,0,'C',1);
$pdf->Cell(30,6,$row['cantidad'],1,0,'C',1);
$pdf->Cell(30,6,$row['observaciones'],1,0,'C',1);
$pdf->Cell(50,6,$row['id'],1,0,'C',1);
$pdf->Cell(50,6,utf8_decode($row['nombre']),1,0,'C',1);
$pdf->Cell(50,6,$row['tipo_id'],1,0,'C',1);
$pdf->Cell(50,6,$row['existencia'],1,1,'C',1);
}
$pdf->Output();

?>