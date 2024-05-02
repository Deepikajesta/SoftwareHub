<!DOCTYPE html>
<html>
    <head>

    </head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();
   $host = "localhost";
   $user = "root";
   $pass = "Deepika@123";
   $db   = "Login";
   $conn = null;
   include('zip_verification/smtp/PHPMailerAutoload.php');
   
   $conn = mysqli_connect($host,$user,$pass,$db);
   // Check connection

   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
    
//    print_r($_POST);
    //$email= $_POST['mail'];
    //$email="shabberalisk6@gmail.com";
    
    $email=$_POST['mail'];
    $sql="SELECT Login_name FROM Login_Info WHERE Login_name='$email' ";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $n = 6; 
    
    $otp=generateNumericOTP($n);
    $sql1="UPDATE Login_Info SET otp='$otp' WHERE Login_name='$email' ";
    if (mysqli_query($conn, $sql1)) {
       //  echo "Record updated successfully";
      }
   
     
    echo smtp_mailer($email,'Verification',$otp);
    $_SESSION['email']=$email;
    header("location:./otp_cal.html");
    ?>

<?php
    } 
    else{
        
        
        echo '<script type="text/javascript">  alert("Invalid Student Email");  </script>';
       // header("location:../login-ui/forgot.html");
       echo '<script type="text/javascript">  window.location.href="./forgot.html";  </script>';

       
    }

    

    function smtp_mailer($to,$subject, $msg){
        $mail = new PHPMailer(); 
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        //$mail->SMTPDebug = 2; 
        $mail->Username = "softwarehubcse@gmail.com";
        $mail->Password ="tjcwjdfeanvxwiau";
        $mail->SetFrom("softwarehubcse@gmail.com");
        $mail->Subject = $subject;
        $mail->Body =$msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        if(!$mail->Send()){
            echo $mail->ErrorInfo;
        }
    }
    
    //otp function


// Function to generate OTP 
function generateNumericOTP($n) { 
	
	
	$generator = "1357902468"; 

	$result = ""; 

	for ($i = 1; $i <= $n; $i++) { 
		$result .= substr($generator, (rand()%(strlen($generator))), 1); 
	} 

	// Return result 
	return $result; 
} 

// Main program 

mysqli_close($conn);
?> 

    
</body>
</html>
