<?php
require "includes/connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    session_start();

    $usernameR=$_SESSION['name'];
    $email=$_SESSION['email'];
    $idnum=$_SESSION['idnum'];
    $period=$_POST['duration'];
    $numRooms=$_POST['roomNO'];
    $numBeds=$_POST['NO_of_beds'];
    $city=$_POST['city'];
    $quality=$_POST['quality'];
    $type=$_POST['roomType'];

    $sql="INSERT INTO bookings (name,email,idnum,period,numrooms,numbeds,city,roomquality,roomtype) values ('$usernameR','$email','$idnum','$period','$numRooms','$numBeds','$city','$quality','$type')";
    //mysqli_query($conn,$sql);
    if(mysqli_query($conn,$sql)){

        echo "hello";


            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                             
				    try {
				        //Server settings
				        $mail->isSMTP();                                     
				        $mail->Host = 'smtp.gmail.com';                      
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'alexkogo63@gmail.com';     
				        $mail->Password = 'AlekyKorir99@gmail.com';                    
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'ssl';                           
				        $mail->Port = 465;                                   

				        $mail->setFrom('alexkogo63@gmail.com');
				        
				        //Recipients
				        $mail->addAddress($email);              
				        $mail->addReplyTo($email);

                //Content
                $output= "<p>Hello $usernameR</p>
                          <p> Your booking for $numRooms rooms and $numBeds beds in $city for $period days has been received </p>
                          <p>Room quality: $quality</p>
                          <p>Room type: $type</p>";
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Your booking for Hennessis hotel was successful';
                $mail->Body    = $output;
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


        header("location:bookingDetails.php?msg=booking successfull check your email to confirm");
    }
}
else{
    header("location:bookingDetails.php");
}
