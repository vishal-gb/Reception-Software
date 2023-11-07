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


    #$roll = $_SESSION['MobileNumber'];
    #$sql = "select * from student_data1 where MobileNumber = '$roll'";
    $sql = "select * from student_data1 order by id DESC LIMIT 1";
    $sql1 = "select * from student_data3 order by id DESC LIMIT 1";

    $res = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);

    $res1 = mysqli_query($con, $sql1);
    $row1=mysqli_fetch_array($res1);
    $count1 = mysqli_num_rows($res1);

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

        

        #$extsension = explode('.',$row['studentphoto']);
        #$file_ext1=strtolower(array_pop($extsension));


        #$stuphotoname = $row['MobileNumber']."-studentphoto".".".$file_ext1;

        #$pdf->Image("http://localhost/student-registration1-Copy/uploadPhoto/$stuphotoname",80,15,30,30);


        $pdf->Ln(5);

    }

    foreach ($con->query($sql1) as $row1) {
        $pdf->SetFont('Arial','',10);
        $width_cell = array(45,50,45,50);
        $width_cell1 = array(63.5,63.5,63.5);
        $tabel_cell = array(20,20,20,15,15,25,20,15,20,20);
        $head_cell = array(50,140);

        $extsension = explode('.',$row1['studentphoto']);
        
        $file_ext1=strtolower(array_pop($extsension));


        $stuphotoname = $row1['studentphoto'];

        #$pdf->Image("http://stjosephs.website/reception-final/uploadPhoto/63bec7a7ef730.jpeg",80,15,30,30);

        $pdf->Image("http://stjosephs.website/reception-final/uploadPhoto/$stuphotoname",80,15,30,30);
    }







$pdf->Output();
?>