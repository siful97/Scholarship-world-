<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Student Details</title>
  </head>
  <body style="background-color: #198754;">
  <?php

  if(isset($_POST['submit'])){


	require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

	$student_name =mysqli_real_escape_string($connect,$_REQUEST["student_name"]);
	$student_fname = mysqli_real_escape_string($connect,$_REQUEST["student_fname"]);
    $student_mname =mysqli_real_escape_string($connect,$_REQUEST["student_mname"]);
    $student_school =mysqli_real_escape_string($connect, $_REQUEST["student_school"]);
	$student_college =mysqli_real_escape_string($connect, $_REQUEST["student_college"]);
	$student_address = mysqli_real_escape_string($connect,$_REQUEST["student_address"]);
    $student_father_income= mysqli_real_escape_string($connect,$_REQUEST["student_father_income"]);

			$query="INSERT INTO student_details (serial_number, student_name, student_fname, student_mname,student_school, student_college, student_address,student_father_income) VALUES (NULL, '$student_name', '$student_fname', '$student_mname','$student_school', '$student_college', '$student_address','$student_father_income');";
  
		$result=mysqli_query($connect,$query);

		if(!$result){
			die("Not Inserted".mysqli_error($connect));
		}
		else{
			header("location: dash.php?Inserted");
		}
		}
  ?>
   
  <form class="ui form"  action="addstudentdetails.php" method="post"   >
			<h1 style="color:white;margin-left:100px;">Student Name: <input type="text" name="student_name" style="margin-left:10px;font-color:white" required> <br>
			</h1>
			<p>

           
		<h1 style="color:white;margin-left:100px;">	Student Father Name: <input type="text" name="student_fname" style="margin-top:10px;margin-left:25px" required> <br>
		</h1>
			<p>

			

         <h1 style="color:white;margin-left:100px;">   Student Mother Name: <input type="text" name="student_mname" style="margin-left:135px" required> <br>
		 </h1>
			<p>
            <h1 style="color:white;margin-left:100px;">   Student School Name: <input type="text" name="student_school" style="margin-left:135px" required> <br>
		 </h1>
			<p>

           <h1 style="color:white;margin-left:100px;"> Student College Name: <input type="text" name="student_college" style="margin-left:80px" required> <br>
		   </h1>
			<p>
          <h1 style="color:white;margin-left:100px;">  Student Address: <input type="text" name="student_address" style="margin-left:140px" required> <br>
		  </h1>
			<p>
            <h1 style="color:white;margin-left:100px;">  Student Father Income Yearly: <input type="text" name="student_father_income" style="margin-left:140px" required> <br>
		  </h1>
			<p>  

			<input style="margin-left:500px;margin-top:30px;" class="ui big right floated blue button" type="submit" name="submit" >

		</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
