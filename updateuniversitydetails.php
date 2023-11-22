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
              $query="SELECT d.serial_number,d.university_name,d.university_dept,d.university_semesterfee,d.university_mastersfee,l.postal_code,l.city_name,c.country_name
              FROM university_details d JOIN university_locations l ON(d.serial_number=l.serial_number)
                                        JOIN country c on(l.country_id=c.country_id)
                        where d.serial_number=$recv";
              $results=mysqli_query($connect,$query);



              while( $rows = mysqli_fetch_array( $results ) ) {
				
                ?>
				
				<form class="ui form"  action="updateunidetails.php" method="post"   >
			University Name: <input type="text" name="university_name" value="<?php echo $rows['university_name'] ?>"> <br>

			<p>
            University Department Name: <input type="text" name="university_dept" value="<?php echo $rows['university_dept'] ?>"> <br>

<p>

			University Semester Fee: <input type="text" name="university_semesterfee" value="<?php echo $rows['university_semesterfee'] ?>"> <br>

			<p>

			University Masters Fee: <input type="text" name="university_mastersfee" value="<?php echo $rows['university_mastersfee'] ?>"> <br>

			<p>

			Postal Code: <input type="text" name="postal_code" value="<?php echo $rows['postal_code'] ?>"> <br>

			<p>

			City Name: <input type="text" name="city_name" value="<?php echo $rows['city_name'] ?>"> <br>

			<p>
            Country Name: <input type="text" name="country_name" value="<?php echo $rows['country_name'] ?>"> <br>

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

