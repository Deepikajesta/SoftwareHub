<?php
// include ('./otp.php');
session_start();
$servername = "localhost";
$username = "root";
$password = "Deepika@123";
$dbname = "Login";
$pass=$_POST['pass'];
$email=$_SESSION['email'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE Login_Info SET Login_pass='$pass' WHERE Login_name='$email' ";

if (mysqli_query($conn, $sql)) {
 //  echo "Record updated successfully";
 echo "Password Updated Successfully! Re-Login'); </script>";
 //header("location:../../OES");
 echo '<script type="text/javascript">  window.location.href="signin.html";  </script>';

  
} else {
  echo "<script> alert('Error Occured Try Again'); </script>";
  //header("location:../login-ui/forgot.html");
  echo '<script type="text/javascript">  window.location.href="./forgot.html";  </script>';

 // echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
