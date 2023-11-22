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


		$results = mysqli_query( $connect, "SELECT * FROM `moderator`" )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">Education List</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash.php"><button class="ui red button">Go back </button></a>
		
			<table class='ui table'>
			<thead>
              
                  <th>Full Name</th> 
				  <th>Father Name</th>
				  <th>Password</th> 
				  <th>Email</th>
				  <th>Phone Number</th>
				  <th>Action</th>
				</thead>
			<?php

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
                $full_name=$rows['full_name'];
				$fname=$rows['fname'];
                $password=$rows['pass'];
                $email=$rows['email'];
                $phonenumber=$rows['phonenumber'];
               
                $serial_number=$rows['serial_number'];
               
            
                ?>    
				 <tr>
                 <td> <?php echo $full_name ?></td>	    
				 <td> <?php echo $fname   ?></td>	
			     <td> <?php echo $password   ?> </td>
				 <td> <?php echo $email  ?>   </td>
				 <td> <?php echo $phonenumber  ?> </td>
				 <td> <a href="mail.php">Accept</a> 
					 <a href="modreqdelete.php?serial_number=<?php echo $serial_number ?>">Delete</a></td>
				      
				 </tr> 
			
			<?php	
			}
      ?>		
		
			</table> 
		
	

	</div>



</body>
</html>

