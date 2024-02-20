<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();

$error = ""; // Initialize the error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $Login_Name = $_POST["Login_name"];
    $Login_pass = $_POST["Login_pass"];
    $username = htmlspecialchars($Login_Name);
    $password = htmlspecialchars($Login_pass);
    $conn = new mysqli("localhost", "root", "Deepika@123", "Login");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the username exists
    $sql = "SELECT * FROM Login_Info WHERE Login_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, fetch user data
        $row = $result->fetch_assoc();
        
        // Check if the entered password matches the stored hashed password
        if ($password=== $row["Login_pass"]) {
            // Password matches; user is authenticated
            session_start();

            $_SESSION["Name"] = $row["Login_name"];
            header("Location: ./index.php"); // Redirect to the index.html page
            exit();
        } else {
            // Password does not match
            $error = "Incorrect Email or password. if email is crct pls try to remember password or recover password";
            echo '<script type="text/javascript">alert("' . $error . '");</script>';
            echo '<script type="text/javascript">window.location.href = "signin.html";</script>';
        }
    } else {
        // Username does not exist
        $error = "Username not found";
    }

    $stmt->close();
    $conn->close();
}

if (!empty($error)) {
    // Display an error message on the same page
    echo '<script type="text/javascript">alert("' . $error . '");</script>';
}
?>
