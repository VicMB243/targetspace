<?php

    include('controller/connection.php');
    include('send_email.php');
    

    if(isset($_POST["submit"])){




                $username = mysqli_real_escape_string($conn,$_POST['name']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $message = mysqli_real_escape_string($conn,$_POST['message']);
                $subject = "Comment from website visitors: ";
                $dateTime = date("Y-m-d H:i:s");
        
                
                $body = "<p> Message details</p>
                <h3>
                
                Username: $username <br>
                Email: $email <br>
                Date: $dateTime <br>
                Comment: </h3><p>$message</p><br>
                
                
                <hr>
                <p allign='center'>
                This email was intended for Targetspace and it was sent by $email
                </p>";
        

                if(send_email($email, $username, $subject, $body)){


                    $sql = "INSERT INTO `messages` (`username`,`email`, `message`,`date_time`)
                    VALUES ('$username','$email','$message', '$dateTime' )";
                    if(mysqli_query($conn,$sql)){
                        echo "
                        <script>
                            if (confirm('Thank you, You will Receive a Confirmation Email'));
                            {
                            window.location = 'contact.html';
                            }
                        </script>";
                        header ('Location:contact.html');
                                
                    }else{
                        

                        echo "<script>
                            if (confirm('Sorry, An error has occured'));
                            {
                            window.location = 'contact.html';
                            }
                        </script>";
                        header ('Location:contact.html');
                    }
                    

                    
                }else{
                    echo "<script>
                            if (confirm('Sorry, An error has occured'));
                            {
                            window.location = 'contact.html';
                            }
                        </script>";
                        header ('Location:contact.html');
                }

   
    }
    
    ?>