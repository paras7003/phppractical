<html>
    <head>
        <title>Cookie</title>
        <?php
            setcookie("message","PHP Programming",time()-3600);
        ?>
    </head>
    <body>
        Cookie deleted.
        Check it at
        <a href="check_cookie.php">check_cookie.php</a>
</body>
</html>


