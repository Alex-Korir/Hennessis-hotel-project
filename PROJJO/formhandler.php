<?php



if(isset($_POST['submit'])){
    require"includes/connection.php";

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE username='$username' or email='$username' ";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);

    $usernameR=$row['username'];
    $email=$row['email'];
    $passwordR=$row['password'];
    $idnum=$row['idnum'];
    $accType=$row['accType'];

    if($usernameR != $username){
        header("Location:marv.html");
    }
    else{
        if($password != $passwordR){
            header("location:marv.html");
        }
        else{
            if($accType== 0){
                header("location:index.php");
                session_start();
                $_SESSION['name']=$usernameR;
                $_SESSION['email']=$email;
                $_SESSION['idnum']=$idnum;
                $_SESSION['accType']=$accType;
            }
            else{
                header("location:admin/index.html");
            }
        }
    }

    
}
else{
    echo"not submited";
}