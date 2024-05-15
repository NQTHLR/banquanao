<?php
include('../db/connect.php');
session_start();
$user_email = $_SESSION['email'];
$otp = mt_rand(100000, 999999);
$sql = "update user_info set otp = '$otp' where user_email = '$user_email'";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die(mysqli_error($conn));
}
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'con.gadoi@gmail.com';
    $mail->Password   = 'wrong@password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    //$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('19202103242@cse.bubt.edu.bd', 'Administrator');
    $mail->addAddress($user_email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    // $mail->Body    = file_get_contents("mail_template.php");
    $mail->Body    = ('Có phải bạn vừa gửi yêu cầu đặt lại mật khẩu? Nếu đúng,<br><br>đây là OTP để xác nhận đặt lại mật khẩu: <strong>' . $otp . '</strong><br><br>Nếu không phải bạn, hãy đổi mật khẩu.<br><br><hr>');
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        echo '<script>alert("Message has been sent to your mail")</script>';
        echo '<script>window.open("../page/check_otp.php","_self")</script>';
    } else {
        echo "Không thể gửi mã OTP ngay lúc này.";
    }
} catch (Exception $e) {
    echo "Không thể gửi mã OTP ngay lúc này. Lỗi: {$mail->ErrorInfo}";
}
