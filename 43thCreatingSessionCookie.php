<html>
    <head>
        <title>Cookie</title>
    </head>
    <body>
    <h1>Creating Session Cookie</h1>
    <?php
        session_start();
        $cookie_name = "user";
        $cookie_value = "Paras";
        setcookie($cookie_name, $cookie_value, 0, "/");
        echo "Session cookie has been set.";
        if (isset($_COOKIE[$cookie_name])) {
        echo "<br>Value of the session cookie is: " . $_COOKIE[$cookie_name];
        } else {
         echo "<br>Session cookie not set.";
        }
    ?>
</body>
</html>


