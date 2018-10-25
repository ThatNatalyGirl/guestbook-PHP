<?php include_once ('./header.php');?>

<h1>Guestbook</h1>
<?php
    $host = "localhost"; //add SQL Server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database Name
    $con = mysqli_connect($host, $user, $pass, $dbname);

    if(mysqli_connect_errno($con)) { //Check to see if we're connected to DB
        echo "<h1>Failed to Connect to MySQL:" . mysql_connect_error() ."</h1>";
    }
?>   

<div class="container">
    <div class="row">
        <?php $result = mysqli_query($con,"SELECT firstName,lastName,phone,email,message FROM entries");
            while($row = mysqli_fetch_array($result)) { ?>
                <?php include './includes/entries.php';?>
        <?php } mysqli_close($con);?>            
    </div>
</div>

<?php include_once ('./footer.php');?>

<!-- //this is really important to make sure it's only included one time. You don't want it to be added over and over again
//there are other ways to make something appear multiple times
//this simplifies your file structure

//the ./ is going to the siblings
-->



