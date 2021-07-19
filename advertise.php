<?php

    include('controller/connection.php');
    include('send_email.php');

    if(isset($_POST["submit"])){

        

        $username = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $subject = mysqli_real_escape_string($conn,$_POST['subject']);
        $description = mysqli_real_escape_string($conn,$_POST['description']);
        $dateTime = date("Y-m-d H:i:s");




                $header = "Targetspace advertisment inquiry: ";
                $dateTime = date("Y-m-d H:i:s");
        
                
                $body = "<p> $subject</p>
                <h3>
                
                Username: $username <br>
                Email: $email <br>
                Phone: $phone <br>
                Date: $dateTime <br>
                Description: </h3><p>$description</p><br>
                
                
                <hr>
                <p allign='center'>
                This email was intended for Targetspace and it was sent by $email
                </p>";
        

                if(send_email($email, $username, $header, $body)){


                    $sql = "INSERT INTO `adverts` (`username`,`email`, `phone`,`subject`,`description`,`date_time`)
                    VALUES ('$username','$email','$phone','$subject','$description', '$dateTime' )";

                    if(mysqli_query($conn,$sql)){
                        echo "
                        <script>
                            if (confirm('Thank you, You will Receive a Confirmation Email'));
                            {
                            window.location = 'advertise.html';
                            }
                        </script>";
                        header ('Location:advertise.html');
                                
                    }else{
                        

                        echo "<script>
                            if (confirm('Sorry, An error has occured'));
                            {
                            window.location = 'advertise.html';
                            }
                        </script>";
                        header ('Location:advertyise.html');
                    }
                    

                    
                }else{
                    echo "<script>
                            if (confirm('Sorry, An error has occured'));
                            {
                            window.location = 'advertise.html';
                            }
                        </script>";
                        header ('Location:advertise2.html');
                }













        $sql = "INSERT INTO `adverts` (`username`,`email`, `company_name`,`location`,`budget`,`date_time`)
        VALUES ('$username','$email','$compName','$location','$budget', '$dateTime' )";
        if(mysqli_query($conn,$sql)){
            $_SESSION['status'] = "Message sent successfully!\n We will get back to you as soon as possible";
            $_SESSION['status_code'] = "Success";
            header ('Location:advertise.html');
                    
        }else{
            $_SESSION['status'] = "An error has occured";
            $_SESSION['status_code'] = "error";
        }
        

    }
    ?>