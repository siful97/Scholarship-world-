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


		$results = mysqli_query( $connect, "SELECT s.student_name,e.university_name,e.dept,e.cgpa,e.ielts_score,e.gre_score
        FROM student_details s join education_list e ON(s.serial_number=e.serial_number)
        " )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">Education List</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash.php"><button class="ui red button">Go back </button></a>
		<?php
			echo "<table class='ui table'> \n";
			echo "<thead><th>Student Name</th><th>University Name</th>  <th>dept</th> <th>cgpa</th><th>ielts_score</th><th>gre_score</th></thead> \n";

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				echo "<tr>";
                echo "<td> $student_name </td>";
				echo "<td> $university_name </td>";	//The variable name has to match EXACTLY like the db column name
				
				echo "<td> $dept</td>";
			
		
				echo "<td> $cgpa </td>";
				echo "<td> $ielts_score</td>";
				echo "<td> $gre_score</td>";
		
				echo "</tr> \n";
			}

			echo "</table> \n";
		?>
	

	</div>



</body>
</html>

