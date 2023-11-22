<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: lime;
  color: black;
  
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


.header {
  background-color: #198754;
  color: #ffffff;
  padding: 15px;
  margin-bottom:10px;
  margin-left:110px;
}

.footer {
 
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  padding-right:130px;
  padding-top:10px;
  margin-top:70px;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    
</style>
</head>
<body style="background-color: #198754;">

 

<?php

if(isset($_POST['fname']) && isset($_POST['psw']) && isset($_POST['passcode'])){


  require_once("db_connect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");



  $fname =mysqli_real_escape_string($connect,$_REQUEST['fname']);
  $psw =mysqli_real_escape_string($connect,$_REQUEST['psw']);
  $passcode =mysqli_real_escape_string($connect,$_REQUEST['passcode']);


          $query="SELECT full_name,pass,passcode
          FROM moderator 
          where full_name='$fname' AND pass='$psw' AND passcode='$passcode';";
          

      $result=mysqli_query($connect,$query);

      $mysql=mysqli_num_rows($result);

      if($mysql){
        header("location: dash.php?Login  $fname");
      }
      else{
          header("location: dashclone.php?Login Cancel");
      }
      }
?>
	
			
		
		
	
    


<div class="header">
  <h1 style="margin-left:700px">ScholarWorld.com </h1>
</div>

<h2>Login Form</h2>

<form action="admin_login.php" method="post">
  

  <div class="container">
   
    <label for="uname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="fname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Passcode</b></label>
    <input type="password" placeholder="Enter Passcode" name="passcode" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="dash.php">Cancel</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<div class="footer">
  <h1>We Try To Give You A Easy Way To Go To Abroad !!!</h1>
</div>


</body>
</html>
