 <?php
          $servername="localhost";
          $username="root";
          $password="Deepika@123";
          $dbname="sem_results";
          $conn=new mysqli( $servername,$username,$password,$dbname);
          if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
           }
           echo "Connected successfully";
 ?>
