<?php
session_start(); // Start the session
if(!isset($_SESSION['Name'])&&!isset($_SESSION['admin']))
{
    $error = "User is not Logged in Please Login to Check User Profile";
    echo '<script type="text/javascript">alert("' . $error . '");</script>';
  header('Location:./signin.html');
  exit();
}
if(isset($_SESSION['Name']))
{
$name = $_SESSION['Name'];
$na= substr($name, 0, strpos($name, '@'));
$pass="************";
}
if(isset($_SESSION['admin']))
{
    $name = $_SESSION['admin'];
    $na= substr($name, 0, strpos($name, '@'));
    $pass="**********";   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: wheat; 
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px; 
            text-align: center;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px; 
        }

        h2 {
            margin-top: 10px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
        .link{
            color:palevioletred;
            margin-right:50px;
    
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <img class="im" src="soft.jpg" alt="Default Profile Image">
        <h2>User Profile</h2>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo $na; ?>" disabled>

        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo $name; ?>" disabled>

        <label for="password">Password</label>
        <input type="password" name="password" value="<?php echo $pass; ?>" disabled>
        <a  class="link"href="changepa.php">change password</a>
        <button onclick="goToHomePage()">Go Back to Home</button>
        
    </div>

    <script>
        function goToHomePage() {
            window.location.href = "index.php";
        }
    </script>

</body>
</html>
