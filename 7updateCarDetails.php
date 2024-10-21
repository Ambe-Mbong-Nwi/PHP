<html>
    <head>
        <title>the joy of php</title>
    </head>
    <body>
        <h1>Ambe's used cars</h1>
        <h3>Update the details of your car.</h3>
        <!-- when submitted, pass form to php script in file below and use the post method to do that. -->

        <?php 
        //connect to db
        include '7db.php';

        //get model from previous page
        $model = $_GET['Model'];
        echo "model: $model"."<br>";

        //query to select all data related to this model
        $query = "SELECT * FROM INVENTORY WHERE Model = TRIM('$model')";
       
        echo "Executing query: $query<br>";

        //run query, store data in variable and send response
        if ($result = $mysqli->query($query)) {
            if ($result->num_rows > 0) {
                echo"success, rows found";
            } else {
                echo"failure, no rows found".mysqli_error($mysqli);
            }
           
        } else {
            echo "sorry a vehicle with model $model cannot be found".mysqli_error($mysqli)."<br>";
        }
        

        //mysqli_fetch_assoc(): Purpose: This function retrieves the next row from the result set as an associative array, where the keys of the array correspond to the column names in the database table.
        //Looping Through Results: In your code snippet, the while loop continues to fetch rows until there are no more rows left in the result set. Each iteration of the loop retrieves one row and stores it in the variable $result_ar
        //get all the details relaated to that model and store in variables
        while ($result_ar = mysqli_fetch_assoc($result)) {
                $year = $result_ar['YEAR'];
                $make = $result_ar['Make'];
               // $model = $result_ar['Model'];
                $trim = $result_ar['TRIM'];
                $color = $result_ar['EXT_COLOR'];
                $interior = $result_ar['INT_COLOR'];
                $mileage = $result_ar['MILEAGE'];
                $transmission = $result_ar['TRANSMISSION'];
                $price = $result_ar['ASKING_PRICE'];
                $vin = $result_ar['VIN'];
        }
        
        ?>

         <!-- when submitted, pass form to php script in file below and use the post method to do that. -->
        <form action="7submitupdate.php" method="post">
            VIN: <input name="VIN" type="text" placeholder = "<?php echo $vin; ?>"/><br />
            Make: <input name="Make" type="text" placeholder = "<?php echo $make; ?>"
             /><br />
            <br />
            Model: <input name="Model" type="text" placeholder = "<?php echo $model; ?>"
             /><br />
            <br />
            Price: <input name="Asking_Price" placeholder = "<?php echo $price; ?>"
             type="text"
             /><br />
            <br />
            <button name="Submit1"
             type="submit"
             value="submit"
             >Submit </btuuon><br />
        </form>
    </body>
</html>