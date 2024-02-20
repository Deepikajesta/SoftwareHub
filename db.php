<?php  
    $con=mysqli_connect("localhost","root","Deepika@123","sem_results");
    if($con)
    {
       echo "connected succesfully";
    }
    else{
       echo "failed connection";
    }
    $sql="insert into marks (id,STUDENT_NAME,FATHER_NAME,DBMS,DLD,DAA,FLAT,P&S) values('O190300','K.HEMA','K.KOTESWAR',78,65,34,56,54)";
    $result=mysqli_query($con,$sql);
    if($result)
    echo "data inserted succesfully";
    else{
      echo "data not inserted";
    }
?>