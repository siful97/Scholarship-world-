<?php
require_once("db_connect.php");
$connect = mysqli_connect( HOST, USER, PASS, DB )
    or die("Can not connect");
    $recv=$_REQUEST['serial_number'];

    $query="DELETE FROM university_details where serial_number=$recv;";
    $run_delete_query=mysqli_query($connect,$query);
if($run_delete_query){
    header("location: unidetailsdelete.php");
}
?>