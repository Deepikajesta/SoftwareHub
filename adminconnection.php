<?php
session_start();

$error = ""; // Initialize the error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $Login_Name = $_POST["Login_Name"];
    $Login_pass = $_POST["Login_pass"];
    $username = htmlspecialchars($Login_Name);
    $password = htmlspecialchars($Login_pass);
    $conn = new mysqli("localhost", "root", "Deepika@123", "Login");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Use the correct table name and column names based on your database schema
    $sql = "SELECT * FROM Admin_info WHERE adminname = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password === $row["password"]) {

            // Password matches; user is authenticated
            $_SESSION["admin"] = $row["adminname"];   // Store user ID in the session
            header("Location: ./index.php"); // Redirect to the admi1.html page
            exit();
        } else {
            // Password does not match
            $error = "Incorrect password";
        }
    } else {
        // Username does not exist
        $error = "Username not found";
    }

    $stmt->close();
    $conn->close();
}

if (!empty($error)) {
    // Display an error message and stay on the same page
    echo '<script type="text/javascript">alert("' . $error . '");</script>';
}
?>

