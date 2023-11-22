<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>University Details</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body style="background-color: #198754;">

<style>
		tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
	<?php
		require_once('db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

$i="SELECT d.university_name,d.university_dept,d.university_semesterfee,d.university_mastersfee,l.postal_code,l.city_name,l.state_province,c.country_name
FROM university_details d JOIN university_locations l ON(d.serial_number=l.serial_number)
                          JOIN country c on(l.country_id=c.country_id)
						 ";
		$results = mysqli_query( $connect, $i)
			or die("Can not execute query");
	?>

	<div class="ui menu">
		<h1 class="header">University Details</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash.php"><button class="ui red button">Go back</button></a>
		<?php
			echo "<table class='ui table'> \n";
			echo "<thead><th>University Name</th> <th>University Dept</th><th>University Semester Fee</th> <th>University Master's Fee</th> <th>Postal Code</th> <th>City Name</th><th>State Provinence</th> <th>Country Name</th> </thead> \n";

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				
				echo "<tr>";
				
				echo "<td> $university_name </td>";	//The variable name has to match EXACTLY like the db column name
				echo "<td> $university_dept </td>";
				echo "<td> $university_semesterfee </td>";
				echo "<td> $university_mastersfee </td>";
				echo "<td> $postal_code </td>";
				echo "<td> $city_name </td>";
				echo "<td> $state_province </td>";

				echo "<td> $country_name </td>";
				echo "</tr> \n";
			}

			echo "</table> \n";
		?>
	

	</div>



</body>
</html>
