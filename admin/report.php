<?php
include('../includes/config.php');
include_once('api/fpdf.php');

class PDF extends FPDF{
    function Header(){
        $this->SetFont('Arial','B',18);
        $this->Cell(150,10,'Report',1,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(150,10,'Order Report',0,0,'C');
        $this->Ln(20);
    }
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

}
$sql="SELECT * FROM `project`;
        SELECT * FROM `service_providers`;
        SELECT * FROM `book`;";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Total Projects: '.$row['id'],0,1);
$pdf->Cell(0,10,'Total Service Providers: '.$row['ser_id'],0,1);
$pdf->Cell(0,10,'Total Requests:  '.$row['id'],0,1);
$pdf->Output();
?>
