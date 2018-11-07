<?php include_once ('./header.php');?>

<h1>This will be cool stuff eventually, maybe</h1>


<?php
    $host = "localhost"; //add SQL Server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database Name
    $con = mysqli_connect($host, $user, $pass, $dbname);

    if(mysqli_connect_errno($con)) { //Check to see if we're connected to DB
        echo "<h1>Failed to Connect to MySQL:" . mysql_connect_error() ."</h1>";
    }

    $sql = "SELECT message FROM guestbook.entries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "message: " . $row["message"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>   



<?php include_once ('./footer.php');?>
