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


		$results = mysqli_query( $connect, "SELECT d.serial_number,d.university_name,d.university_dept,d.university_semesterfee,d.university_mastersfee,l.postal_code,l.city_name,c.country_name
		FROM university_details d JOIN university_locations l ON(d.serial_number=l.serial_number)
								  JOIN country c on(l.country_id=c.country_id)" )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">University Details</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash2.php"><button class="ui red button">Go back </button></a>
		
			<table class='ui table'>
			<thead>
			      
                  <th>University Name</th> 
				  <th>University Department Name</th>
			      <th>University Semester Fee</th>
				  <th>University Master's Fee</th> 
				  <th>Postal Code</th>
				  <th>City Name</th>
				  <th>Country Name</th>
				  
				  <th>Action</th>
				</thead>
			<?php

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
                $serial_number=$rows['serial_number'];
                $university_name=$rows['university_name'];
				$university_dept=$rows['university_dept'];
                $university_semesterFee=$rows['university_semesterfee'];
                $university_mastersFee=$rows['university_mastersfee'];
                $postal_code=$rows['postal_code'];
                $city_name=$rows['city_name'];
                $country_name=$rows['country_name'];
            
                ?>    
				 <tr>
                 	    
				 <td> <?php echo $university_name   ?></td>	
				 <td> <?php echo $university_dept   ?></td>	
			     <td> <?php echo $university_semesterfee   ?> </td>
				 <td> <?php echo $university_mastersfee  ?>   </td>
				 <td> <?php echo $postal_code   ?> </td>
				 <td> <?php echo $city_name  ?> </td>
				 <td><?php echo $country_name   ?>  </td>
                 <td> <a href="updateuniversitydetails.php?serial_number=<?php echo $serial_number ?>" >Edit </a>
				 <a href="deleteunidetails.php?serial_number=<?php echo $serial_number ?>">Delete</a></td> 
				 </tr> 
			
			<?php	
			}
			
      ?>		
		
			</table>
			
			
		
	

	</div>



</body>
</html>

