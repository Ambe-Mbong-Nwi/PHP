<html>
    <head>
        <title>Car Inserted into Database</title>
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <?php 
        //         At the risk of stating the obvious, the stripslashes command removes any slashes the
        // users and mysql_real_escape command removes the quote characters. eg $model = stripslashes($mypassword);
        // $make = mysql_real_escape_string($myusername);
        //capturing the values entered by the user after submission

            $VIN = $_POST['VIN'];
            $Make  = $_POST['Make'];
            $Model = $_POST['Model'];
            $Price = $_POST['Asking_Price'];


        //build insert query using the values above and assign to query variable
        //use correct quotes or insert below might not work. back ticks are used for column names so here use single quotes.
        $query = "INSERT INTO INVENTORY
            (VIN, Make, Model, ASKING_PRICE)
            VALUES (
                '$VIN',
                '$Make',
                '$Model',
                '$Price'
                )";
        
        //print query to the browser
        //to add two strings together in php use . eg below joing the query and the br.
        echo($query."<br>");


        //connect to the Cars database
        //$mysqli is The object representing the MySQL connection
       // $mysqli = new mysqli('localhost', 'ambe', 'FocusMoi', 'Cars');
         include '7includedb.php';   //placed statement in diff file and reused here for ease in case change is ever needed

        //check connection
        if (mysqli_connect_error()) {
            printf("connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        echo 'Connected successfully to mysql. <BR>';


        //select database to work with
        $mysqli->select_db("Cars");
         echo("selected the cars database. <br>");

         //inserting new car into database
//          $result: A variable that will store the result of the query.
//          $mysqli: The object representing the MySQL connection (created earlier).
        // ->: This arrow operator is used in object-oriented programming in PHP. It accesses properties or methods of an object.
        // query: A method of the $mysqli object that executes the SQL query.
        // ($query): Passing the SQL query string as an argument to the query method.


        //In PHP, the arrow operator (->) is used to access properties and methods of an object. In this case, $mysqli->query($query) calls the query method on the $mysqli object, which is an instance of the MySQLi class.
         if($result = $mysqli->query($query)) {
            echo "<p>You have successfully entered $Make $Model into the database</p>";
         } else {
            echo "Error entering $VIN into the database: ".mysqli_error($mysql)."<br>";
         }

         $mysqli->close();
        ?>

    </body>
</html>





<!-- difference between -> and => -->
<!-- class Car {
    public $make;
    public function displayMake() {
        return $this->make;
    }
}

$myCar = new Car();
$myCar->make = 'Honda'; // Using -> to set the property
echo $myCar->displayMake(); // Using -> to call a method
=> Operator
Usage: This is the key-value pair operator used in arrays.
Purpose: It is used to associate keys with values in associative arrays.
Example:
php
Copy code
$carDetails = [
    'make' => 'Honda', // 'make' is the key, 'Honda' is the value
    'model' => 'Civic'
];

echo $carDetails['make']; // Accessing the value using the key
Summary
->: Used for accessing methods and properties of an object (object-oriented).
=>: Used to define key-value pairs in associative arrays. -->