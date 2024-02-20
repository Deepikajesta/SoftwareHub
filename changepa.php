<?php
session_start();
$name=$_SESSION['Name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: #ff0000;
            margin-top: 5px;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("passwordForm");
            const newPasswordInput = document.getElementById("newPassword");
            const confirmNewPasswordInput = document.getElementById("confirmNewPassword");
            const errorContainer = document.getElementById("errorContainer");

            form.addEventListener("submit", function (event) {
                const newPasswordValue = newPasswordInput.value;
                const confirmNewPasswordValue = confirmNewPasswordInput.value;

             
                const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

                if (!passwordRegex.test(newPasswordValue)) {
                    event.preventDefault();
                    errorContainer.textContent = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.";
                } else if (newPasswordValue !== confirmNewPasswordValue) {
                    event.preventDefault();
                    errorContainer.textContent = "New password and confirm new password must match.";
                }
            });
        });
    </script>
    <title>Password Change Form</title>
</head>
<body>
    <form id="passwordForm" method="POST" action="changepass.php">
        <label for="currentPassword">Current Password</label>
        <input type="password" id="currentPassword" name="currentPassword" required>

        <label for="newPassword">New Password</label>
        <input type="password" id="newPassword" name="newPassword" required>

        <label for="confirmNewPassword">Confirm New Password</label>
        <input type="password" id="confirmNewPassword" name="confirmNewPassword" required>
        <div id="errorContainer" class="error"></div>

        <button type="submit">Submit</button>
             <button onclick="goToHomePage()">Go Back to Home</button>

    <script>
        function goToHomePage() {
            window.location.href = "index.php";
        }
    </script>
        
    </form>
</body>
</html>

