<html>
<head>
<title> View Admitted Students</title>
<link href="css/bootstrap.css" rel="stylesheet">

<?php

require 'dbCon.php';
$query= "SELECT `id`, `utme_no`, `firstname`, `surname`, `faculty`, `program`, `gender`, `session` FROM `admited`";
$query_run = mysql_query($query);
$query_num_rows = mysql_num_rows($query_run);
if($query_num_rows==1){

	
			
}else{
	echo "
	<fieldset style=width:900px; top:40px; height:600px;border:1px solid green; position:relative;left:400;>
		<legend> <b><span style=color:green; font-size:17px; font-family:Tahoma;>Uploaded Admission </span></b> </legend>
	<table class=table table-borderd table-striped; border=1px solid green; cellspacing=5; width:500px; cellpadding=0; style= position:relative; left:50px; bottom:10px; >
					<tr>
					<th><span style=color:green; width:90px;><b>Number of Admited students</span></th>
					<th><span style=color:green;><b> UTME No </span> </th>
					<th><span style=color:green;><b> Firstname </span> </th>
					<th><span style=color:green;><b> Surname </span> </th>
					<th><span style=color:green;><b> Faculty </span> </th>
					<th><span style=color:green;><b> Program </span> </th>
					<th><span style=color:green;><b> Gender </span> </th>
					<th><span style=color:green;><b> Session </span> </th>
					</tr>
	
	
	
	</fieldset>
	
	";
	while ($row = mysql_fetch_assoc($query_run)){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
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

}
?>
</head>
<body>




</div>
</body>
</html>