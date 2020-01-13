<html>
<head>
<title>Upload Admission</title>
<link href="css/bootstrap.css" rel="stylesheet">
<?php
require 'dbCon.php';
if (isset($_POST['upload'])){
$id=$_POST['id'];
$utme=$_POST['utme'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$faculty = $_POST['faculty'];
$program = $_POST['program'];
$gender = $_POST['gender'];
$session = $_POST['session'];

	if(!empty($fname) && !empty($sname) && !empty($faculty) && !empty($program) && !empty($gender) && !empty($session) && !empty($id) && !empty($utme)){
		
		$query1="SELECT `id`   FROM `admited` WHERE `id`='$id'";
		$query_run1=mysql_query($query1);
		$query_num_rows1 = mysql_num_rows($query_run1);
		
		$query2="SELECT  `utme_no`  FROM `admited` WHERE `utme_no`='$utme'";
		$query_run2=mysql_query($query2);
		$query_num_rows2 = mysql_num_rows($query_run2);
		
		if($query_num_rows1==1){
			echo '<span style="color:red; font-size:20px; position:relative; top:420px; Left:400px; font-family:Georgia;"> <b> ID Already Existed,Try a New ID Number. </b></span>';

		}else{
			
			
		$query="INSERT INTO `admited`(`id`, `utme_no`, `firstname`, `surname`, `faculty`, `program`, `gender`, `session`) VALUES ('$id','$utme','$fname','$sname','$faculty','$program','$gender','$session')";
		if($query_run=mysql_query($query)){
			echo '<span style="color:Green; font-size:20px; position:relative; top:420px; Left:400px; font-family:Georgia;"> <b> Admission Sucessfully Uploaded </b></span>';
			
			
		}else{
		if($query_num_rows2==1){
			echo '<span style="color:red; font-size:20px; position:relative; top:420px; Left:400px; font-family:Georgia;">  <b>  UTME No. Already Existed. </b></span>';

				}else{
					
		$query="INSERT INTO `admited`(`id`, `utme_no`, `firstname`, `surname`, `faculty`, `program`, `gender`, `session`) VALUES ('$id','$utme','$fname','$sname','$faculty','$program','$gender','$session')";
		if($query_run=mysql_query($query)){
			echo '<span style="color:Green; font-size:20px; position:relative; top:420px; Left:400px; font-family:Georgia;"> <b> Admission Sucessfully Uploaded </b></span>';
					
					
					}
				}
	}
		}
	}else{
		
				echo '<span style="color:Green; font-size:20px; position:relative; top:420px; Left:400px; font-family:Georgia;">Note:Please Provide The Info for All Field with <span style="color:red"><sub>*</sub></span>, All Fields are Required </span>';
	}
}
?>
</head>
<body>
<div class="container" style="position:relative; left:-300px;">
<div class="container" style="position:relative;">
<div class="container" id="div1" style="position:relative; left:300px; top:10px; width:1000px; height:250px;  background-color:darkgreen;" >
<img src="download.jpeg" class="img-circle" style="position:relative;left:360px; width:200px; height:150px;">

<span style="color:white; font-size:40px; position:relative; top:13px; font-family:Georgia;"><b><center>KADUNA STATE UNIVERSITY</b></span>
<span style="color:white; font-size:25px; position:relative; top:-5px; font-family:AR CENA;"><b><center>Motto:‎Knowledge for Development and Unity
 </b></span>
</div>
<div class="container">
	<fieldset style="width:900px; top:20px; height:600px;border:1px solid green; position:relative;left:400;">
		<legend> <b><span style="color:green; font-size:17px; font-family:Tahoma;">Upload Admission </span></b> </legend>
		<div style="color:white; height:60px; font-size:30px; font-family:Arail; width:900; border:2px solid green; background-color:green;"><center> Provide Admitted Student information </div>
		
	<form method="POST" action="upload_admission.php" enctype="multipart/form-data">
		
<table class=" table table-borderd table-striped" style="border=5px solid green; position:relative; top:50px; left:100px; width:500px; ">
	<tr border="1px; solid green">
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b>Number of Admited students :<font color="red"><sub>*</sub> </b>  </span> <td>
		<td><input type="number" style="width:300; height:30px;" placeholder="ID" name="id"  maxlength="20"></td>
	</tr>
	<tr></tr>
	<tr border="1px; solid green">
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b> UTME No:<font color="red"><sub>*</sub> </b>  </span> <td>
		<td><input type="text" style="width:300; height:30px;" placeholder="Utme" name="utme"  maxlength="20"></td>
	</tr>
	
	<tr border="1px; solid green">
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b> Firstname:<font color="red"><sub>*</sub> </b>  </span> <td>
		<td><input type="text" style="width:300; height:30px;" placeholder="Firstname" name="fname"  maxlength="20"></td>
	</tr>
		
	<tr>
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b> Surname:<font color="red"><sub>*</sub> </b>  </span>  <td>
		<td><input type="text" style="width:300; height:30px;" placeholder="Surname" name="sname" maxlength="30"/></td>
	</tr>
	<tr></tr>
		</tr>
		<tr></tr>
	<tr>
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b> Faculty:<font color="red"><sub>*</sub> </b>  </span>  <td>
		<td><input type="text" style="width:300; height:30px;" placeholder="Faculty" name="faculty" maxlength="30"/></td>
	</tr>
		<tr>
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b> Program:<font color="red"><sub>*</sub> </b>  </span>  <td>
		<td><input type="text" style="width:300; height:30px;" placeholder="Program" name="program" maxlength="30"/></td>
	</tr>
		<tr></tr>
		</tr>
		<tr></tr>
	<tr>
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"></font><b> Gender:<font color="red"><sub>*</sub> </b>  </span>  <td>
		<td><select  name ="gender" style="width:300; height:30px;">
			<option value=""   name="">Gender</option>
			<option value="male" >Male</option>
			<option value="female" >Female</option>
		</select>
		</td>
	</tr>
		
	</tr>
		
	<tr>
		<td><span class="label label-default" style="font-size:20px; position:relative; width:100; left:60px;"></font><b> Session:<font color="red"><sub>*</sub> </b>  </span>  <td>
		<td><input type="text" value="2015/2016" style="width:300; height:30px;"  placeholder="Session" name="session" maxlength="30"/></td>
	</tr>
	<tr>
		<td><center><input type="submit" style="width:150px; position:relative;left:300px;" value="Upload Admission"  class="btn btn-success" name="upload"></td>
		<td><center><input type="submit" style="width:100px; position:relative;left:200px;"  value="Back" class="btn btn-warning" name="admin_cancel" onClick="window.open('admin_home page.php');"></td>
	</tr>
	
	</form>
	</fieldset>
</div>
</div>
</body>
</html>