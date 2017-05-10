<?php
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '158f254cadcbc7';                 // SMTP username
$mail->Password = '9aa473c9c32332';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom($data['contact']['email'], $data['contact']['user']);
$mail->addAddress($data['site']['email'], 'Heichal hakodesh admin');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($data['contact']['email'], $data['contact']['user']);
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $data['contact']['subject'];
$mail->Body    = $data['contact']['msg'];
$mail->AltBody = $data['contact']['msg'];

if(!$mail->send()) {
    $data['sent']['error_msg'] = 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $data['sent'] = true;
}
?>