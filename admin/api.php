<?php 
    include 'connect.php';

    // accepted email function
    if(isset($_POST['acceptedEmail'])){
        $email = $_POST['acceptedEmail'];
        // echo $email;
        $sql = "UPDATE `exeatinfo` SET `status`='accepted' WHERE `email`='$email'";
        $result = $conn->query($sql);

        if($result === TRUE){
            echo "Exeat Status is now Accepted!";
            // echo "simi";

            // SEND EMAILL
            require 'PHPMailer_master/PHPMailerAutoload.php';
            
            $mail = new PHPMailer;
            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = "smtp.gmail.com"; 
            $mail->SMTPAuth = true;                               // Enable SMTP authentication  
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->Username = "simialuko24@gmail.com";
            $mail->Password = "Ebonydavid24";
            $mail->setFrom('simialuko24@gmail.com', 'Covenant University Exeat Application');
            $mail->addAddress($email);               // Name is optional
            
            $mail->Subject = 'Sign In Status';
            $mail->Body    = "Hi, Your Exeat Application has been accepted. Meet your Portal with a printout of this to issue you your Exeat Card";
            $mail->AltBody = "Hi, Your Exeat Application has been accepted. Meet your Portal with a printout of this to issue you your Exeat Card";
            
            if(!$mail->send()) {
                echo ' Error, the student could not be informed via Email. '.$mail->ErrorInfo;
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo ' Student has been informed via Email. ';
            }
        }
    }

    // declined email function
    if(isset($_POST['declinedEmail'])){
        $email = $_POST['declinedEmail'];
        // echo $email;
        $sql = "UPDATE `exeatinfo` SET `status`='declined' WHERE `email`='$email'";
        $result = $conn->query($sql);
        if($result === TRUE){
            echo "Exeat Status is now Declined!";

              // SEND EMAILL
              require 'PHPMailer_master/PHPMailerAutoload.php';
              
              $mail = new PHPMailer;
              
              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = "smtp.gmail.com"; 
              $mail->SMTPAuth = true;                               // Enable SMTP authentication  
              $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
              $mail->Port = 587;                                    // TCP port to connect to
              $mail->Username = "simialuko24@gmail.com";
              $mail->Password = "Ebonydavid24";
              $mail->setFrom('simialuko24@gmail.com', 'Covenant University Exeat Application');
              $mail->addAddress($email);               // Name is optional
              
              $mail->Subject = 'Sign In Status';
              $mail->Body    = "Your Exeat Application has been Declined. You are not Eligible to get an Exeat";
              $mail->AltBody = "Your Exeat Application has been Declined. You are not Eligible to get an Exeat";
              
              if(!$mail->send()) {
                  echo ' Error, the student could not be informed via Email. '.$mail->ErrorInfo;
                  // echo 'Mailer Error: ' . $mail->ErrorInfo;
              } else {
                  echo ' Student has been informed via Email. ';
              }
        }
    }


    // forgot Password
//     if(isset($_POST['fpemail'])){
//         $email = $_POST['fpemail'];
//         // echo $email;
//         $sql = "SELECT * FROM `rgera_admin_table` WHERE `email`='$email'";
//         $result = $conn->query($sql);
//         if(mysqli_num_rows($result)==1){
//             $message = substr(md5(uniqid(rand(), true)), -8, 8);
//             $sql2 = "UPDATE `rgera_admin_table` SET `emailVerify`='$message' WHERE `email`='$email'";
//             $result2 = $conn->query($sql2);
//             if($result2 === TRUE){

//                 require 'PHPMailer_master/PHPMailerAutoload.php';

// $mail = new PHPMailer;

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = "smtp.gmail.com"; 
// $mail->SMTPAuth = true;                               // Enable SMTP authentication  
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to
// $mail->Username = "simialuko24@gmail.com";
// $mail->Password = "Ebonydavid24";
// $mail->setFrom('simialuko24@gmail.com', 'Royal Gardens Residents Association');
// $mail->addAddress($email);               // Name is optional

// $mail->Subject = 'Forgot Password Verification Code';
// $mail->Body    = $message;
// $mail->AltBody = $message;

// if(!$mail->send()) {
//     echo 'Message could not be sent.'.$mail->ErrorInfo;
//     // echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent. Check your mail for a verification code!';
// }

//             }
//         }else{
//             echo "Please, your entries don't match what is in the database!";
//         }
//     }

    //verification code
    // if(isset($_POST['code'])){
    //     $code = $_POST['code'];
    //     $sql = "SELECT `emailVerify` FROM `rgera_admin_table` WHERE `emailVerify`='$code'";
    //     $result = $conn->query($sql);
    //     if(mysqli_num_rows($result)==1){
    //         $sql2 = "UPDATE `rgera_admin_table` SET `emailVerify`= NULL WHERE `emailVerify`='$code'";
    //         $result2 = $conn->query($sql2);
    //         if($result2=== TRUE){
    //            echo "You can now change your password!";
    //         }else{
    //             echo "error performing request, try again later.";
    //         }
    //     }else{
    //         echo "code is not correct!";            
    //     }
    // }

    // if(isset($_POST['newpassword']) && isset($_POST['newpasswordEmail'])){
    //     echo "how are you";
    // }

?>
