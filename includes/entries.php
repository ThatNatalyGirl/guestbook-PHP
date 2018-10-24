<section class="entries">
    <div class="entries-wrapper">

            <?php $result = mysqli_query("SELECT firstName,lastName,phone,email,message FROM entries");
                while($row = mysqli_fetch_array($result)) {     
            ?>
                <div class="entry">
                    <h3><?php echo $row['firstName']; ?></h3>
                    <h3><?php echo $row['lastName']; ?></h3>
                    <p><?php echo $row['phone']; ?></p>
                    <p><?php echo $row['email']; ?></p>
                    <p><?php echo $row['message']; ?></p>
                </div> 
            <?php } mysqli_close($con);?>

    </div>
</section>

<section id="entries"></section>
<!-- section#entries(hit tab) -->
<!-- $result is a common name to use. Set it to a query function, passing in the credentials, and then passing in a sql command -->
<!-- While the row (one entry) equals the result/entire DB - For every instance that you have an entry print some stuff ie the name and message  -->





<!-- -->