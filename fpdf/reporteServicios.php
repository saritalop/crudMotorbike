<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      // include('../../PHPNUEVO/db.php'); //llamamos a la conexion BD

      // $consulta_info = $conexion->query(" select * from servicios ");//traemos datos de la empresa desde BD
      // $dato_info = $consulta_info->fetch_object();
      $this->Image('motorbike.png', 5, -7, 50); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('MOTO RACER LA 36 '), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(25); // Salto de línea 
      $this->SetTextColor(103); //color



      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(0, 0, 0);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE SERVICIOS"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetX(8);
      $this->SetFillColor(0, 0, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(0, 0, 0); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(19, 10, utf8_decode('Id'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('Nombre Servicio'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('Descripción'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('Estado'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../../PHPNUEVO/db.php'; //llamamos a la conexion BD
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
// $consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(0, 0, 0); //colorBorde



$consulta_reporte_alquiler = $conn->query(" select * from servicios ");

while ($datos_reporte = $consulta_reporte_alquiler->fetch_object()) {  

   
      $i = $i + 1;
      /* TABLA */
      $pdf->SetX(8);
      $pdf->Cell(19, 10, utf8_decode($i), 1, 0, 'C', 0);
      $pdf->Cell(70, 10, utf8_decode($datos_reporte->nombre_servicio), 1, 0, 'C', 0);
      $pdf->Cell(70, 10, utf8_decode($datos_reporte->descripcion), 1, 0, 'C', 0);
      $pdf->Cell(35, 10, utf8_decode($datos_reporte->estado), 1, 1, 'C', 0);


}






$pdf->Output('reporteServicios.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
