<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the entered name from the POST data
    $searchName = $_POST["searchName"];

    // Database connection parameters
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

    // Query to check if the username exists in the Login_Info table
    $sql = "SELECT * FROM Login_Info WHERE Login_name = '$searchName'";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Check if any rows were returned
        if ($result->num_rows > 0) {
            echo "Username found!";
        } else {
            echo "Username not found.";
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the request is not a POST request, return an error message
    echo "Invalid request method.";
}
?>
