<?php 
    //putting this code here so it can easily be reused if needed and changed easily too.
     //connect to the Cars database
     //$mysqli is The object representing the MySQL connection
     $mysqli = new mysqli('localhost', 'ambe', 'FocusMoi', 'Cars');
    
     //check connection
     if(mysqli_connect_error()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
     } else {
      echo"success connecting to the database"."<br>";
     }

     //select database to work with
     $mysqli->select_db("Cars");


?>