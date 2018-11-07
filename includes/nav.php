<ul>
    <?php
        $urls = array(
            'Guest Entry' => '/',
            'Guestbook' => 'guestbook.php',
            'CoolStuff' => 'work.php'
        );

        foreach ($urls as $name => $url) {
            echo '<li><a href="'.$url.'">'.$name.'</a></li>';
        }
    ?>

</ul>
