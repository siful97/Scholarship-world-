<?php

require_once('db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              } 

              if(isset($_REQUEST['submit'])){
                $university_name = $_REQUEST["university_name"];
                $university_dept =$_REQUEST["dept"];
                $university_cgpa = $_REQUEST["cgpa"];
                
                $ielts_score = $_REQUEST["ielts_score"];
                $gre_score = $_REQUEST["gre_score"];
                $hidden = $_REQUEST["hidden"];
              
              
              $update_query="UPDATE education_list SET university_name='$university_name',dept='$university_dept',
             cgpa='$university_cgpa',ielts_score='$ielts_score',gre_score='$gre_score'where serial_number=$hidden;";

$result = mysqli_query($connect,$update_query);
              }
 
if($result){
    header("location: edulistdelete.php?Updated");
} 






      
              

?>
