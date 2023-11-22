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

              if( isset($_REQUEST['serial_number'])){
              $recv=$_REQUEST['serial_number'];
              $query="SELECT serial_number,student_name,student_fname,student_mname,student_school,student_college,student_address,student_father_income 
              FROM student_details
                        where serial_number=$recv;";
              $results=mysqli_query($connect,$query);



              while( $rows = mysqli_fetch_array( $results ) ) {
				
                ?>
				
				<form class="ui form"  action="updatestudent.php" method="post"   >
                <h1 style="color:white;margin-left:100px;">	student_name: <input type="text" name="student_name" value="<?php echo $rows['student_name'] ?>"> <br>
 </h1>
			<p>

            <h1 style="color:white;margin-left:100px;">       student fname: <input type="text" name="student_fname" value="<?php echo $rows['student_fname'] ?>"> <br>
            </h1>
			<p>

			

            <h1 style="color:white;margin-left:100px;">        student mname: <input type="text" name="student_mname" value="<?php echo $rows['student_mname'] ?>"> <br>
            </h1>
			<p>

            <h1 style="color:white;margin-left:100px;">        student_school: <input type="text" name="student_school" value="<?php echo $rows['student_school'] ?>"> <br>
            </h1>
			<p>
            <h1 style="color:white;margin-left:100px;">       student_college: <input type="text" name="student_college" value="<?php echo $rows['student_college'] ?>"> <br>
            </h1>
			<p>
            <h1 style="color:white;margin-left:100px;">       student_address: <input type="text" name="student_address" value="<?php echo $rows['student_address'] ?>"> <br>
            </h1>
			<p>
            <h1 style="color:white;margin-left:100px;">       student_father_income: <input type="text" name="student_father_income" value="<?php echo $rows['student_father_income'] ?>"> <br>
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

