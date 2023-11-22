<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Apply Details</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <style>



*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 100%;
}

.navbar{
    width: 1200px;
    height: 100%;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #fff ;
    font-size: 40px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px;
    margin-left: 50px;
}

.account{
    width: 600px;
    background-color: transparent ;
    margin: auto;
    color: white;
    padding: 40px 0px 40px 0px;
    text-align: center;
    border-radius: 15px 15px 0px 0px;
}
form{
    padding: 10px;
}
#name{
    width: 100px;
    height: 100px;
    
}
.name{
    margin-left: 25px;
    margin-top: 30px;
    width: 125px;
    color: #E0E0E0;
    font-size: 20px;
    font-weight: 700;
    margin-left:200px;

}
.FullName{
    position: relative;
    left: 200px;
    top: -50px;
    line-height: 70px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 35px;
    margin-left:150px;
    color: #E0E0E0;
}
.UserName{
    position: relative;
    left: 200px;
    top: -50px;
    line-height: 70px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 23px;
    color: #E0E0E0;
    margin-left:150px;
}
.UserPassword{
    position: relative;
    left: 200px;
    top: -50px;
    line-height: 70px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 23px;
   color: #E0E0E0;
    margin-left:150px;
}
.Email{
    position: relative;
    left: 200px;
    top: -50px;
    line-height: 70px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 23px;
    color: #E0E0E0;
    margin-left:150px;
}
.Country{
    position: relative;
    left: 200px;
    top: -50px;
    line-height: 70px;
    width: 480px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 23px;
    color: #E0E0E0;
    margin-left:150px;
}
button{
    background-color: darkblue;
    display: block;
    margin: 20px 0px 0px 20px;
    text-align: center;
    border-radius: 20px;
    border: 2px solid 3BAF9F;
    padding: 14px 110px;
    outline: none;
    color: white;
    cursor: pointer;
    transition: 0.25px;
    margin-left:650px;

}
.footer {
  background-color: lightblue;
  color: darkblue;
  text-align: center;
  font-size: 20px;
  padding-left: 150px;
  padding-right:130px;
  padding-top:20px;
  padding-bottom:120px;
  
}

    </style>


<?php

  if(isset($_POST['submit'])){


	require_once("db_connect.php");
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");
            $student_name =mysqli_real_escape_string($connect,$_REQUEST["student_name"]);
	$university_name =mysqli_real_escape_string($connect,$_REQUEST["university_name"]);
	$dept = mysqli_real_escape_string($connect,$_REQUEST["dept"]);
    $cgpa =mysqli_real_escape_string($connect,$_REQUEST["cgpa"]);
	$ielts_score =mysqli_real_escape_string($connect, $_REQUEST["ielts_score"]);
	$gre_score = mysqli_real_escape_string($connect,$_REQUEST["gre_score"]);

			$query="INSERT INTO `education_list` (serial_number,student_name, university_name, dept, cgpa, ielts_score, gre_score) VALUES (NULL,'$student_name', '$university_name', '$dept', '$cgpa', '$ielts_score', '$gre_score');";
  
  
		$result=mysqli_query($connect,$query);
      

		if(!$result){
			die("Not Inserted".mysqli_error($connect));
		}else{
			header("location: webpage2.php?Inserted Data");
		}
    }
  ?>


	<div class="main"> 
		<div class ="navbar">
			<div class="icon">
				<h2 style="color:#E0E0E0" class="logo">ScholarWorld.com</h2>
                <button  style="margin-left:1200px" class="btn"> <i  class="fa fa-home"></i> <a href="webpage2.php" style="color:white">Home</a></button>
			</div>
		<div class="account"><h1 style="margin-top:50px;color:#E0E0E0"> Education List</h1></div>
		<form action="edulistuser.php" method="post">
 			<div id="name">
             <h2 class="name">Student Name</h2>
 				<input class="FullName" type="text" name="student_name" required>
 				<h2 class="name">University Name</h2>
 				<input class="FullName" type="text" name="university_name" required>
 			</div>
 			<h2 class="name">Department Name</h2>
 				<input class="UserName" type="text" name="dept" required>

 			<h2 class="name">CGPA</h2>
 				<input class="UserPassword" type="text" name="cgpa" required>

 			<h2 class="name">Ielts Score</h2>
 				<input class="Email" type="text" name="ielts_score" required>	

 			<h2 class="name">Gre Score</h2>
 				<input class="Country" type="text" name="gre_score" required>	

                 <input style="border-radius: 6px; padding:50px 30px 10px 30px;background-color:lightblue" class="ui big right floated blue button" type="submit" name="submit" >			
 		</form>
	</div>
    <div class="footer">
  <p>We Try To Give You A Easy Way To Go To Abroad !!!</p>
</div>
</body>
</html>