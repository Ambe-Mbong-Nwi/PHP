<html>
    <head>
        <title>Sam's Used Cars</title>
    </head>

    <body>
        <h1>Sam's Used Cars</h1>
        <?php
            //link to db
            include '7db.php';

            echo "<p>reached here</p>";
            //creates a variable called $vin and assigns it the value that follows VIN= in the- URL string.
            $vin = $_GET['VIN'];

            //builds a query using the value passed to the form in the Query String, and assigns it to the cleverly named variable $query
            $query = "SELECT * FROM INVENTORY WHERE VIN = '$vin'";

           

            //query to the database
            //run the query against the mySQL database and create something called a
            // ‘result set’. A result set is the set of data that results from the running of a query. This
            // result set is assigned to the variable $result.
            if ($result = $mysqli->query($query)) {
                echo "success";
            
            } else {
                echo "sorry, a vehicle with VIN of $vin cannot be found".mysqli_error($mysqli)."<br>";
            }

            echo "<p>reached here</p>";

            //loop through all the rows returned by the query, creating a table row for each.
            while ($result_ar = mysqli_fetch_assoc($result)) {
                $year = $result_ar['YEAR'];
                $make = $result_ar['Make'];
                $model = $result_ar['Model'];
                $trim = $result_ar['TRIM'];
                $color = $result_ar['EXT_COLOR'];
                $interior = $result_ar['INT_COLOR'];
                $mileage = $result_ar['MILEAGE'];
                $transmission = $result_ar['TRANSMISSION'];
                $price = $result_ar['ASKING_PRICE'];
                //$image = $result_ar['images'];  //changed to use images from images table instead.

            }

            echo "$year $make $model";
            echo "<p>Asking Price: $price</p>";
            echo "<p>Exterior Color: $color</p>";
            echo "<p>Interior Color: $interior</p>";
            echo "<img src='images/$image'>";



            //getting the images from the image table.

             $query2 = "SELECT * FROM images WHERE VIN = '$vin'";  //getting car images from images table

             //runs the query and checks to see if any results were returned from the database.
            if ($result2 = $mysqli->query($query2)) {
               // loops through the result set as many times as there are rows.
                while ($result_ar2 = mysqli_fetch_assoc($result2)) {
                    $image = $result_ar2['ImageFile'];
                    echo "<img src='images/$image' width='250'>";
                }
            }

            $mysqli->close();
        ?>
    </body>
</html>


<!-- 
for images here, store image in the images folder, in the db input the name of those images then in the code that displays them put the path to the image using the variable as seen above. -->