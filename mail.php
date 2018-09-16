<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $message = $_POST['subject'];
    $email = $_POST['email'];
    $from = 'From: Demo';
    $to = 'carellano96@gmail.com';
    $subject = 'Hello';
    $body= "From: $name\n Email: $email\n Message:$message";

    if ($_POST['submit']){
        if ($firstname !=''&&$lastname !=''&&$email !=''){
                if (mail($to,$subject,$body,$from)){
                    echo '<p> Your message has been sent!</p>';
                }
                else{
                    echo '<p>Something went wrong. Please go back and try again!</p>';

                }
            else if ($_POST['submit']&& $human!='5'){
                echo '<p>You answered the anti-spam question wrong!</p>';

            }
        }
        else{
            echo '<p> You need to fill in all fields!</p>';

        }
    }
?>