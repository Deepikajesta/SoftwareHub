<?php
 $conn=mysqli_connect("localhost","root","");
 if($conn->connection_error){
    die("connection failed:".$conn->connection_error);
 }
 else{
   echo "Connected Successfully";
 }
// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>




 /*$result=mysqli_query($connection,$sql);
 if($result)
 {
     echo "Database created succesfully";
 }
 else{
   echo "Error creating database".$connection->error;
  }*/
  $connection->close();
 ?>
