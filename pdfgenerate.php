<?Php
require('fpdf/fpdf.php');
require('reconfig.php');
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFillColor(193,229,252);
$pdf->SetFont('Arial','B',16);
$pdf->Ln(0);


    #$roll = $_SESSION['Roll_No'];
    #$sql = "select * from student_data where Roll_No = '$roll'";
    $sql = "select * from student_data1 order by id DESC LIMIT 1";
    $res = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);
    foreach ($con->query($sql) as $row) {

        $pdf->SetFont('Arial','',10);
        $width_cell = array(45,50,45,50);
        $width_cell1 = array(63.5,63.5,63.5);
        $tabel_cell = array(20,20,20,15,15,25,20,15,20,20);
        $head_cell = array(50,140);

        $pdf->Cell(1,1,'St.Josephs College of Engineering',100,20);

        $pdf->Ln(2);

        $pdf->Cell(15,5,'SJCE',1,0,); // Third header column
        $pdf->Cell(30,5,$row['id'],1,1,'L',false);

        $pdf->Ln(1);

        $pdf->Cell(1,5,$row['Name'],100,20);

        $pdf->Ln(1);

        $pdf->Cell($width_cell[0],5,$row['PurposeOfVisit'],1,0,); // Third header column
        $pdf->Cell(10,5,$row['NumberOfPersons'],1,1,'L',false);

        $pdf->Ln(1);

        $pdf->Cell(1,5,$row['MeetingPerson'],100,20);

        $pdf->Ln(1);

        $pdf->Cell(1,5,$row['Department'],100,20);

        #$pdf->Cell(15,5,'Mobile',1,0,); // Third header column
        #$pdf->Cell(25,5,$row['MobileNumber'],1,1,'L',false);

        $pdf->Ln(0);

        $pdf->Cell(1,5,$row['Time'],100,20);

        $pdf->Ln(10);

        $pdf->Cell(1,1,'Signature of the staff                                            Department Seal',100,20);

        

        $extsension = explode('.',$row['studentphoto']);
        $file_ext1=strtolower(array_pop($extsension));


        $stuphotoname = $row['MobileNumber']."-studentphoto".".".$file_ext1;

        $pdf->Image("http://localhost/student-registration1-Copy/imageassets/$stuphotoname",80,15,30,30);


        $pdf->Ln(5);




    }







$pdf->Output();
?>