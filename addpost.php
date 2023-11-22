<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Post</title>
  </head>
  <body style="background-color: #198754;">
  <?php

  if(isset($_POST['submit'])){


	require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

	$university_name =mysqli_real_escape_string($connect,$_REQUEST["university_name"]);
	$catagory_name = mysqli_real_escape_string($connect,$_REQUEST["catagory_name"]);
    $post_date =mysqli_real_escape_string($connect,$_REQUEST["post_date"]);
	$post_session =mysqli_real_escape_string($connect, $_REQUEST["post_session"]);
	$deadline = mysqli_real_escape_string($connect,$_REQUEST["deadline"]);

			$query="INSERT INTO `scholarship_posts` (`serial_number`, `university_name`, `catagory_name`, `post_date`, `post_session`, `deadline`) VALUES (NULL, '$university_name', '$catagory_name', '$post_date', '$post_session', '$deadline');";
  
		$result=mysqli_query($connect,$query);

		if(!$result){
			die("Not Inserted".mysqli_error($connect));
		}
		else{
			header("location: dash.php?Inserted");
		}
		}
  ?>
   
  <form class="ui form"  action="addpost.php" method="post"   >
			<h1 style="color:white;margin-left:100px;">University Name: <input type="text" name="university_name" style="margin-left:10px;font-color:white" required> <br>
			</h1>
			<p>

           
		<h1 style="color:white;margin-left:100px;">	Category Name: <input type="text" name="catagory_name" style="margin-top:10px;margin-left:25px" required> <br>
		</h1>
			<p>

			

         <h1 style="color:white;margin-left:100px;">   Post Date: <input type="text" name="post_date" style="margin-left:135px" required> <br>
		 </h1>
			<p>

           <h1 style="color:white;margin-left:100px;"> Post Session: <input type="text" name="post_session" style="margin-left:80px" required > <br>
		   </h1>
			<p>
          <h1 style="color:white;margin-left:100px;">  Deadline: <input type="text" name="deadline" style="margin-left:140px" required> <br>
		  </h1>
			<p>
                

			<input style="margin-left:500px;margin-top:30px;" class="ui big right floated blue button" type="submit" name="submit" >

		</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
