
<?php

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    $style="";
}
else{
    $msg="";
    $style="Style=display:none;";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/marv.css">
</head>
<body>
    <section class="first-section" style="background-color: silver;">
        <div class="heading">
            <h1>LO<span>G</span>IN FORM</h1>
            
        </div>
        <form action="formhandler.php" method="post">  
            <div class="container">
                <label for="username">Username</label>
                <input type="username" placeholder="Enter username" name="username" required>
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <input type="submit" value="Log-In" name="submit" id="subbmit" style="background-color: tomato;
                color: white;
                font-size: 14px;
                letter-spacing: 2px;
                font-weight: bold;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                border-radius: 4px;"
                >

                
                <label class="check">
                    <input type="checkbox"  name="remember">remember me?
                </label>
                <p <?php echo $style?> ><?php echo $msg?></p>
            </div>
        </form>
        <h2 style=" position: absolute;
    padding: 8px;
    width: 100px;
    right: 3%;
    top: 8%;
    font-size: 16px;
    background: orange;
    color: white;
    border: 1.8px solid tomato;
    letter-spacing: 1.5px;
    cursor: pointer;
    border-radius: 8px;
    transform: 1s;
    "> <a href="login form.php" style="color: white">Sign Up</a></h2>
        <!-- <button class="sign" id="butts">Sign Up</button> -->
    </section>
</body>
</html>