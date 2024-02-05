<!-- 
Two step verification done.
navaneethnaren6@gmail.com
Added password :(  kiom hewv qarw gljz  ) 
-->

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


    session_start();
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $mail=new PHPMailer(true);
        if( isset($_POST['email'])){
            $gmail_id=$_POST['email'];

            $sql="Select Email from voter_list";
            $result=mysqli_query($con,$sql);

            $flag=0;
            while($row = mysqli_fetch_assoc($result)){
                if($row['Email']==$gmail_id){
                    $flag=1;
                    break;
                }
            }
            if($flag==0){
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("No such Email ID found!"); 
                        window.location.href = "VoterLoginPage2.php";
                        }
                        </script>';
            }
            else{
                $otp=rand(00000,99999);
                $_SESSION['gmail_id']=$gmail_id;
                $_SESSION['otp']=$otp;

                //send email
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'navaneethnaren6@gmail.com';//your email
                $mail->Password = 'kiom hewv qarw gljz';//your gmail app password
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->SMTPDebug = 1;

                $mail->setFrom('navaneethnaren6@gmail.com');
                $mail->addAddress($gmail_id);
                $mail->isHTML(true);
                $mail->Subject = 'OTP Aunthetication';
                $mail->Body = 'Your OTP is: ' . $otp . '. 
                Please change your password upon authentication. 
                Thank you!';
                $mail->send();

                echo '<script type="text/javascript">
                    window.onload = function () { 
                    alert("Successfully sent the OTP"); 
                    window.location.href = "EnterOTP.php";
                    }
                    </script>';
            }            
        }
    }
?>

