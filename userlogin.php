
 

<?php

if(isset($_POST['email']) && isset($_POST['pass'])){


  require_once("db_connect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");



  $email =mysqli_real_escape_string($connect,$_REQUEST['email']);
  $pass =mysqli_real_escape_string($connect,$_REQUEST['pass']);


          $query="SELECT email,pass  FROM user_signup where email='$email' && pass='$pass';";
          

      $result=mysqli_query($connect,$query);


      $mysql=mysqli_num_rows($result);

      if($mysql){
        header("location: webpage2.php?Login  $email");
      }
      else{
          header("location: webpage.php?Login Cancel");
      }
      }
?>
	
			
		
		
	
    

