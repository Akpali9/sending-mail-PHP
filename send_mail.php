<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $firstname=$_POST['FirstName'];
    $lastname=$_POST['LastName'];
    $location=$_POST['Location'];
    $email=$_POST['Email'];
    $phonenumber=$_POST['PhoneNumber'];
    $Attendingwithchildren=$_POST['AttendingwithChildren'];
    $code=generateRandomCode();

    function generateRandomCode(){
      $code=".random_combination(strlen('IFPC') +strlen(1:3000)).";
      return $code;
    }
  
    $to = 'francisakpali9@gmail.com';
    $subject ='New Form Submission'
    $headers ="From: $email\r\n"; . "Reply-To: $email\r\n" . "X-Mailer: PHP/" .phpversion();
    $body="First Name: $firstname\n"."Last Name:$lastname\n". "Email: $email\n"."Location: $location\n"."PhoneNumber: $phonenumber\n"."Attending With Children: $Attendingwithchildren\n";

    if (mail($to,$subject,$body,$headers,$code)) {
        echo 'Thank you, You successfully registered!';
    }
    else {
        
        echo 'There was an error spending your message, try again.';
    }
$mailer= new PHPMailer();
$mailer->From="mylamworldinfo@gmail.com";
$mailer-->addTo($email['Email']);
$mailer-->body="Thank you for registering for IFPC, YOUR REGISTRATION CODE IS: $code.";
$mailer-send();

}
?>