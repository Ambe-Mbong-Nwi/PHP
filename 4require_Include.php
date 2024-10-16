<!-- include or require are used to add seperate portions of a page from a different php file like header and footer instead of copying the code everywhere. -->
 <!-- $difference between them is if file cannot be found, include continues with a warning but require stops the script dead -->

 <html>
    <body>
        <?php include '4menu.php' ?>
        <h1>we included the header above.</h1>
        <p>difference between them is if file cannot be found, include continues with a warning but require stops the script dead</p>
        <br />
        <p>can you believe the variables name, age and color used below were defined in a different php file and used here after including the file too</p>
        <?php include '4variables.php'; echo "$name aged $age loves the color $color"; ?>
    </body>
</html>