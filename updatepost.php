<?php

require_once('db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

            if(!$connect){
                die("Not Connected" .mysqli_error());
              } 

              if(isset($_REQUEST['submit'])){
                $university_name =mysqli_real_escape_string($connect,$_REQUEST["university_name"]);
                $catagory_name = mysqli_real_escape_string($connect,$_REQUEST["catagory_name"]);
               // $Post_title = mysqli_real_escape_string($connect,$_REQUEST["Post_title"]);
                $post_date =mysqli_real_escape_string($connect,$_REQUEST["post_date"]);
                $post_session =mysqli_real_escape_string($connect, $_REQUEST["post_session"]);
                $deadline = mysqli_real_escape_string($connect,$_REQUEST["deadline"]);
                $hidden = mysqli_real_escape_string($connect,$_REQUEST["hidden"]);
              
              
              $update_query="UPDATE scholarship_posts SET university_name='$university_name',catagory_name='$catagory_name',
              post_date='$post_date',post_session='$post_session',deadline='$deadline'where serial_number=$hidden;";

               $result = mysqli_query($connect,$update_query);
              }
 

              if($result){
                  header("location: post_delete.php?Updated");
              } 






      
              

?>
