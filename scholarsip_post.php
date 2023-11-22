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


.header {
  background-color: #198754;
  color: #ffffff;
  padding: 15px;
  margin-bottom:10px;
}

.footer {
  background-color: #198754;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  padding-right:130px;
  padding-top:10px;
}
    
</style>
<div class="header">
  <h1 style="margin-left:750px">ScholarWorld.com </h1>
</div>
	<?php
		require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT university_name,catagory_name,post_date,post_session,deadline,minimum_cgpa,minimum_ielts_score,minimum_gre_score
		FROM `scholarship_posts`" )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="headers" style="margin-left:100px;margin-top:10px">Scholarship Post Details</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash.php"><button class="ui red button">Go back </button></a>
		<?php
			echo "<table class='ui table'> \n";
			echo "<thead><th>University Name</th>  <th>Catagory Name</th> <th>Post Date</th><th>Post Session</th><th>Deadline</th><th>Minimum CGPA</th><th>Minimum Ielts Score</th><th>Minimum Gre Score</th></thead> \n";

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				echo "<tr>";
				echo "<td> $university_name </td>";	//The variable name has to match EXACTLY like the db column name
				
				echo "<td> $catagory_name</td>";
			
			
				echo "<td> $post_date </td>";
				echo "<td> $post_session</td>";
				echo "<td> $deadline</td>";
				echo "<td> $minimum_cgpa</td>";
				echo "<td> $minimum_ielts_score</td>";
				echo "<td> $minimum_gre_score</td>";
		
				echo "</tr> \n";
			}

			echo "</table> \n";
		?>
	

	</div>




</body>
</html>

