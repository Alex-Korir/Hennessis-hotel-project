<?php
require "includes/connection.php";

if(isset($_POST['submit']))
{
$fullName=$_POST['fullnames'];
$email=$_POST['EmailAddress'];
$idNumber=$_POST['idnumber'];
$phonenumber=$_POST['phonenumber'];
$password=$_POST['Password'];
$confirmPassword=$_POST['confirmpassword'];

if($password==$confirmPassword){
    $sql="INSERT INTO users (username,email,phoneNo,password,idnum) values ('$fullName','$email','$phonenumber','$password','$idNumber')";
    if(mysqli_query($conn,$sql)){
        header("location:marv.php?msg=account created successfully please Log-In");
    }
    else{
        header("location:login form.php?msg=account created successfully please Log-In");
    }
}
else{
    header("location:login form.html?msg=your passwords do not match");
}


}
else{
    header("location:login form.php");
}