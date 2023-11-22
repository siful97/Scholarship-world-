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


		$results = mysqli_query( $connect, "SELECT s.student_name,e.university_name,e.dept,e.cgpa,e.ielts_score,e.gre_score
        FROM student_details s join education_list e ON(s.student_name=e.student_name)  " )
			or die("Can not execute query");
	?>
<div class="ui menu">
		<h1 class="header">Apply For Scholarship</h1>
		<button  style="margin-left:1300px" class="btn"> <i  class="fa fa-home"></i> <a href="dash.php">Home</a></button>
	</div>

	<div class="ui text container">
		<a href="dash.php"><button class="ui red button">Go back </button></a>
		
			<table class='ui table'>
			<thead>
                  <th>Education id</th> 
                  <th>University Name</th> 
				  <th>University Dept</th>
				  <th>Cgpa</th> 
				  
				  <th>Ielts Score</th>
				  <th>Gre Score</th>
				  <th>Action</th>
				</thead>
			<?php

			while( $rows = mysqli_fetch_array( $results ) ) {
				extract( $rows );
                
				$student_name=$rows['student_name'];
                $university_name=$rows['university_name'];
                $university_dept=$rows['dept'];
                $university_cgpa=$rows['cgpa'];
               
                $ielts_score=$rows['ielts_score'];
                $gre_score=$rows['gre_score'];
            
                ?>    
				 <tr>
                 <td> <?php echo $student_name  ?></td>	    
				 <td> <?php echo $university_name   ?></td>	
			     <td> <?php echo $university_dept   ?> </td>
				 <td> <?php echo $university_cgpa  ?>   </td>
				 
				 <td> <?php echo $ielts_score  ?> </td>
				 <td><?php echo $gre_score   ?>  </td>
                 <td>  
					 <a href="eduaccept.php?cgpa=<?php echo $university_cgpa ?>">Accept</a></td> 
				 </tr> 
			
			<?php	
			}
      ?>		
		
			</table> 
		
	

	</div>



</body>
</html>

