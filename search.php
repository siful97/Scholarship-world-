<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reading from DB</title>
	<link  rel="stylesheet" href="stylelab.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
</head>
<body style="background-color: #198754;">
 <style>
		tr:nth-child(even) {
  background-color: #f2f2f2;
}


.header {
  background-color: ;
  color: #ffffff;
  padding: 15px;
  margin-bottom:10px;
}

.footer {
  background-color: green;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  padding-right:130px;
  padding-top:10px;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}
.navbar{
    width: 1500px;
    height: 90px;
    margin: auto;

}

    
</style>
<div class="main">
<div class="header">
  <h1 style="margin-left:750px">ScholarWorld.com </h1>
</div>
<div class="navbar">
		<h1 class="headers" style="margin-left:100px;margin-top:10px;color:white;font-family: Arial;">Scholarship Post Details</h1>


	<div class="ui text container">
		<a href="webpage2.php"><button style="margin-left:620px;" class="ui green button">Home </button></a>
<?php

if(isset($_REQUEST['submit'])){


  require_once("db_connect.php");
      $connect = mysqli_connect( HOST, USER, PASS, DB )
          or die("Can not connect");



  $search =mysqli_real_escape_string($connect,$_REQUEST['submit']);
 


          $query="SELECT university_name,catagory_name,post_date,post_session,deadline
                   FROM scholarship_posts 
               where  catagory_name='$search'";
          

      $result=mysqli_query($connect,$query);


      if(!$result){
          die("Not Showed".mysqli_error($connect));
      }
      else{
          
      echo "<table class='ui table'> \n";
      echo "<thead><th>University_name</th> <th>Catagory_name</th> <th>Post_date</th><th>Post_session</th><th>Deadline</th></thead> \n";

      while( $rows = mysqli_fetch_array( $result ) ) {
          extract( $rows );
          echo "<tr>";
          echo "<td> $university_name </td>";	
          
          echo "<td> $catagory_name</td>";
      
      
          echo "<td> $post_date </td>";
          echo "<td> $post_session</td>";
          echo "<td> $deadline</td>";
  
          echo "</tr> \n";
      }

      echo "</table> \n";
      }
      
      }
?>
</div>
</div>
</body>
</html>	
			
		
		
	
    

