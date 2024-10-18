<html>
    <head>
        <title>Ambe's used cars</title>
        <link rel="stylesheet" href="7styles.css" type="text/css">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <h1>Delete Car</h1>

        <?php 
            include '7db.php';

            //target vin value from the prev page
            $VIN = $_GET['VIN'];


            //store query statement in a variable
            $query = "DELETE FROM INVENTORY WHERE VIN = '$VIN'";

            //RUN ABOVE QUERY
            if($result = $mysqli->query($query)) {
                echo "car with vin $VIN has been successfully deleted";
            } else {
                echo "error deleting file";
            }

            $mysqli->close();
            
        
        
        ?>
    </body>
<html>