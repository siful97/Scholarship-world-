<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reading from DB</title>
	<link  rel="stylesheet" href="stylelab.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body style="background-color: #198754;">
<style>
		tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
	<?php
		require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT student_name,student_fname,student_mname,student_school,student_college,student_address,student_father_income 
        FROM student_details" )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">Student Details</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash.php"><button class="ui red button">Go back </button></a>
		<?php
			echo "<table class='ui table'> \n";
			echo "<thead><th>student_name</th>  <th>student_fname</th> <th>student_mname</th><th>student_school</th><th>student_college</th><th>student_address</th><th>student_father_income</th></thead> \n";

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				echo "<tr>";
				echo "<td> $student_name </td>";	//The variable name has to match EXACTLY like the db column name
				
				echo "<td> $student_fname</td>";
			
				//echo "<td> $Post_title </td>";
				echo "<td> $student_mname </td>";
				echo "<td> $student_school</td>";
				echo "<td> $student_college</td>";
				echo "<td> $student_address</td>";
				echo "<td> $student_father_income</td>";
				//echo "<td> $gre_score</td>";
			//	echo "<td> $religion</td>";
				echo "</tr> \n";
			}

			echo "</table> \n";
		?>
	

	</div>



</body>
</html>

