<?php
session_start();
?>
<html>
    <head>
        <title>Session</title>
    </head>
    <body>
    <h1>Destroying Session</h1>
    <?php
        session_destroy();
        echo "Session Destroyed";
    ?>
</body>
</html>


