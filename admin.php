<html>
<head>
<title> Admin Portal</title>
<link href="css/bootstrap.css" rel="stylesheet">
<?Php
 require 'dbCon.php';
 
if (isset($_POST['admin_login'])){
	$user = htmlentities($_POST['user']);
	$pass = htmlentities($_POST['pass']);
	
	if(empty($user) and empty($pass)){
		echo '<span style="color:red; font-size:23px; position:relative; top:400px; Left:650px; font-family:Georgia;"> Please Provide Administrators Username  and Password </span>';
	}else if(empty ($pass)){
		echo '<span style="color:red; font-size:23px; position:relative; top:400px; Left:650px; font-family:Georgia;">Please Provide Administrators Password </span>';
	}else if (empty($user) ){
			echo '<span style="color:red; font-size:23px; position:relative; top:400px; Left:650px; font-family:Georgia;">Please Provide Administrators Username </span>';
	}else{
		$query = "SELECT `username`, `password` FROM `admin` WHERE `username`='$user' AND `password`='$pass'";
		if($query_run =mysql_query($query)){
			
			$query_num_rows=mysql_num_rows($query_run);
			
			if($query_num_rows==0){
				echo '<span style="color:red; font-size:23px; position:relative; top:400px; Left:650px; font-family:Georgia;"> oops:Wrong Username Or Password </span>';

			}else if($query_num_rows==1){
				header("Location:admin_home page.php");
			}
		}
		
		
	}
}

?>
</head>
<body>
<div class="container">

<div class="container" style="position:relative;">
<div class="container" id="div1" style="position:relative; left:10px; top:10px; width:1000px; height:300px;  background-color:darkgreen;" >
<img src="download.jpeg" class="img-circle" style="position:relative;left:360px; width:200px; height:150px;">

<span style="color:white; font-size:40px; position:relative; top:13px; font-family:Georgia;"><b><center>KADUNA STATE UNIVERSITY</b></span>
<span style="color:white; font-size:25px; position:relative; top:-5px; font-family:AR CENA;"><b><center>Motto:‎Knowledge for Development and Unity
<span style="color:white; font-size:30px; position:relative; top:-5px; font-family:Tohama;"><b><center>Admin Portal</b></span>

</div>
<div style="position:relative;top:50px;  width:1000px; left:80px;">
<form method="POST" action="admin.php" enctype="multipart/form-data">
<span style="color:green; font-size:40px; position:relative; top:-50px; Left:250px; font-family:Georgia;">ADMINISTRATOR PORTAL </span>


<table class=" table table-borderd table-striped" style="border=5px solid green; position:relative; left:300px; width:500px; ">
	<tr border="1px; solid green">
		<td><span class="label label-default" style="font-size:20px; position:relative; left:60px;"> Username:   </span> <td>
		<td><input type="text"  placeholder="Username" name="user"  maxlength="10"></td>
	</tr>
		<tr></tr>
	<tr>
		<td><span  class="label label-default" style="font-size:20px; position:relative; left:60px;"> Password:   <td>
		<td><input type="password"  placeholder="Password" name="pass" maxlength="5"/></td>
	</tr>
		<tr></tr>
	<tr>
		<td><center><input type="submit" style="width:100px;" value="Login"  class="btn btn-success" name="admin_login"></td>
		<td><center><input type="submit" style="width:100px;" value="Cancel" class="btn btn-warning" name="admin_cancel"></td>
	</tr>
</table>
</form>
</div>


</div>
</body>
</html>