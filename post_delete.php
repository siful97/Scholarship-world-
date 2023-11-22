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

	<?php
		require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT * FROM `scholarship_posts`" )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">Scholarship Post Details</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
		
	</div>

	<div class="ui text container">
		<a href="dash2.php"><button class="ui red button">Go back </button></a>
		
			<table class='ui table'>
			<thead>
			      <th>University_id</th>
				  <th>University_name</th> 
				  <th>Category_name</th> 
				 
				  <th>Post_date</th>
				  <th>Post_session</th>
				  <th>Deadline</th> 
				  <th>Action</th>
				</thead>
			<?php

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				$University_id=$rows['serial_number'];
                $University_name=$rows['university_name'];
                $Category_name=$rows['catagory_name'];
                $Post_date=$rows['post_date'];
                $Post_session=$rows['post_session'];
                $Deadline=$rows['deadline'];
            
                ?>    
				 <tr>
				 <td> <?php echo $University_id   ?></td>
				 <td> <?php echo $University_name   ?></td>	
			     <td> <?php echo $Category_name   ?> </td>
				 <td> <?php echo $Post_date   ?> </td>
				 <td> <?php echo $Post_session   ?> </td>
				 <td><?php echo $Deadline   ?>  </td>
                 <td> <a href="updatepostdetails.php?University_id=<?php echo $University_id ?>" >Edit </a>
					  <a href="delete.php?serial_number=<?php echo $University_id ?>">Delete</a></td> 
				 </tr> 
			
			<?php	
			}
      ?>		
		
			</table> 
		
	

	</div>



</body>
</html>

