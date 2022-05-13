<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "config3.php";
     
    $emailId = $_POST['email'];
 
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     $salt=rand(100000,999999);
     $token = hash('sha256', $salt);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($conn,"UPDATE users set  password='".$token."' WHERE email='" . $emailId . "'");
 
    $link = "<a href='www.yourwebsite.com/reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    require_once('PHPMailer/PHPMailerAutoload.php');
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "deesse.noreply@gmail.com";
    // GMAIL password
    $mail->Password = "20312146";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='deesse.noreply@gmail.com';
    $mail->FromName='reset Password';
    $mail->AddAddress($emailId, 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Your newPassword is : "'.$salt.'" , we recommend you to change your password after login  ';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>