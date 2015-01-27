<?php 

date_default_timezone_set('UTC');
require('fpdf/fpdf.php');

;







class PDF_result extends FPDF {
	function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) {
		$this->FPDF($orientation, $unit, $format);
		$this->SetTopMargin($margin);
		$this->SetLeftMargin($margin);
		$this->SetRightMargin($margin);
		
		$this->SetAutoPageBreak(true, $margin);
	}
	
	function Header () {
	     $this->Image('circl_hov.gif',15,15,50);

	//	$this->SetFont('Arial', 'B', 20);
	//	$this->SetFillColor(36, 96, 84);
	//	$this->SetTextColor(225);
	//	$this->Cell(0, 30, "YouHack MCQ Results", 0, 1, 'C', true);
	}
	
 function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    $this->Cell(0,10,'eZee motel ',0,0,'C');
}




	
	
	
	
}

$pdf = new PDF_result();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(100);


if(isset($_POST['print']))
 {
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("softmenu",$db);









$dd=strtotime($_POST['date']);
$xx=$_POST['date'];



 $pdf->Cell(0,10,'                                                     EZEE MOTEL                                           '.$xx.'',0,1);
 $pdf->Ln(5);
$pdf->Cell(0,10,'   .....................................................................................................................................' ,0,1);

$pdf->Cell(0,10,'   LIST                   QUANTITY                    PRICE(shs)                  FOOD NAME',0,1);
$pdf->Cell(0,10,'   ......................................................................................................................................' ,0,1);



$pdf->Ln(15);


$result=mysql_query("SELECT * FROM order1 ");



while($row=mysql_fetch_array($result)){


$datt=strtotime($row['date']);


if ($dd==$datt)
 
{

$total= $total+$row['price'];

$pdf->Ln(10);

$pdf->Cell(0, 10,'    #                                 ' . $row['quantity'].'                                '.$row['price'].'.00                     ' .$row['food'].'                      ',0,1);



$pdf->Ln(15);




}



}

 
	
	$pdf->Cell(0,10,'   .....................................................................................................................................' ,0,1);


	
	
	$pdf->Ln(8);
$pdf->Cell(0, 10,'                                                  The total bill  = '. $total. '.00 /=',0,1);


}
















































$pdf->Output();






$message = " eZee motel : ";
$pdf->MultiCell(0, 15, $message);







?>






