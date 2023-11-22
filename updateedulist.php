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

              if( isset($_REQUEST['education_id'])){
              $recv=$_REQUEST['education_id'];
              $query="SELECT serial_number,university_name,dept,cgpa,ielts_score,gre_score
              FROM education_list 
              where serial_number=$recv";
              $results=mysqli_query($connect,$query);



              while( $rows = mysqli_fetch_array( $results ) ) {
				
                ?>
				
				<form class="ui form"  action="updateedu.php" method="post"   >
			University Name: <input type="text" name="university_name" value="<?php echo $rows['university_name'] ?>"> <br>

			<p>

            University Dept.: <input type="text" name="dept" value="<?php echo $rows['dept'] ?>"> <br>

<p>

			University Cgpa: <input type="text" name="cgpa" value="<?php echo $rows['cgpa'] ?>"> <br>

			<p>

			

			Ielts Score: <input type="text" name="ielts_score" value="<?php echo $rows['ielts_score'] ?>"> <br>

			<p>
            Gre Score: <input type="text" name="gre_score" value="<?php echo $rows['gre_score'] ?>"> <br>

			<p>
                <input type="hidden" name="hidden" value="<?php echo $recv; ?>">

			<input class="ui big right floated blue button" type="submit" name="submit" value="Update ">

		</form>
        <?php
			}
        }
        
        
?>



</body>
</html>

