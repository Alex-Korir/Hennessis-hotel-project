<?php

    if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
    }
    else{
        $msg="";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Login Form</title>
    <link rel="stylesheet" href="./css/login form.css">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;600&family=RocknRoll+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;600&family=Fira+Sans+Condensed:wght@200&family=Fredoka+One&family=Permanent+Marker&family=RocknRoll+One&display=swap" rel="stylesheet">
</head>
<body>
    <section class="pageone">
        <div class="clearfix" style="height:82vh; background-color: linear-gradient(rgba(0,0,0,0.5),rgba(255,255,255,0.3)); ">
            <div class="picha"><!--
                <img src="/pexels/login form.jpg" alt="This is the forms image">
            --></div>
            <div class="form">
                    <h3 class="heading">Create Account</h3>
                                <p>
                                    <?php echo $msg?>
                                </p>
                                <form action="signuphandler.php" method="POST"  class="input fields">
                                    <div class="formsub">
                                        <input class="data" type="text" name="fullnames" placeholder="Full Name" required>
                                        <input class="data" type="email" name="EmailAddress" placeholder="Email Address" required>
                                        <input class="data" type="text" name="phonenumber" placeholder="Phone Number - Optional" required>
                                        <input class="data" type="password" name="Password" placeholder="password" required>
                                        <input class="data" type="number" name="idnumber" placeholder="ID Number" required>
                                        <input class="data" type="password" name="confirmpassword" placeholder="Confirm password" required>
                                    </div>
                                        <div class="register">
                                            <div class="click">
                                               <input type="submit" value="SIGN UP NOW" name="submit" class="buttons">
                                            </div>
                                        </div>
                                </form>
            </div>
        </div>
        <div class="remarks">
            <p>This company offers great supply in cing elit. Doloribus, nostrum dolore repellendus possimus architecto, hic enim pariatur sequi autem, voluptate voluptas<br>
                <p class="centre">laborum porro temporibus dolores quis perspiciatis corrupti incidunt illo eveniet? Non tempore impedit suscipit accusamus porro, quisquam ullam?<br>
                Lorem ipsum <a href="#">alexkogo63@gmail.com</a> adipisicing elit. Earum, <span id="word">molestias!</span></p></p>
        </div>
        </section>
        <section class="rainbow-background">

        </section>
</body>
</html>