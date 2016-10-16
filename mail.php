<?php

$to = 'jarek.wowra@gmail.com';
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['textmessage'];

if (!empty($subject) && !empty($phone) && !empty($name) && !empty($email) && !empty($message)){
    mail($to, $subject, $message.''.$name.''.$email.''.$phone);
    $response = 'sent';    
    echo json_encode($response);    

} else {
    echo 'co nie pasuje';
}