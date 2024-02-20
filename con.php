<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$servername = "localhost";
$username = "root";
$password = "Deepika@123";
$dbname = "Login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $password = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["Login_name"]);
    $password = test_input($_POST["Login_pass"]);
    $otp=0;

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $checkSql = "SELECT * FROM Login_Info WHERE Login_name = '$email'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        $errorMessage = "Email already exists";
    } else {
        // Insert new user into the Login_Info table
        $insertSql = "INSERT INTO Login_Info (Login_name, Login_pass,otp) VALUES ('$email', '$hashed_password','$otp')";
        $res = $conn->query($insertSql);

        if ($res) {
            echo '<script type="text/javascript">alert("Record inserted. Please login to continue.");</script>';
            // You can redirect to the same page or another page as needed
            echo '<script type="text/javascript">window.location.href = "index.html";</script>';
            exit(); // Added exit() to prevent further execution
        } else {
            $errorMessage = "Unable to create the record";

        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Display an error message if the email already exists
if (!empty($errorMessage)) {
    echo '<script type="text/javascript">alert("' . $errorMessage . '");</script>';
    // You can redirect to the same page or another page as needed
    echo '<script type="text/javascript">window.location.href = "index.html";</script>';
    exit(); // Added exit() to prevent further execution
}

$conn->close();
?>
