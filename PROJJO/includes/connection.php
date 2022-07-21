<?php
$host="localhost";
$user="root";
$pass="";
$db="hennessis";
$conn=mysqli_connect($host,$user,$pass,$db);

if($conn){
    
}
else{
    echo "connection failed";
}