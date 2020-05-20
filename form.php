<?php
    if(isset($_POST['submit'])){
        $to = 'info@alternativevoice.net';
        //get fields from the form
        $from = $_POST['email'];
        $fullname = $_POST['fullname'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = 'From: '.$from ;
        $fullmessage ='Name: '.$fullname."\r\n".'Email: '.$from."\r\n".'Subject: '.$subject."\r\n\n".'The mail is as follows: '."\r\n".$message;
        //check whether the email is valid
        if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
            header('Location: index.html');
            exit();
        }else{
            mail($to,$subject,$fullmessage,$headers);
            echo "Mail sent";
        }
    }
?>