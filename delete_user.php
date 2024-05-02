<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "Deepika@123";
$dbname = "Login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchName = $_POST["searchName"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM Login_Info WHERE Login_name = ?");
    $stmt->bind_param("s", $searchName);

    if ($stmt->execute()) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
