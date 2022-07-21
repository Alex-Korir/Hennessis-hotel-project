<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST["submit"])){

//Load phpmailer
		    		require 'vendor/autoload.php';
            $msgname=$_POST['name'];
            $msgemail=$_POST['email'];
            $msgsubject=$_POST['subject'];
            $msgmessage=$_POST['message'];
            $email="reyclamar06@gmail.com";

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
				        $mail->addAddress($msgemail);              
				        $mail->addReplyTo($msgemail);
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = $msgsubject;
				        $mail->Body    = $msgmessage;

				        $mail->send();


				        $_SESSION['success'] = 'Account created. Check your email to activate.';
				        header('location: index.html');

				    } 
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				        header('location: index.html');
				    }

          }
else{
  echo"an error occured";
}