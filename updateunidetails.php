<?php

require_once('db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              } 

              if(isset($_REQUEST['submit'])){
                $university_name = $_REQUEST["university_name"];
                $university_dept=$_REQUEST['university_dept'];
                $university_semesterfee = $_REQUEST["university_semesterfee"];
                $university_mastersfee = $_REQUEST["university_mastersfee"];
                $postal_code =$_REQUEST["postal_code"];
                $city_name = $_REQUEST["city_name"];
                $country_name = $_REQUEST["country_name"];
                $hidden = $_REQUEST["hidden"];
              
              
              $update_query="UPDATE university_details d JOIN university_locations l ON(d.serial_number=l.serial_number)
              JOIN country c ON(l.country_id=c.country_id) SET d.university_name='$university_name',d.university_dept='$university_dept',d.university_semesterfee='$university_semesterfee',
              d.university_mastersfee='$university_mastersfee',l.postal_code='$postal_code',l.city_name='$city_name',c.country_name='$country_name'where d.serial_number=$hidden;";

$result = mysqli_query($connect,$update_query);
              }
 
if($result){
    header("location: unidetailsdelete.php?Updated");
} 






      
              

?>
