<?php

    
   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';


    
    

    function send_email($sender, $sendersName, $subject, $body){

       

                        
                    //create object of PHPMailer
                $mail= new PHPMailer(true);
                $receiver = "vicbiloko@gmail.com";


                try{
                    $mail->SMTPDebug = 0;    //Enable verbose debug output
                    $mail->isSMTP(); 
                    
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    //gmail id for SMTP Server
                    $mail->SMTPSecure='tls'; //security
                    $mail->Username="thuodsjr11@gmail.com";// gmail id as the SMTP server 
                    $mail->Password="10227301018edwins";


                    $mail->SetFrom("$sender", "Targetspace Visitors comment");//send email
                    $mail->AddAddress("$receiver", "Targetspace Admin");//receive email
                    
                    $mail->AddReplyTo("$sender", "$sendersName");


                    

                
                    $mail->isHTML(true);
                    $mail->Subject="$subject";
                    $mail->Body = "$body";
                    $mail->AltBody='
                    You require HTML enabled device to view this email.
                    ';

                    $mail->send();
                    return true;
                        

                }
                catch(Exception $e){
                    return false;
                }


    }




    ?>