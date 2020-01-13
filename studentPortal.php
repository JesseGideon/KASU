<html>
<head>
<title>Student Portal</title>
<link href="css/bootstrap.css" rel="stylesheet">
<?php
require 'dbCon.php';
if(isset($_POST['check'])){
	$utme = htmlentities($_POST['utmeNo']);
	if(!empty($utme)){
		
		$query ="SELECT *  FROM `admited` WHERE `utme_no`='$utme'";
		$query_run = mysql_query($query);
		$query_num_rows = mysql_num_rows($query_run);
		if($query_num_rows==1){
			
			
			echo '
			<div class="container" style="position:relative; bottom:5px; left:90px;">
			<fieldset style="width:1300px; top:3px; height:650px;border:1px solid green; position:relative;left:-120;">
		<legend> <b><span style="color:red; font-size:20px; font-family:Tahoma; position:relative; left:400px; top:10px;">Congratulations,You Are Sucessfully Admitted </span></b> </legend>
	<table class=table table-borderd table-striped;  cellpadding=0; style= "position:relative; left:300px; border=1px solid green; cellspacing=5; width:300px; bottom:10px;" >
					<tr>
					<td><span style=color:green;><b> UTME No </span> </td>
					<td><span style=color:green;><b> Firstname </span> </td>
					<td><span style=color:green;><b> Surname </span> </td>
					<td><span style=color:green;><b> Faculty </span> </td>
					<td><span style=color:green;><b> Program </span> </td>
					<td><span style=color:green;><b> Gender </span> </td>
					<td><span style=color:green;><b> Session </span> </td>
					</tr>
	</div>
	
	
	</fieldset>';
	
	while ($row = mysql_fetch_assoc($query_run)){
			echo "<tr>";
			echo "<td>".$row['utme_no']."</td>";
			echo "<td>".$row['firstname']."</td>";
			echo "<td>".$row['surname']."</td>";
			echo "<td>".$row['faculty']."</td>";
			echo "<td>".$row['program']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['session']."</td>";
			echo "<tr>";	
		}
			echo "</table>";
			
			
		}else{
			echo '<span style="color:red; font-size:20px; position:relative; top:470px; left:650px; font-family:AR CENA;"> Sorry, No Admission Given Yet Or Invlid UTME Number. </span>';
		}
		
	}else{
		
		echo '<span style="color:red; font-size:20px; position:relative; top:470px; left:650px; font-family:AR CENA;"> Please Input Your UTME Number in The Text Field Provided</span>';
		
	}
}

?>
</head>
<body>
<div class="container">
<div class="container" style="position:relative; left:-300px;">
<div class="container" style="position:relative;">
<div class="container" id="div1" style="position:relative; left:300px; top:10px; width:1000px; height:250px;  background-color:darkgreen;" >
<img src="download.jpeg" class="img-circle" style="position:relative;left:360px; width:200px; height:150px;">

<span style="color:white; font-size:40px; position:relative; top:13px; font-family:Georgia;"><b><center>KADUNA STATE UNIVERSITY</b></span>
<span style="color:white; font-size:25px; position:relative; top:-5px; font-family:AR CENA;"><b><center>Motto:‎Knowledge for Development and Unity
 </b></span>
</div>

<div style="position:relative;top:50px;  width:1000px; left:80px;">
<form method="POST" action="studentPortal.php" enctype="multipart/form-data">
<span style="color:green; font-size:30px; position:relative; top:-40px; Left:650px; font-family:Georgia;">STUDENT PORTAL </span><br>
<span style="color:green; font-size:20px; position:relative; top:-40px; Left:600px; font-family:Georgia;">2016/2017 University Admission Status </span><br>
<span style="color:red; font-size:20px; position:relative; top:-45px; Left:400px; font-family:Georgia;">IMPORTANT INFORMATION: Read The Following Instruction Before Checking Status. </span>
<div style="position:relative; top:-40px; Left:400px; ">
	<ol>
		<li style="1; font-size:17px; font-family:Ariel;" > <b>All</b> Candidates are to make sure they Check their Post UTME Result Before Checking Admission Status </li>
		<li style="1; font-size:17px; font-family:Ariel;" > Fill The TextBox with Your UTME(JAMB) Number </li>
		<li style="1; font-size:17px; font-family:Ariel;" > Click on Check Status </li>
	</ol>
</div>
<table class=" table table-borderd table-striped" style="border=5px solid green; top:5px; position:relative; left:600px; width:500px; ">
	<tr border="1px; solid green">
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"> UTME Number:   </span> <td>
		<td><input type="text"  placeholder="UTME number" name="utmeNo"  maxlength="10"></td>
	</tr>
		
	<tr>
		<td><center><input type="submit" style="width:100px;" value="Check Status"  class="btn btn-success" name="check"></td>
		
	</tr>
</table>
</form>



</div>
</body>
</html>