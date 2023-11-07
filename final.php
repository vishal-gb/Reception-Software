<?php
// Initialize the session
session_start();

// database connection
include('config.php');

$added = false;


//Add  new student code 

if(isset($_POST['submit'])){
	$Initial = $_POST['Intial'];
	$Name = $_POST['Name'];
	$Course = $_POST['Course'];
	$Department = $_POST['Department'];
	$Batch = $_POST['Batch'];
	$Roll_No = $_POST['Roll_No'];
	$A_U_NO = $_POST['A_U_NO'];
	$Section = $_POST['Section'];
	$Gender = $_POST['Gender'];
	$Food = $_POST['Food'];
	$Blood_Group = $_POST['Blood_Group'];
	$Aadhaar_No = $_POST['Aadhaar_No'];
	$Student_Mail_ID = $_POST['Student_Mail_ID'];
	$Date_of_Birth = $_POST['Date_of_Birth'];
	$Caste = $_POST['Caste'];
	$Community = $_POST['Community'];
	$Community_Others = $_POST['Community_Others'];
        $Parent_Annual_Income = $_POST['Parent_Annual_Income'];
	$Religion = $_POST['Religion'];
	$Nationality = $_POST['Nationality'];
	$Mother_Tongue = $_POST['Mother_Tongue'];
	$Member_Of = $_POST['Member_Of'];
	$Date_Of_Admission = $_POST['Date_Of_Admission'];
	$Admission_Allotment = $_POST['Admission_Allotment'];
	$Sports_Admission1 = $_POST['Sports_Admission1'];
	$Sports_Admission2 = $_POST['Sports_Admission2'];
	$Overall_Rank = $_POST['Overall_Rank'];
	$Community_Rank = $_POST['Community_Rank'];
	$Sports_Admission3 = $_POST['Sports_Admission3'];
	$Game_Name = $_POST['Game_Name'];
	$Medium_Of_Instruction = $_POST['Medium_Of_Instruction'];
	$CasteMedium_Of_Instruction_Others = $_POST['Medium_Of_Instruction_Others'];
	$Country_Name = $_POST['Country_Name'];
	$passport_number = $_POST['passport_number'];
	$passport_expiry = $_POST['passport_expiry'];
	$visa_number = $_POST['visa_number'];
	$type_of_visa = $_POST['type_of_visa'];
	$visa_expiry = $_POST['visa_expiry'];
	$tenth_school = $_POST['10_school'];
	$tenth_board = $_POST['10_board'];
	$tenth_reg = $_POST['10_reg'];
	$tenth_yearofpassing = $_POST['10_yearofpassing'];
	$tenth_markpercent = $_POST['10_markpercent'];
	$twelveth_school = $_POST['12_school'];
	$twelveth_board = $_POST['12_board'];
	$twelveth_reg = $_POST['12_reg'];
	$twelveth_yearofpassing = $_POST['12_yearofpassing'];
	$twelveth_markpercent = $_POST['12_markpercent'];
	$max_mathmarks = $_POST['max_mathmarks'];
	$obtained_mathmarks = $_POST['obtained_mathmarks'];
        $percent_mathmarks = $_POST['percent_mathmarks'];
	$max_physicsmarks = $_POST['max_physicsmarks'];
	$obtained_physicsmarks = $_POST['obtained_physicsmarks'];
	$percent_physicsmarks = $_POST['percent_physicsmarks'];
	$max_chemistrymarks = $_POST['max_chemistrymarks'];
	$obtained_chemistrymarks = $_POST['obtained_chemistrymarks'];
	$percent_chemistrymarks = $_POST['percent_chemistrymarks'];
	$max_totalmarks = $_POST['max_totalmarks'];
	$obtained_totalmarks = $_POST['obtained_totalmarks'];
	$percent_totalmarks = $_POST['percent_totalmarks'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$father_qualification = $_POST['father_qualification'];
	$mother_qualification = $_POST['mother_qualification'];
	$father_occupation = $_POST['father_occupation'];
	$mother_occupation = $_POST['mother_occupation'];
	$father_addressofcompany = $_POST['father_addressofcompany'];
        $mother_addressofcompany = $_POST['mother_addressofcompany'];
	$father_designation = $_POST['father_designation'];
	$mother_designation = $_POST['mother_designation'];
	$father_mail = $_POST['father_mail'];
	$mother_mail = $_POST['mother_mail'];
	$father_countrycode = $_POST['father_countrycode'];
	$mother_countrycode = $_POST['mother_countrycode'];
	$father_stdcode = $_POST['father_stdcode'];
	$mother_stdcode = $_POST['mother_stdcode'];
	$father_landline = $_POST['father_landline'];
	$mother_landline = $_POST['mother_landline'];
	$father_moblie = $_POST['father_mobile'];
	$mother_mobile = $_POST['mother_mobile'];
	$residence_doorno = $_POST['residence_doorno'];
	$permanent_doorno = $_POST['permanent_doorno'];
	$residence_streetname = $_POST['residence_streetname'];
	$permanent_streetname = $_POST['permanent_streetname'];$Initial = $_POST['Intial'];
	$residence_area = $_POST['residence_area'];
	$permanent_area = $_POST['permanent_area'];
	$residence_city = $_POST['residence_city'];
	$permanent_city = $_POST['permanent_city'];
	$residence_district = $_POST['residence_district'];
	$permanent_district = $_POST['permanent_district'];
	$residence_country = $_POST['residence_country'];
	$permanent_country = $_POST['permanent_country'];
	$residence_state = $_POST['residence_state'];
	$permanent_state = $_POST['permanent_state'];
	$residence_pincode = $_POST['residence_pincode'];
	$permanent_pincode = $_POST['permanent_pincode'];
	$dayscholar_area = $_POST['dayscholar_area'];
	$dayscholar_boardingpoint = $_POST['dayscholar_boardingpoint'];
        $route_code=$_POST['route_code'];
	$guardian1_name = $_POST['guardian1_name'];
	$guardian2_name = $_POST['guardian2_name'];
        $guardian1_occupation = $_POST['guardian1_occupation'];
	$guardian2_occupation = $_POST['guardian2_occupation'];
	$guardian1_age = $_POST['guardian1_age'];
	$guardian2_age = $_POST['guardian2_age'];
	$guardian1_dob = $_POST['guardian1_dob'];
	$guardian2_dob = $_POST['guardian2_dob'];
	$guardian1_landline = $_POST['guardian1_landline'];
	$guardian2_landline = $_POST['guardian2_landline'];
	$guardian1_mobile = $_POST['guardian1_mobile'];
	$guardian2_mobile = $_POST['guardian2_mobile'];
	$guardian1_homeaddress = $_POST['guardian1_homeaddress'];
	$guardian2_homeaddress = $_POST['guardian2_homeaddress'];
	$guardian1_officeaddress = $_POST['guardian1_officeaddress'];
	$guardian2_officeaddress = $_POST['guardian2_officeaddress'];
	
        $_SESSION['Roll_No'] = $_POST['Roll_No'];

        $studentphoto = $_FILES['studentPhoto']['name'];
        $fatherphoto = $_FILES['fatherPhoto']['name'];
        $motherphoto = $_FILES['motherPhoto']['name'];
        $aadharphoto = $_FILES['aadhaarPhoto']['name'];
        $communitycert = $_FILES['cc']['name'];
        $tenthcert = $_FILES['tenC']['name'];
        $twelcert = $_FILES['tweC']['name'];
        $allorder = $_FILES['allOd']['name'];
        $passportphoto = $_FILES['passC']['name'];





        $extsension = explode('.',$_FILES['studentPhoto']['name']);
        $file_ext1=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['fatherPhoto']['name']);
        $file_ext2=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['motherPhoto']['name']);
        $file_ext3=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['aadhaarPhoto']['name']);
        $file_ext4=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['cc']['name']);
        $file_ext5=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['tenC']['name']);
        $file_ext6=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['tweC']['name']);
        $file_ext7=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['allOd']['name']);
        $file_ext8=strtolower(array_pop($extsension));
        $extsension = explode('.',$_FILES['passC']['name']);
        $file_ext9=strtolower(array_pop($extsension));

        $insert_data = "INSERT INTO student_data VALUES ('$Initial','$Name','$Course','$Department','$Batch','$Roll_No','$A_U_NO','$Section','$Gender','$Food','$Blood_Group','$Aadhaar_No','$Student_Mail_ID','$Date_of_Birth','$Caste','$Community','$Community_Others','$Parent_Annual_Income','$Religion','$Nationality','$Mother_Tongue','$Member_Of','$Date_Of_Admission','$Admission_Allotment','$Sports_Admission1','$Sports_Admission2','$Overall_Rank','$Community_Rank','$Sports_Admission3','$Game_Name','$Medium_Of_Instruction','$CasteMedium_Of_Instruction_Others','$Country_Name','$passport_number','$passport_expiry','$visa_number','$type_of_visa','$visa_expiry','$tenth_school','$tenth_board','$tenth_reg','$tenth_yearofpassing','$tenth_markpercent','$twelveth_school','$twelveth_board','$twelveth_reg','$twelveth_yearofpassing','$twelveth_markpercent','$max_mathmarks','$obtained_mathmarks','$percent_mathmarks','$max_physicsmarks','$obtained_physicsmarks','$percent_physicsmarks','$max_chemistrymarks','$obtained_chemistrymarks','$percent_chemistrymarks','$max_totalmarks','$obtained_totalmarks','$percent_totalmarks','$father_name','$mother_name','$father_qualification','$mother_qualification','$father_occupation','$mother_occupation','$father_addressofcompany','$mother_addressofcompany','$father_designation','$mother_designation','$father_mail','$mother_mail','$father_countrycode','$mother_countrycode','$father_stdcode','$mother_stdcode','$father_landline','$mother_landline','$father_moblie','$mother_mobile','$residence_doorno','$permanent_doorno','$residence_streetname','$permanent_streetname','$residence_area','$permanent_area','$residence_city','$permanent_city','$residence_district','$permanent_district','$residence_country','$permanent_country','$residence_state','$permanent_state','$residence_pincode','$permanent_pincode','$dayscholar_area','$dayscholar_boardingpoint','$route_code','$guardian1_name','$guardian2_name','$guardian1_occupation','$guardian2_occupation','$guardian1_age','$guardian2_age','$guardian1_dob','$guardian2_dob','$guardian1_landline','$guardian2_landline','$guardian1_mobile','$guardian2_mobile','$guardian1_homeaddress','$guardian2_homeaddress','$guardian1_officeaddress','$guardian2_officeaddress','$studentphoto','$fatherphoto','$motherphoto','$aadharphoto','$communitycert','$tenthcert','$twelcert','$allorder','$passportphoto')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
		  $added = true;
  	}else{
  		echo "Data not insert";
  	}

          move_uploaded_file($_FILES['studentPhoto']['tmp_name'], "./imageassets/$studentphoto");
          rename ("./imageassets/".$studentphoto , "./imageassets/".$Roll_No."-studentphoto".".".$file_ext1);
          
          move_uploaded_file($_FILES['fatherPhoto']['tmp_name'], "./imageassets/$fatherphoto");
          rename ("./imageassets/".$fatherphoto , "./imageassets/".$Roll_No."-fatherphoto".".".$file_ext2);
          
          move_uploaded_file($_FILES['motherPhoto']['tmp_name'], "./imageassets/$motherphoto");
          rename ("./imageassets/".$motherphoto , "./imageassets/".$Roll_No."-motherphoto".".".$file_ext3);
          
          move_uploaded_file($_FILES['aadhaarPhoto']['tmp_name'], "./imageassets/$aadharphoto");
          rename ("./imageassets/".$aadharphoto , "./imageassets/".$Roll_No."-aadharphoto".".".$file_ext4);
          
          move_uploaded_file($_FILES['cc']['tmp_name'], "./imageassets/$communitycert");
          rename ("./imageassets/".$communitycert , "./imageassets/".$Roll_No."-communitycert".".".$file_ext5);
          
          move_uploaded_file($_FILES['tenC']['tmp_name'], "./imageassets/$tenthcert");
          rename ("./imageassets/".$tenthcert , "./imageassets/".$Roll_No."-tenthcert".".".$file_ext6);
          
          move_uploaded_file($_FILES['tweC']['tmp_name'], "./imageassets/$twelcert");
          rename ("./imageassets/".$twelcert , "./imageassets/".$Roll_No."-twelcert".".".$file_ext7);
          
          move_uploaded_file($_FILES['allOd']['tmp_name'], "./imageassets/$allorder");
          rename ("./imageassets/".$allorder , "./imageassets/".$Roll_No."-allorder".".".$file_ext8);
          
          move_uploaded_file($_FILES['passC']['tmp_name'], "./imageassets/$passportphoto");
          rename ("./imageassets/".$passportphoto , "./imageassets/".$Roll_No."-passportphoto".".".$file_ext9);
          
          echo "New record created successfully";
          
          header("Location: ./viewpdf.php");


}

?>










<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width,initial scale=1"/>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
	<title>Student Crud Operation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<div class="container">

<a href="http://125.17.181.198/" target="_blank"><img src="College.jpg" alt="" width="500px" ></a><br><hr>
<h1>STUDENT PROFOMA</h1> 

<h3>PERSONAL INFORMATION</h3>
<div class="form-group">
<label for="inputAddress">Initial</label>
<input type="text" class="form-control" name="Intial" placeholder="Enter Initial">
</div>

<div class="form-group">
<label for="inputAddress">Name</label>
<input type="text" class="form-control" name="Name" placeholder="Enter Name">
</div>
			
<div class="form-group">
<label for="inputState">Course</label>
<select name="Course" class="form-control">
  <option selected>Choose...</option>
  <option value="B.E">B.E</option>
  <option value="B.Tech">B.Tech</option>
  <option value="M.E">M.E</option>
  <option value="M.Tech">M.Tech</option>
  <option value="MBA">MBA</option>
  <option value="MBA(Integrated 5 Yrs)">MBA(Integrated 5 Yrs)</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Department</label>
<select name="Department" class="form-control">
  <option selected>Choose...</option>
  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
  <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
  <option value="Mechanical Engineering">Mechanical Engineering</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Civil Engineering">Civil Engineering</option>
  <option value="Electronics and Instrumentation Engineering">Electronics and Instrumentation Engineering</option>
  <option value="Biotechnology">Biotechnology</option>
  <option value="Chemical Engineering">Chemical Engineering</option>
  <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
  <option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
  </select>
</div>
        
<div class="form-group">
<label for="inputState">Batch</label>
<select name="Batch" class="form-control">
  <option selected>Choose...</option>
  <option value="UG">UG : 2022 - 26</option>
  <option value="PG">PG : 2022 - 24</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Roll No</label>
<input type="text" class="form-control" name="Roll_No" placeholder="Enter Roll No">
</div>

<div class="form-group">
<label for="inputAddress">A U Reg. No.</label>
<input type="text" class="form-control" name="A_U_NO" placeholder="Enter A U Reg. No.">
</div>

<div class="form-group">
<label for="inputState">Section</label>
<select name="Section" class="form-control">
  <option selected>Choose...</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Gender</label>
<select name="Gender" class="form-control">
  <option selected>Choose...</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Food</label>
<select name="Food" class="form-control">
  <option selected>Choose...</option>
  <option value="Veg">Veg</option>
  <option value="Non-Veg">Non-Veg</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Blood Group</label>
<select name="Blood Group" class="form-control">
  <option selected>Choose...</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Aadhaar No.</label>
<input type="text" class="form-control" name="Aadhaar_No" placeholder="Enter Aadhaar No.">
</div>

<div class="form-group">
<label for="email">Student's Mail-ID</label>
<input type="email" class="form-control" name="Student_Mail_ID" placeholder="Enter Student's Mail-ID">
</div>

<h3>GENERAL INFORMATION</h3>

<div class="form-group">
<label for="inputPassword4">Date of Birth</label>
<input type="date" class="form-control" name="Date_of_Birth" placeholder="Date of Birth">
</div>

<div class="form-group">
<label for="inputAddress">Caste</label>
<input type="text" class="form-control" name="Caste" placeholder="Enter Caste">
</div>

<div class="form-group">
<label for="inputState">Community</label>
<select name="Community" class="form-control">
  <option selected>Choose...</option>
  <option value="OC">OC</option>
  <option value="BC">BC</option>
  <option value="BCM">BCM</option>
  <option value="MBC & DNC">MBC & DNC</option>
  <option value="SC">SC</option>
  <option value="SCA">SCA</option>
  <option value="ST">ST</option>
  <option value="Others">Others</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Community (Others)</label>
<input type="text" class="form-control" name="Community_Others" placeholder="Enter Community">
</div>

<div class="form-group">
<label for="inputAddress">Parent Annual Income</label>
<input type="text" class="form-control" name="Parent_Annual_Income" placeholder="Enter Parent Annual Income">
</div>

<div class="form-group">
<label for="inputAddress">Religion</label>
<input type="text" class="form-control" name="Religion" placeholder="Enter Religion">
</div>

<div class="form-group">
<label for="inputAddress">Nationality</label>
<input type="text" class="form-control" name="Nationality" placeholder="Enter Nationality">
</div>

<div class="form-group">
<label for="inputAddress">Mother Tongue</label>
<input type="text" class="form-control" name="Mother_Tongue" placeholder="Enter Mother Tongue">
</div>

<div class="form-group">
<label for="inputState">Member Of</label>
<select name="Member_Of" class="form-control">
  <option selected>Choose...</option>
  <option value="NCC">NCC</option>
  <option value="NSS">NSS</option>
  <option value="YRC">YRC</option>
  <option value="Others">Others</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Hostel Inmate</label>
<select name="Hostel" class="form-control">
  <option selected>Choose...</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  </select>
</div>

<h3>ADMISSION INFORMATION</h3>

<div class="form-group">
<label for="inputPassword4">Date of Admission</label>
<input type="date" class="form-control" name="Date_Of_Admission" placeholder="Date of Admission">
</div>

<div class="form-group">
<label for="inputState">Admission Allotment</label>
<select name="Admission_Allotment" class="form-control">
  <option selected>Choose...</option>
  <option value="Regular">Regular</option>
  <option value="Vocational">Vocational</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Type1</label>
<select name="Sports_Admission1" class="form-control">
  <option selected>Choose...</option>
  <option value="Government - General">Government - General</option>
  <option value="Special Reservation">Special Reservation</option>
  <option value="(Eminent Sports/Ex-servicemen/PH)">(Eminent Sports/Ex-servicemen/PH)</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Type2</label>
<select name="Sports_Admission2" class="form-control">
  <option selected>Choose...</option>
  <option value="Management - General">Management - General</option>
  <option value="PIO / CIWGC / NRI / Foreign">PIO / CIWGC / NRI / Foreign</option>
  <option value="(Eminent Sports/Ex-servicemen/PH)">(Eminent Sports/Ex-servicemen/PH)</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Overall Rank (If Counselling)</label>
<input type="text" class="form-control" name="Overall_Rank" placeholder="Enter Overall Rank">
</div>

<div class="form-group">
<label for="inputAddress">Community Rank (If Counselling)</label>
<input type="text" class="form-control" name="Community_Rank" placeholder="Enter Community Rank">
</div>

<div class="form-group">
<label for="inputState">Sports Admission</label>
<select name="Sports_Admission3" class="form-control">
  <option selected>Choose...</option>
  <option value="Yes">Yes(Govt/Mgmt)</option>
  <option value="No">No</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">If Yes, Specify the Game</label>
<input type="text" class="form-control" name="Game_Name" placeholder="Enter Name Of The Game">
</div>

<div class="form-group">
<label for="inputState">Medium Of Instruction</label>
<select name="Medium_Of_Instruction" class="form-control">
  <option selected>Choose...</option>
  <option value="Tamil">Tamil</option>
  <option value="English">English</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Medium Of Instruction (Others)</label>
<input type="text" class="form-control" name="Medium_Of_Instruction_Others" placeholder="Enter Medium Of Instruction (Others)">
</div>

<h3>PASSPORT INFORMATION (Only If Applicable)</h3>

<table>

<tr>
        <th>NRI / Foreign Student (Country Name)</th>
        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="Country_Name" placeholder="Enter Name of the Country">
</div></td>
</tr>

<tr>
        <th>If yes, Passport number</th>
        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="passportnumber"></label>
<input type="text" class="form-control" name="passport_number" placeholder="Enter Passport Number">
</div></td>
</tr>

<tr>
        <th>Passport - Date of Expiry</th>
        <td><div class="form-group col-md-6">
<label for="inputPassword4"></label>
<input type="date" class="form-control" name="passport_expiry" placeholder="Date of Birth">
</div></td>
</tr>

</table>

<h3>VISA INFORMATION (Only If Applicable)</h3>

<table>

<tr>
        <th>Visa Number</th>
        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Visa Number"></label>
<input type="text" class="form-control" name="visa_number" placeholder="Enter Visa Number">
</div></td>
</tr>

<tr>
        <th>Type Of Visa</th>
        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Type Of Visa"></label>
<input type="text" class="form-control" name="type_of_visa" placeholder="Enter Type Of Visa">
</div></td>
</tr>

<tr>
        <th>Visa - Date of Expiry</th>
        <td><div class="form-group col-md-6">
<label for="inputPassword4"></label>
<input type="date" class="form-control" name="visa_expiry" placeholder="Date of Expiry">
</div></td>
</tr>

</table>

<h3>ACADEMIC DETAILS</h3>

<table>

<tr>
        <th>Qualification</th>
        <th>School / College</th>
        <th>Board / University</th>
        <th>Reg.No</th>
        <th>Year of Passing</th>
        <th>% of Marks</th>
</tr>
        
    <tr>

        <th>10 th / Equivalent</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="10_school" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="10_board" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="10_reg" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="10_yearofpassing" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="10_markpercent" placeholder="">
</div></td>

</tr>

<tr>
        
        <th>12 th / Equivalent</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="12_school" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="12_board" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="12_reg" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="12_yearofpassing" placeholder="">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="12_markpercent" placeholder="">
</div></td>

</tr>


</table>

<h3>MARK DETAILS</h3>

<table>

<tr>
        <th>12 th / Equivalent</th>
        <th>Maximum Marks</th>
        <th>Marks Obtained</th>
        <th>% of Marks</th>
</tr>
        
    <tr>

        <th>Maths</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="max_mathmarks" placeholder="Enter Maximum Marks">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="obtained_mathmarks" placeholder="Enter Marks Obtained">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="percent_mathmarks" placeholder="Enter % of Marks">
</div></td>

</tr>

<tr>
        
        <th>Physics</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="max_physicsmarks" placeholder="Enter Maximum Marks">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="obtained_physicsmarks" placeholder="Enter Marks Obtained">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="percent_physicsmarks" placeholder="Enter % of Marks">
</div></td>

</tr>

<tr>
        
        <th>Chemistry</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="max_chemistrymarks" placeholder="Enter Maximum Marks">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="obtained_chemistrymarks" placeholder="Enter Marks Obtained">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="percent_chemistrymarks" placeholder="Enter % of Marks">
</div></td>

</tr>

<tr>
        
        <th>Total</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="max_totalmarks" placeholder="Enter Total Marks">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="obtained_totalmarks" placeholder="Enter Total Marks Obtained">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Physics"></label>
<input type="text" class="form-control" name="percent_totalmarks" placeholder="Enter Total % of Marks">
</div></td>

</tr>

</table>

<h3>PARENT DETAILS</h3>

<table>

<tr>
        <th></th>
        <th>FATHER</th>
        <th>MOTHER</th>
</tr>
        
    <tr>

        <th>Name</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="father_name" placeholder="Enter Name">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="firstname"></label>
<input type="text" class="form-control" name="mother_name" placeholder="Enter Name">
</div></td>

</tr>

<tr>
        
        <th>Qualification</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Qualification"></label>
<input type="text" class="form-control" name="father_qualification" placeholder="Enter Qualification">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Qualification"></label>
<input type="text" class="form-control" name="mother_qualification" placeholder="Enter Qualification">
</div></td>

</tr>

<tr>

<th>Occupation</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Occupation"></label>
<input type="text" class="form-control" name="father_occupation" placeholder="Enter Occupation">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Occupation"></label>
<input type="text" class="form-control" name="mother_occupation" placeholder="Enter Occupation">
</div></td>

</tr>

<tr>

<th>Address Of Company</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Address Of Company"></label>
<input type="text" class="form-control" name="father_addressofcompany" placeholder="Enter Address Of Company">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Address Of Company"></label>
<input type="text" class="form-control" name="mother_addressofcompany" placeholder="Enter Address Of Company">
</div></td>

</tr>

<tr>

<th>Designation</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Designation"></label>
<input type="text" class="form-control" name="father_designation" placeholder="Enter Designation">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Designation"></label>
<input type="text" class="form-control" name="mother_designation" placeholder="Enter Designation">
</div></td>

</tr>

<tr>

<th>Mail-ID</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Mail-ID"></label>
<input type="text" class="form-control" name="father_mail" placeholder="Enter Mail-ID">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Mail-ID"></label>
<input type="text" class="form-control" name="mother_mail" placeholder="Enter Mail-ID">
</div></td>

</tr>

<tr>

<th>Country Code</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Country Code"></label>
<input type="text" class="form-control" name="father_countrycode" placeholder="Enter Country Code">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Country Code"></label>
<input type="text" class="form-control" name="mother_countrycode" placeholder="Enter Country Code">
</div></td>

</tr>

<tr>

<th>STD Code</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="STD Code"></label>
<input type="text" class="form-control" name="father_stdcode" placeholder="Enter STD Code">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="STD Code"></label>
<input type="text" class="form-control" name="mother_stdcode" placeholder="Enter STD Code">
</div></td>

</tr>

<tr>

<th>Land Line Number</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Land Line Number"></label>
<input type="text" class="form-control" name="father_landline" placeholder="Enter Land Line Number">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Land Line Number"></label>
<input type="text" class="form-control" name="mother_landline" placeholder="Enter Land Line Number">
</div></td>

</tr>

<tr>

<th>Mobile Number</th>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Mobile Number"></label>
<input type="text" class="form-control" name="father_mobile" placeholder="Enter Mobile Number">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Mobile Number"></label>
<input type="text" class="form-control" name="mother_mobile" placeholder="Enter Mobile Number">
</div></td>

</tr>

</table>

<h3>CONTACT DETAILS</h3>

<table>

<tr>
        <th></th>
        <th>RESIDENTIAL ADDRESS</th>
        <th>PERMANENT ADDRESS</th>
</tr>
        
    <tr>

        <th>Plot / Door No</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Plot / Door No"></label>
<input type="text" class="form-control" name="residence_doorno" placeholder="Enter Plot / Door No">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Plot / Door No"></label>
<input type="text" class="form-control" name="permanent_doorno" placeholder="Enter Plot / Door No">
</div></td>

</tr>

<tr>
        
        <th>Street Name</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Street Name"></label>
<input type="text" class="form-control" name="residence_streetname" placeholder="Enter Street Name">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Street Name"></label>
<input type="text" class="form-control" name="permanent_streetname" placeholder="Enter Street Name">
</div></td>

</tr>

<tr>
        
        <th>Area</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Area"></label>
<input type="text" class="form-control" name="residence_area" placeholder="Enter Area">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Area"></label>
<input type="text" class="form-control" name="permanent_area" placeholder="Enter Area">
</div></td>

</tr>

<tr>
        
        <th>City</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="City"></label>
<input type="text" class="form-control" name="residence_city" placeholder="Enter City">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="City"></label>
<input type="text" class="form-control" name="permanent_city" placeholder="Enter City">
</div></td>

</tr>

<tr>
        
        <th>District</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="District"></label>
<input type="text" class="form-control" name="residence_district" placeholder="Enter District">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="District"></label>
<input type="text" class="form-control" name="permanent_district" placeholder="Enter District">
</div></td>

</tr>

<tr>
        
        <th>Country</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Country"></label>
<input type="text" class="form-control" name="residence_country" placeholder="Enter Country">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Country"></label>
<input type="text" class="form-control" name="permanent_country" placeholder="Enter Country">
</div></td>

</tr>

<tr>
        
        <th>State</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="State"></label>
<input type="text" class="form-control" name="residence_state" placeholder="Enter State">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="State"></label>
<input type="text" class="form-control" name="permanent_state" placeholder="Enter State">
</div></td>

</tr>

<tr>
        
        <th>Pin Code</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Pin Code"></label>
<input type="text" class="form-control" name="residence_pincode" placeholder="Enter Pin Code">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Pin Code"></label>
<input type="text" class="form-control" name="permanent_pincode" placeholder="Enter Pin Code">
</div></td>

</tr>

</table>

<h3>DAY SCHOLAR DETAILS</h3>

<table>

<tr>
        
        <th>Bus Routes</th>

        <td><a href="https://stjosephs.ac.in/docs/bus_routes.html">&emsp;&emsp;&emsp;Click Here!</a>
</td>

</tr>

<tr>
        
        <th>Area / Bus Name</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Area / Bus Name"></label>
<input type="text" class="form-control" name="dayscholar_area" placeholder="Enter Area / Bus Name">
</div></td>

</tr>

<tr>
        
        <th>Boarding Point</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Boarding Point"></label>
<input type="text" class="form-control" name="dayscholar_boardingpoint" placeholder="Enter Boarding Point">
</div></td>

</tr>

<tr>
        
        <th>Route Code</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Route Code"></label>
<input type="text" class="form-control" name="route_code" placeholder="Enter Route Code">
</div></td>

</tr>



</table>

<h3>GUARDIAN DETAILS</h3>

<table>

<tr>
        <th></th>
        <th>LOCAL GUARDIAN 1</th>
        <th>LOCAL GUARDIAN 2</th>
</tr>
        
    <tr>

        <th>Name</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Name"></label>
<input type="text" class="form-control" name="guardian1_name" placeholder="Enter Name">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Name"></label>
<input type="text" class="form-control" name="guardian2_name" placeholder="Enter Name">
</div></td>

</tr>

<tr>
        
        <th>Profession / Occupation</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Profession / Occupation"></label>
<input type="text" class="form-control" name="guardian1_occupation" placeholder="Enter Profession / Occupation">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Profession / Occupation"></label>
<input type="text" class="form-control" name="guardian2_occupation" placeholder="Enter Profession / Occupation">
</div></td>

</tr>

<tr>
        
        <th>Age</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Age"></label>
<input type="text" class="form-control" name="guardian1_age" placeholder="Enter Age">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Age"></label>
<input type="text" class="form-control" name="guardian2_age" placeholder="Enter Age">
</div></td>

</tr>

<tr>
        
        <th>Date of Birth</th>

        <td><div class="form-group col-md-6">
<label for="inputPassword4"></label>
<input type="date" class="form-control" name="guardian1_dob" placeholder="Date of Birth">
</div></td>

<td><div class="form-group col-md-6">
<label for="inputPassword4"></label>
<input type="date" class="form-control" name="guardian2_dob" placeholder="Date of Birth">
</div></td>

</tr>

<tr>
        
        <th>Landline Number</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Landline Number"></label>
<input type="text" class="form-control" name="guardian1_landline" placeholder="Enter Landline Number">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Landline Number"></label>
<input type="text" class="form-control" name="guardian2_landline" placeholder="Enter Landline Number">
</div></td>

</tr>

<tr>
        
        <th>Mobile Number</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Mobile Number"></label>
<input type="text" class="form-control" name="guardian1_mobile" placeholder="Enter Mobile Number">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Mobile Number"></label>
<input type="text" class="form-control" name="guardian2_mobile" placeholder="Enter Mobile Number">
</div></td>

</tr>

<tr>
        
        <th>Address - Home</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Address - Home"></label>
<input type="text" class="form-control" name="guardian1_homeaddress" placeholder="Enter Address - Home">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Address - Home"></label>
<input type="text" class="form-control" name="guardian2_homeaddress" placeholder="Enter Address - Home">
</div></td>

</tr>

<tr>
        
        <th>Address - Office</th>

        <td><div class="form-row">
<div class="form-group col-md-6">
<label for="Address - Office"></label>
<input type="text" class="form-control" name="guardian1_officeaddress" placeholder="Enter Address - Office">
</div></td>

<td><div class="form-row">
<div class="form-group col-md-6">
<label for="Address - Office"></label>
<input type="text" class="form-control" name="guardian2_officeaddress" placeholder="Enter Address - Office">
</div></td>

</tr>

</table>

<h3>PHOTO DETAILS</h3>

                <div class="form-group">
        		<label>Student Photo</label>
        		<input type="file" name="studentPhoto" class="form-control" >
        	</div>

		<div class="form-group">
        		<label>Father's Photo</label>
        		<input type="file" name="fatherPhoto" class="form-control" >
        	</div>

		<div class="form-group">
        		<label>Mother's Photo</label>
        		<input type="file" name="motherPhoto" class="form-control" >
        	</div>
        	
                <div class="form-group">
        		<label>Aadhaar Photo</label>
        		<input type="file" name="aadhaarPhoto" class="form-control" >
        	</div>

                <div class="form-group">
        		<label>Community Certificate</label>
        		<input type="file" name="cc" class="form-control" >
        	</div>

                <div class="form-group">
        		<label>10 th Certificate</label>
        		<input type="file" name="tenC" class="form-control" >
        	</div>

                <div class="form-group">
        		<label>12 th Certificate</label>
        		<input type="file" name="tweC" class="form-control" >
        	</div>

                <div class="form-group">
        		<label>Allotment Order (If Counselling)</label>
        		<input type="file" name="allOd" class="form-control" >
        	</div>

                <div class="form-group">
        		<label>Passport (If Available)</label>
        		<input type="file" name="passC" class="form-control" >
        	</div>

        	<input type="submit" name="submit" id="submit" class="btn btn-info btn-large" value="Submit"/>
                </form>

</body>
</html>