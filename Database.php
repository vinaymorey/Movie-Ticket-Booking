<?php
$servername='localhost:3307';
$username='root';
$password='1234';
$dbname = "moviebook";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   //die('Could not Connect My Sql:' .mysqli_error($conn));
}
?>