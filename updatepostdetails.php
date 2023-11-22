<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #198754;">
<?php

require_once('db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              }  

              if( isset($_REQUEST['University_id'])){
              $recv=$_REQUEST['University_id'];
              $query="SELECT serial_number,university_Name,catagory_name,post_date,post_session,deadline FROM `scholarship_posts`
                        where serial_number=$recv;";
              $results=mysqli_query($connect,$query);



              while( $rows = mysqli_fetch_array( $results ) ) {
				
                ?>
				
				<form class="ui form"  action="updatepost.php" method="post"   >
                <h1 style="color:white;margin-left:100px;">	University Name: <input type="text" name="university_name" value="<?php echo $rows['university_Name'] ?>"> <br>
 </h1>
			<p>

            <h1 style="color:white;margin-left:100px;">        Category Name: <input type="text" name="catagory_name" value="<?php echo $rows['catagory_name'] ?>"> <br>
            </h1>
			<p>

			

            <h1 style="color:white;margin-left:100px;">        Post Date: <input type="text" name="post_date" value="<?php echo $rows['post_date'] ?>"> <br>
            </h1>
			<p>

            <h1 style="color:white;margin-left:100px;">         Post Session: <input type="text" name="post_session" value="<?php echo $rows['post_session'] ?>"> <br>
            </h1>
			<p>
            <h1 style="color:white;margin-left:100px;">        Deadline: <input type="text" name="deadline" value="<?php echo $rows['deadline'] ?>"> <br>
            </h1>
			<p>
                <input type="hidden" name="hidden" value="<?php echo $recv; ?>">

			<input style="margin-left:500px;margin-top:30px;padding-left:10px,padding-right:10px,padding-top:10px,padding-bottom:10px;" class="ui big right floated blue button" type="submit" name="submit" value="Update ">

		</form>
        <?php
			}
        }
        
        
?>



</body>
</html>

