<?php
// Connect to the database (replace these values with your database credentials)
$servername = "localhost";
$username = "root";
$password = "Deepika@123";
$dbname = "Login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Login_names from Login_Info table
$sql = "SELECT Login_name FROM Login_Info";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["Login_name"] . "</p>";
    }
} else {
    echo "No users found";
}

$conn->close();
?>
