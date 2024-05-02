<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the new login name and password from the request
    $newLoginName = $_POST["newLoginName"];
    $newPassword = $_POST["newPassword"];

    //  Validate and sanitize the input data if needed
    // $hash=password_hash($newPassword,PASSWORD_DEFAULT);
    $otp=0;

    // Connect to your database (replace with your actual database credentials)
    $conn = new mysqli("localhost", "root", "Deepika@123", "Login");
    echo "$newLoginName";

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the new user into the Login_info table
    $sql = "INSERT INTO Login_Info (Login_name, Login_pass,otp) VALUES ('$newLoginName', '$newPassword','$otp')";

    if ($conn->query($sql) === TRUE) {
        echo "New user inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
