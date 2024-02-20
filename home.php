<?php
session_start();
date_default_timezone_set("Asia/Calcutta");
$_SESSION['luser'] = $_POST['text1'];
$_SESSION['start'] = time();
$tm=$_SESSION['start'];
print "<p align='right'>Session started at " . date("h:i:sa",$tm) .
"<br>"; print "<form action='logoutpage.php' method='post'>";
print "<input type='submit' value='Logout'></p>";
print "</form>";
print "Hello " . $_SESSION['luser'];
?>