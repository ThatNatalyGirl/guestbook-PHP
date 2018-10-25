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
        echo "<h1>Failed to Connect to MySQL:" . mysql_connect_error() ."</h1>";
    }

// <!-- . is used to cancatinate -->

/**	
* Set up Post variables to connect to DataBase (DB)
* Sets up DB connection for our from using POST vars
*
*/
// var_dump($name); //*Dump information about a variable to the view.
// print_r($name); //Essentially the same as dump. It prints infor about a variable, boolean, string, etc.
// die; //*This version of die simply kills the program at the point in the code where you declare it.
// die($name); //This version of die; allows you to kill the program AND print information about the variable.
    
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT INTO entries(firstName,lastName,phone,email,message) VALUES('$firstName','$lastName','$phone','$email','$message')";

    if(!mysqli_query($con,$sql)){ //If we are not connected to the DB ',' or our fields aren't recognized by our db
        die('Error: ' . mysqli_error($con)); //Stop it and print the error
    } else {
        echo "Values Stored in our DB!";
        mysqli_close($con);
    }
?>