<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reading from DB</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body>

	<?php
		require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT * FROM scholarship_posts" )
			or die("Can not execute query");
	?>

	<div class="ui menu">
		<h1 class="header">Scholarship Post Table</h1>
	</div>

	<div class="ui text container">
		<a href="index.php"><button class="ui green button">Go back to homepage</button></a>
		<?php
			echo "<table class='ui table'> \n";
			echo "<thead><th>University_name</th>  <th>Catagory_name</th> <th>Post_date</th><th>Post_session</th><th>Deadline</th></thead> \n";

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				echo "<tr>";
				echo "<td> $university_name </td>";	
				//echo "<td> $University_id </td>";
				echo "<td> $catagory_name</td>";
				//echo "<td> $post_id </td>";
				//echo "<td> $post_title </td>";
				echo "<td> $post_date </td>";
				echo "<td> $post_session</td>";
				echo "<td> $deadline</td>";
				echo "</tr> \n";
			}

			echo "</table> \n";
		?>
	

	</div>



</body>
</html>

