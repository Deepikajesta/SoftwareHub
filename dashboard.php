<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Connect to your database
// Example: $db = new mysqli('localhost', 'username', 'password', 'your_database');
// Ensure to handle database connection errors properly

// Fetch count of logged-in users from the database
$sql = "SELECT COUNT(*) as count FROM logged_in_users"; // Change 'logged_in_users' to your actual table name
$result = $db->query($sql);
if ($result) {
    $row = $result->fetch_assoc();
    $logged_in_users_count = $row['count'];
} else {
    $logged_in_users_count = 0; // Default to 0 or handle errors
}

// Fetch user data for display and deletion
$userData = array();
$sqlUsers = "SELECT * FROM users"; // Replace 'users' with your actual users table name
$resultUsers = $db->query($sqlUsers);
if ($resultUsers) {
    while ($row = $resultUsers->fetch_assoc()) {
        $userData[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Logged-in Users Count: <?php echo $logged_in_users_count; ?></p>

    <h3>Users List</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($userData as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- Other content and functionality -->
</body>
</html>

