<?php 
//create database, table and insert records.

    //creates a variable called $con (for connection) and sets it equal to a built-in
    // function for connecting to mySQL. You need to supply the hostname, username, and
    // password for your mySQL server
    $mysqli = new mysqli('localhost', 'ambe', 'FocusMoi');

    if(!$mysqli) {                                          //if not connected
        die('Could not connect: '.mysqli_error($mysqli));   //stip further code execution and print error
    }

    echo 'Connected successfully to mysql.<br>';  //in case of successful connection

    //create database
    if($mysqli->query("CREATE DATABASE Cars")=== TRUE){
        echo"<p>Database cars created</p>";
    } else {
        echo"Error creating cars database:".mysqli_error($mysqli)."<br>";
    }

    //select database to work with
    //reates a variable called $selected which uses a built-in function for selecting a mySQL database
    // Select database to work with
    if ($mysqli->select_db("Cars")) {
        echo "Selected the cars database<br>";
    } else {
        die("Error selecting database: " . mysqli_error($mysqli) . "<br>");
    }

    
    
    //create table in above db
    //create a variable called query that holds an sql statement.
    // Check if the table exists
$tableExists = $mysqli->query("SHOW TABLES LIKE 'INVENTORY'");
if ($tableExists->num_rows == 0) {
    // Create table in the above db
    $query = "CREATE TABLE INVENTORY (
        VIN varchar(17) PRIMARY KEY, 
        YEAR INT, 
        Make varchar(50), 
        Model varchar(100),
        TRIM varchar(50), 
        EXT_COLOR varchar(50), 
        INT_COLOR varchar(50), 
        ASKING_PRICE DECIMAL(10,2),
        SALE_PRICE DECIMAL(10,2), 
        PURCHASE_PRICE DECIMAL(10,2), 
        MILEAGE int,
        TRANSMISSION varchar(50), 
        PURCHASE_DATE DATE, 
        SALE_DATE DATE
    )"; 

    if ($mysqli->query($query) === TRUE) {
        echo "Table INVENTORY created successfully.<br>";
    } else {
        echo "Error creating table: " . mysqli_error($mysqli) . "<br>";
    }
} else {
    echo "Table INVENTORY already exists.<br>";
}


//insertion into the database
//change value of query to new sql statement
$query = "INSERT INTO `Cars`.`INVENTORY` (
    `VIN`, `YEAR`, `Make`, `Model`, `TRIM`, `EXT_COLOR`, `INT_COLOR`, `ASKING_PRICE`,
    `SALE_PRICE`, `PURCHASE_PRICE`, `MILEAGE`, `TRANSMISSION`, `PURCHASE_DATE`,
    `SALE_DATE`)
    values ((‘5FNYF4H91CB054036’, ‘2012’, ‘Honda’, ‘Pilot’, ‘Touring’, ‘White Diamond Pearl’, ‘Leather’, ‘37807’,
NULL, ‘34250’, ‘7076’, ‘Automatic’, ‘2012-11-08’, NULL);";


//test for execution of sql in variable query
if($mysqli->query($query)===true) {
    echo"<p>honda pilot inserted into inventory table</p>";
} else {
    echo"<p>Error inserting honda pilot: </p>".mysql_error();
    echo"<p>***********</p>";
    echo $query ;
    echo "<p>***********</p>";
}

?>