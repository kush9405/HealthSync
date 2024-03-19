<?php
$server="localhost";
$user="root";
$password="";
$database="Users";

$conn=mysqli_connect($server,$user,$password,$database);
if ($conn) {
    // echo"Success";
}
else {
    die ("Failure".mysqli_error());
}
?>