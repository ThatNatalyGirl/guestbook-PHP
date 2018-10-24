<?php
/**	
* Set up Connection to our local database running in MAMP
*
*/
?>


<?php
    $host = "localhost"; //add SQL Server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database Name

    $con = mysqli_connect($host, $user, $pass, $dbname);

    if(mysqli_connect_errno($con)) { //Check to see if we're connected to DB
        echo "Failed to Connect to MySQL:" . mysql_connect_error();
    }
?>


<!-- . is used to cancatinate -->