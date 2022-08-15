<?php
include('../includes/config.php');
include_once('api/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial','B',11);
        $this->Cell(276,5,'List of Clients',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','B',10);
        $this->Cell(276,10,'Date: '.date('d-m-Y'),0,0,'C');
        $this->Ln(20);

    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$display_header = array('Id', 'Name');
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
foreach($display_header as $header)
{
    $pdf->Cell(40,10,$header,1);
}
$pdf->Ln();
$pdf->SetFont('Arial','',10);
$sql = "SELECT * FROM `registration`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(40,10,$row['id'],1);
    $pdf->Cell(40,10,$row['name'],1);
    $pdf->Ln();
}
$pdf->Output();
?>
