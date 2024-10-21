<!-- A session variable is a special kind of variable that, once set, is available to all the pages
in an application for as long as the user has their browser open, or until the session is
explicitly terminated by the developer (you). -->

<!-- Sessions work by creating a unique id (UID) for each visitor and storing variables based on this UID. The UID is typically
stored in a cookie. -->

<!-- a cookie is a small piece of data sent from a website and stored in a user's web browser while a user is browding a website -->

<!-- Once a user closes their browser, the cookie will be erased and the session will end. So
sessions are not a good place to store data you intend to keep for long. The right place
to store long-term data is in a database. Of course, sessions and databases can work
together. For instance, you can store a user’s preferences in a database, and retrieve
them from the database when the user “logs in” or types in their email address or does
whatever it is that you coded for them to identify themselves. Once the data is retrieved,
assign the preferences to the session variables and they will be available from then on. -->




<!-- READ MORE ABOUT SESSIONS IN BOOK: THE JOY OF PHP: DEEP DIVE INTO SESSIONS -->



<!-- Before you can store user information in your PHP session, you must first start up the
session using the session_start() function. The session_start() function must appear BEFORE the <html> tag, or it won’t work. -->
<?php session_start();  

//storing sample session variable 
 $_SESSION['firstName'] = 'Ambe';

 //check if a session variable is available or not using isset
 if(isset($_SESSION['firstName']))
 echo $_SESSION['firstName']."'s account";
 else
 $_SESSION['views'] = 1;
 echo "welcome to shoply";


 //to delete some session data use unset() func. to delete it all use session destroy
 if (isset($_SESSION['FirstName']))
    unset($_SESSION['FirstName']);


//completely destroy all session. reset session and lose all stored data
//good for logout.
session_destroy();
 ?> 

<html>
    <body>
        <p>Hello world</p>
        <!-- //retrieve session variable -->
        <?php echo $_SESSION['firstName']."'s account"; ?>
    </body>
</html>