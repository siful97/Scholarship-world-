<?php

require_once('db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              } 

              if(isset($_REQUEST['submit'])){
                $student_name =mysqli_real_escape_string($connect,$_REQUEST["student_name"]);
                $student_fname = mysqli_real_escape_string($connect,$_REQUEST["student_fname"]);
                $student_mname =mysqli_real_escape_string($connect,$_REQUEST["student_mname"]);
                $student_school =mysqli_real_escape_string($connect, $_REQUEST["student_school"]);
                $student_college = mysqli_real_escape_string($connect,$_REQUEST["student_college"]);
                $student_address = mysqli_real_escape_string($connect,$_REQUEST["student_address"]);
                $student_father_income = mysqli_real_escape_string($connect,$_REQUEST["student_father_income"]);
                $hidden = mysqli_real_escape_string($connect,$_REQUEST["hidden"]);
              
              
              $update_query="UPDATE student_details SET student_name='$student_name',student_fname='$student_fname',
              student_mname='$student_mname',student_school='$student_school',student_college='$student_college',student_address='$student_address',student_father_income='$student_father_income' where serial_number=$hidden;";

               $result = mysqli_query($connect,$update_query);
              }
 

              if($result){
                  header("location: deletestudentdetails.php?Updated");
              } 






      
              

?>
