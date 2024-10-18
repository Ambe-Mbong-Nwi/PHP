<html>
    <head>
        <title>Ambe's used cars</title>
        <link rel="stylesheet" href="7styles.css" type="text/css">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <h1>Ambe's used cars</h1>
        <h3>Complete inventory</h3>
    
        <!-- php code -->
        <?php 
            //create link to db by including this file which defines that code
            include '7db.php';

            //make the query statement and assign to variable
            $query = "SELECT * FROM INVENTORY WHERE YEAR IS NULL";

            //now query the database
            if($result = $mysqli->query($query)) {
                echo "success";
            } else {
                echo "Error getting cars from the database:".mysqli_error($mysql)."<br>";
            }

            //display car details in a tabular format
            echo "<table id ='Grid' style='width: 80%;'>";
            echo "<tr>";
            echo "<th style='width: 50px'>Make</th>";
            echo "<th style='width: 50px'>Model</th>";
            echo "<th style='width: 50px'>Asking Price</th>";
            echo "<th style='width: 50px'>Delete</th>";
            echo "<tr>\n"; //close the header row

            $class="odd"; //keep track of class to implement alternate row styling



            //$result_ar: This is a variable that will store each row of data retrieved from the database as an associative array.
            //mysqli_fetch_assoc($result): This is a function that fetches a result row as an associative array. It takes the result set $result (from the previous database query) and returns the next row as an associative array, where the keys are the column names.
            //$result_ar['Make']: This accesses the value associated with the 'Make' key in the $result_ar array (the current row of data).

            //loop through all rows returned by query and create a table row for each
            while ($result_ar = mysqli_fetch_assoc($result)) {
                echo "<tr class=\"$class\">";           //the \ are to tell php to treat " as it is and not interprete class as a string as it normally does.
                // echo "<td>".$result_ar['Make']."</td>";
                //open cardetails and pass it query string of vin= followed by a vin
                echo "<td><a href='7carDetails.php?VIN=".$result_ar['VIN']."'>".$result_ar['Make']."</a></td>";

                //to be used as edit by passing the model then targeting all data related to that model for edit in the next page.
                echo "<td><a href='7updateCarDetails.php?Model=".$result_ar['Model']."'>".$result_ar['Model']."</td>";
                echo "<td>".$result_ar['ASKING_PRICE']."</td>";
                echo "<td><a href = '7deleteCar.php?VIN=".$result_ar['VIN']."'>"."Delete"."</a></td>";
                echo "</tr>\n";
          


                // if the last row was even, make the next one odd and vice versa for styling
                if($class=="odd") {
                    $class="even";
                } else {
                    $class="odd";
                }
            }

            echo"</table>";
            $mysqli->close();
            
        ?>



    </body>

</html>