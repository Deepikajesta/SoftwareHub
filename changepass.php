<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Check the session for debugging purposes
var_dump($_SESSION);

$servername = "localhost";
$username = "root";
$password = "Deepika@123";
$dbname = "Login";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
if(isset($_SESSION['Name']))
{

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curr = $_POST["currentPassword"];
    $currentPassword=password_verify($curr,PASSWORD_DEFAULT);
    echo "$currentPassword";
    $newPassword = $_POST["newPassword"];

    // Simulate user authentication (replace with your actual authentication logic)
    $username = $_SESSION['Name']; // Replace with the actual username
    $stmt = $conn->prepare("SELECT Login_pass FROM Login_Info WHERE Login_name = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Password is correct, update the password
        $hashedNewPassword = $newPassword;
    
        $stmt = $conn->prepare("UPDATE Login_Info SET Login_pass = :password WHERE Login_name = :username");
        $stmt->bindParam(":password", $hashedNewPassword);
        $stmt->bindParam(":username", $username);
        
        if ($stmt->execute()) {
            echo "Password updated successfully!";
        } else {
            echo "Error updating password: " . implode(" ", $stmt->errorInfo());
        }
    
        // Redirect to the home page or display a success message
        header("Location: ./index.php");
        exit();
    }
    }
    elseif(isset($_SESSION['admin']))
    { if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curr = $_POST["currentPassword"];
    $currentPassword=password_verify($curr,PASSWORD_DEFAULT);
    echo "$currentPassword";
    $newPassword = $_POST["newPassword"];

    // Simulate user authentication (replace with your actual authentication logic)
    $username = $_SESSION['admin']; // Replace with the actual username
    $stmt = $conn->prepare("SELECT password FROM Admin_info WHERE adminname = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Password is correct, update the password
        $hashedNewPassword = $newPassword;
    
        $stmt = $conn->prepare("UPDATE Admin_info SET password = :password WHERE adminname = :username");
        $stmt->bindParam(":password", $hashedNewPassword);
        $stmt->bindParam(":username", $username);
        
        if ($stmt->execute()) {
            echo "Password updated successfully!";
        } else {
            echo "Error updating password: " . implode(" ", $stmt->errorInfo());
        }
    
        // Redirect to the home page or display a success message
        header("Location: ./index.php");
        exit();

 }
 }
    else {
        // Incorrect current password, display an error message
        echo "Incorrect current password";
    }

?>
