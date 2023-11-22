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


		$results = mysqli_query( $connect, "SELECT * FROM `student_details`" )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">Student Details</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
		
	</div>

	<div class="ui text container">
		<a href="dash2.php"><button class="ui red button">Go back </button></a>
		
			<table class='ui table'>
			<thead>
                 <th>student_fname</th>
                 <th>student_mname</th> 
                 <th>student_school</th> 
				 
				 <th>student_college</th>
                 <th>student_address</th>
                 <th>student_father_income</th> 
				  <th>Action</th>
				</thead>
			<?php

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
				$University_id=$rows['serial_number'];
                $student_fname=$rows['student_fname'];
                $student_mname=$rows['student_mname'];
                $student_school=$rows['student_school'];
                $student_college=$rows['student_college'];
                $student_address=$rows['student_address'];
                $student_father_income=$rows['student_father_income'];
            
                ?>    
				 <tr>
				
				 <td> <?php echo $student_fname   ?></td>	
			     <td> <?php echo $student_mname   ?> </td>
                 <td> <?php echo $student_school   ?> </td>
				 <td> <?php echo $student_college   ?> </td>
				 <td> <?php echo $student_address   ?> </td>
				 <td><?php echo $student_father_income   ?>  </td>
                 <td> <a href="updatestudentdetails.php?serial_number=<?php echo $University_id ?>" >Edit </a>
					  <a href="deletestudent.php?serial_number=<?php echo $University_id ?>">Delete</a></td> 
				 </tr> 
			
			<?php	
			}
      ?>		
		
			</table> 
		
	

	</div>



</body>
</html>

