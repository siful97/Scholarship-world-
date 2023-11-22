<?php
require_once("db_connect.php");
$connect = mysqli_connect( HOST, USER, PASS, DB )
    or die("Can not connect");
    $recv=$_REQUEST['serial_number'];

    $query="DELETE FROM education_list where serial_number=$recv;";
    $run_delete_query=mysqli_query($connect,$query);
if($run_delete_query){
    header("location: edulistdelete.php");
}
?>