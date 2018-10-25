<ul>
    <?php
        $urls = array(
            'Home' => '/',
            'Guestbook' => 'guestbook.php',
            'CoolStuff' => 'work.php'
        );

        foreach ($urls as $name => $url) {
            echo '<li><a href="'.$url.'">'.$name.'</a></li>';
        }
    ?>

</ul>
