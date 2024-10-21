<html>
    <head>
        <title>Car Updated in the Database</title>
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <?php 

        //get updated data using names that were used in the update form
            $VIN = $_POST['VIN'];
            $Make  = $_POST['Make'];
            $Model = $_POST['Model'];
            $Price = $_POST['Asking_Price'];


        //update query
            $query = "UPDATE INVENTORY SET  
                Make = '$Make',
                Model = '$Model',
                ASKING_PRICE =  '$Price'
                WHERE VIN = '$VIN' ";

            //print query
            echo "update query: $query <br>";


            //include the database
            include '7db.php';

            //run the query
            if($result = $mysqli->query($query)) {
                echo "you have successfully updated the table";
            } else {
                echo" error updating the table";
            }

            $mysqli->close();
        ?>

</body>
</html>