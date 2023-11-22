<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add University Details</title>
  </head>
  <body style="background-color: #198754;">
  <?php

  if(isset($_POST['submit'])){


	require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

	$university_name =mysqli_real_escape_string($connect,$_REQUEST["university_name"]);
	$university_dept = mysqli_real_escape_string($connect,$_REQUEST["university_dept"]);
    $university_semesterfee =mysqli_real_escape_string($connect,$_REQUEST["university_semesterfee"]);
	$university_mastersfee =mysqli_real_escape_string($connect, $_REQUEST["university_mastersfee"]);
	//$postal_code = mysqli_real_escape_string($connect,$_REQUEST["postal_code"]);
   // $city_name = mysqli_real_escape_string($connect,$_REQUEST["city_name"]);
   // $state_province = mysqli_real_escape_string($connect,$_REQUEST["state_province"]);
   // $country_name = mysqli_real_escape_string($connect,$_REQUEST["country_name"]);
    

			$query="INSERT INTO `university_details` (`serial_number`, `university_name`, `university_dept`, `university_semesterfee`, `university_mastersfee`) VALUES (NULL, '$university_name', '$university_dept', '$university_semesterfee', '$university_mastersfee');";
  
		$result=mysqli_query($connect,$query);

		if(!$result){
			die("Not Inserted".mysqli_error($connect));
		}
		else{
			header("location: dash.php?Inserted");
		}
		}
  ?>
   
  <form class="ui form"  action="addunidetails.php" method="post"   >
			<h1 style="color:white;margin-left:100px;">University Name: <input type="text" name="university_name" style="margin-left:10px;font-color:white" required> <br>
			</h1>
			<p>

           
		<h1 style="color:white;margin-left:100px;">	University Department Name: <input type="text" name="university_dept" style="margin-top:10px;margin-left:25px" required> <br>
		</h1>
			<p>

			

         <h1 style="color:white;margin-left:100px;">   University Semester Fee: <input type="text" name="university_semesterfee" style="margin-left:135px" required> <br>
		 </h1>
			<p>

           <h1 style="color:white;margin-left:100px;"> University Master's Fee: <input type="text" name="university_mastersfee" style="margin-left:80px" required> <br>
		   </h1>
			<p>
          
                

			<input style="margin-left:500px;margin-top:30px;" class="ui big right floated blue button" type="submit" name="submit" >

		</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
