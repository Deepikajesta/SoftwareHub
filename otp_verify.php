<?php  
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
// include('./otp.php');
$entered=$_POST['result'];
$entered1=(int)$entered;

//echo $entered;
$host = "localhost";
   $user = "root";
   $pass = "Deepika@123";
   $db   = "Login";
   $conn = null;
   
   $email=$_SESSION['email'];
   $conn = mysqli_connect($host,$user,$pass,$db);
   // Check connection

   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "SELECT otp FROM Login_Info WHERE Login_name='$email' ";
   $result = mysqli_query($conn, $sql);
   
   if (mysqli_num_rows($result) > 0) {
     // output data of each row
     $row = mysqli_fetch_assoc($result);
     $value = $row['otp'];
   } else {
     
   }
   
    
if($entered1==$value)
{
    header("location:./otp_verify_link.html");
}
else
{   
    echo "<script> alert('Invalid OTP'); </script>";
  //   header("location:../login-ui/forgot.html");
  echo '<script type="text/javascript">  window.location.href="./otp_verify.php";  </script>';

}


?>
